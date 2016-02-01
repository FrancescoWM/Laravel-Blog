<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class MainController extends Controller
{
    public function __construct() {
      $this->middleware('auth', ['except' => ['getLogin', 'postLogin']]);
      $this->middleware('guest', ['only' => ['getLogin', 'postLogin']]);
    }

    public function getIndex(){
      return view('backend.dashboard');
    }

    public function getLogin(){
      return view('backend.login');
    }

    public function postLogin(Request $request){
      if(Auth::attempt([
          'email' => $request->input('email'),
          'password' => $request->input('password')]
          ))
        return redirect('backend');
      else
        return redirect('backend/login');
    }

    public function getLogout(){
      Auth::logout();
    }
}
