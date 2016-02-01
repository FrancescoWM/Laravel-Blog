<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function getIndex(){
      $users = User::orderBy('created_at', 'DESC')->paginate(10);
      return view('backend.user.list', compact('users'));
    }

    public function getAdd(){

    }

    public function postAdd(){

    }

    public function getDelete(){

    }

}
