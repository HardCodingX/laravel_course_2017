<?php

namespace App\Http\Controllers;

use Request;
use Session;
use View;

class HomeController extends Controller
{
    public function index() {
      return View('home');
    }

    public function result() {
      $val1 = Request::input('val1', 0);
      $val2 = Request::input('val2', 0);
      $suma = $val1 + $val2;
      return View('result', compact('suma'));
    }

    public function visitas() {
      $visitas = Session::get('visitas', 0);
      Session::put('visitas', ++$visitas);
      return View('visitas', compact('visitas'));
    }

    public function limpia() {
      Session::flush();
      return redirect('/visitas');
    }
}
