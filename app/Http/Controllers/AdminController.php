<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    // public function index(){
    //     return view('layouts.alluser');
    // }

    public function addUser(){
        return view('dashboard.adduser');
    }

    public function editUser(){
        return view('dashboard.edituser');
    }


    public function showUser(){
        return view('dashboard.showuser');
    }

    public function updateUser(){
        // return view('dashboard.deleteuser');
    }
    public function softDeleteUser(){
        // return view('dashboard.deleteuser');
    }
    public function restoreUser(){
        // return view('dashboard.deleteuser');
    }
    public function deleteUser(){
        // return view('dashboard.deleteuser');
    }
    

    
}
