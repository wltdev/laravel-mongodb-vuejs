<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController; 
use Maklad\Permission\Models\Role;

class RolesController extends BaseController
{   
    public $controller;

    public function __construct()
    {
        parent::__construct();
        
        $this->controller = (object) null;
        $this->controller->title       = 'Roles'; 
        $this->controller->permissions = 'roles';
        $this->controller->folder      = 'admin/'.$this->controller->permissions.'/';
        $this->controller->route       = 'admin/'.$this->controller->permissions.'/';
    }

    public function index()
    {
        $collection = User::Role();

        return view($this->controller->folder.'index', [
            'collection' => $collection,
            'controller' => $this->controller
        ]);
    }

    public function create()
    {
        $roles = Role::all();

        return view($this->controller.'create', [
            'roles'      => $roles,
            'controller' => $this->controller   
        ]);
    }


}
