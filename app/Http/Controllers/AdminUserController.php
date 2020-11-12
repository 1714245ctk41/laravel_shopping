<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Traits\DeleteModelTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    use DeleteModelTrait;
    private $user;
    private $role;
    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }

    public function index()
    {
        $users = $this->user->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    // ! begin delete
    public function delete(User $user)
    {
        return $this->deleteModelTrait($user);
    }

    //! begin edit user
    public function edit(User $user)
    {
        $roles = $this->role->all();
        $rolesOfUser = $user->roles;
        return view('admin.user.edit', compact('user', 'roles', 'rolesOfUser'));
    }

    public function update(User $user, Request $request)
    {
        try {
            $roles = $this->role->all();

            DB::beginTransaction();

            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
            $user->roles()->sync($request->role_id);
            $rolesOfUser = $user->roles;

            DB::commit();
            return view('admin.user.edit', compact('user', 'roles', 'rolesOfUser'));
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . '---Line: ' . $exception->getLine());
        }
    }


    //! begin create user
    public function create()
    {
        $roles = $this->role->all();
        return view('admin.user.add', compact('roles'));
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $roles = $this->role->all();
            $user = $this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->roles()->attach($request->role_id);

            DB::commit();
            return redirect()->route('users.create', compact('roles'));
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . '---Line: ' . $exception->getLine());
        }
    }
}