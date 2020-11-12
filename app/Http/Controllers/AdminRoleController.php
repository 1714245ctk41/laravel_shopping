<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Traits\DeleteModelTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminRoleController extends Controller
{
    use DeleteModelTrait;
    private $role;
    private $permission;

    public function __construct(Role $role, Permission $permission)
    {
        $this->permission = $permission;
        $this->role = $role;
    }

    public function index()
    {

        $roles = $this->role->paginate();
        return view('admin.role.index', compact('roles'));
    }

    //! begin delete
    public function delete(Role $role)
    {
        try {
            $role->delete();
            $role->permissions()->detach();
            // $product->tags()->deattach();

            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (Exception $exception) {
            Log::error('Message:' . $exception->getMessage() . 'Line: ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }


    //! begin edit
    public function edit(Role $role)
    {
        $permissionsParent = $this->permission->where('parent_id', 0)->get();
        $permissionsChecked = $role->permissions;

        return view('admin.role.edit', ['role' => $role], compact('permissionsParent', 'permissionsChecked'));
    }
    public function update(Role $role, Request $request)
    {

        $role->update([
            'name' => $request->name,
            'display_name' => $request->display_name
        ]);
        $role->permissions()->sync($request->permission_id);

        return redirect()->route('roles.edit', ['role' => $role->id]);
    }


    //! begin create
    public function create()
    {
        $permissionsParent = $this->permission->where('parent_id', 0)->get();
        return view('admin.role.add', compact('permissionsParent'));
    }
    public function store(Request $request)
    {
        $role = $this->role->create([
            'name' => $request->name,
            'display_name' => $request->display_name
        ]);
        $role->permissions()->attach($request->permission_id);

        return redirect()->route('roles.create');
    }
}