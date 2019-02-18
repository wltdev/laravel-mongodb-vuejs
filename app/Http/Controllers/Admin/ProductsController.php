<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;

class ProductsController extends BaseController
{
    public function __constructor()
    {
        prent::__constructor();
    }

    public function index()
    {
        $data = User::all();
        
        return view('welcome', compact('data'));
    }

    public function addUser()
    {
        $data = new User;
        $data->name     = 'User test 2';
        $data->password = bcrypt('123456');
        $data->email    = 'user@test.com';
        $data->save();

        return $data;
    }


}
