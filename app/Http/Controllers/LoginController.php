<?php

namespace App\Http\Controllers;

use Request;
use Session;
use View;
use DB;

class LoginController extends Controller
{
    public function login() {
      if (Session::get('loged', false)) {
        return redirect()->action('LoginController@admin');
      }
      return View('login');
    }

    public function makeLogin() {
      $email = Request::get('femail', '');
      $password = md5(Request::get('fpassword', ''));

      $user = DB::table('users')->select()
        ->where('email', '=', $email)
        ->where('password', '=', $password)
        ->get();

      if(count($user) == 1) {
        Session::put('loged', true);
        return redirect()->action('LoginController@admin');
      } else {
        return View('login');
      }
    }

    public function admin() {
      if (Session::get('loged', false)) {
        return View('admin');
      }
      return redirect()->action('LoginController@login');
    }

    public function close() {
      Session::flush();
      return redirect()->action('LoginController@login');
    }
}
