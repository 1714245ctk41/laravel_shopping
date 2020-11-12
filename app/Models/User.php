<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function checkPermissionAccess($permissionCheck)
    {
        // * User login có quyền add, sửa danh mục và quyền xem menu
        // * B1: Lấy được tất cả các quyền của user đang login hệ thống
        // * B2: So sánh giá trị đưa vào của router hiện tại xem có tồn tại trong các quyền lấy được hay không

        $roles = auth()->user()->roles;
        foreach ($roles as $role) {
            $permission = $role->permissions;
            if ($permission->contains('key_code', $permissionCheck)) {
                return true;
            }
        }
        return false;
    }
}