<?php

namespace App\Http\Controllers;

class ResponseController extends Controller {

  public function redirect() {
    return redirect('status/404');
  }

  public function toAction() {
    return redirect()->action('StatusController@ok');
  }

  public function json() {
    return response()->json([
      'name' => 'Paco',
      'age' => 25
    ], 404);
  }
}
