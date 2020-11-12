<?php

namespace App\Services;

use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate as FacadesGate;

class PermissionGateAndPolicyAccess
{
    public function setGateAndPolicyAccess()
    {
        $this->defineGateCategory();
    }
    public function defineGateCategory()
    {
        FacadesGate::define('category-list', 'App\Policies\CategoryPolicy@view');
        FacadesGate::define('category-add', 'App\Policies\CategoryPolicy@create');
        FacadesGate::define('category-edit', 'App\Policies\CategoryPolicy@update');
        FacadesGate::define('category-delete', 'App\Policies\CategoryPolicy@delete');
    }
}