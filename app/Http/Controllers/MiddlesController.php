<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MiddlesController extends Controller {

  public function ages($age) {
    return response('Age is: ' . $age, 200);
  }

  public function userData($name) {
    return response()->json([
      'name' => $name
    ], 200);
  }
}
