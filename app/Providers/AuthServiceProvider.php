<?php

namespace App\Providers;

use App\Services\PermissionGateAndPolicyAccess;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //* Define permission
        $permissionGateAndPolicy = new PermissionGateAndPolicyAccess();
        $permissionGateAndPolicy->setGateAndPolicyAccess();
        // dd(config('permissions.access.list-category'));


        //! đưa đoạn code dưới vào policy
        Gate::define('product-edit', function ($user, $product) {
            // dd($product->id);
            if ($user->checkPermissionAccess('product_edit') && $product->user_id == $user->id) {
                return true;
            };
            return false;
        });
        Gate::define('product-list', function ($user) {
            return  $user->checkPermissionAccess('product_list');
        });


        Gate::define('menu-list', function ($user) {
            return  $user->checkPermissionAccess(config('permissions.access.list-menu'));
        });
    }
}