<?php

namespace App\Http\Controllers;

use Request;
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
}
