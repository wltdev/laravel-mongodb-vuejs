<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller as BaseController; 
use Illuminate\Http\Request;
use App\Http\Requests\User as UserRequest;
use Maklad\Permission\Models\Role;
use App\Models\User;
use Session, Response;

class UsersController extends BaseController
{   
    public $controller;

    public function __construct()
    {
        parent::__construct();
        
        $this->controller = (object) null;
        $this->controller->title       = 'Users'; 
        $this->controller->permissions = 'users';
        $this->controller->folder      = 'admin/'.$this->controller->permissions.'/';
        $this->controller->route       = 'admin/'.$this->controller->permissions.'/';
    }

    public function index()
    {  
        return view($this->controller->folder.'index', [
            'controller' => $this->controller
        ]);
    }

    public function getCollection()
    {
        try {
            $collection = User::all();   
            $collection = $this->formatCollection( $collection );
        } catch (\Exception $e) {
            return Response::json($e->getMessages());    
        }
        
        return Response::json($collection); 
    }

    protected function formatCollection( $collection ) 
    {
        foreach ( $collection as $item ) {
            $item->url = url('admin/users/'.$item->_id);
        }

        return $collection;
    }

    public function create()
    {
        $roles = Role::all();
        
        return view($this->controller->folder.'create', [
            'roles'      => $roles,
            'controller' => $this->controller   
        ]);
    }

    public function show($id)
    {
        $collection = User::find($id);

        return view($this->controller->folder.'show', [
            'collection' => $collection,
            'controller' => $this->controller
        ]);
    }

    public function store(UserRequest $request)
    {
        $input = $request->all();
        try {
            $user = User::create($input);
            // set user role
            if ( isset($input['role']) && (!empty($input['role'])) )
            $user->assignRole($input['role']);  
        
        } catch (\Exception $e) {
            return Response::json($e->getMessages());    
        }
        
        return Response::json(['success' => true]);    
    }


}
