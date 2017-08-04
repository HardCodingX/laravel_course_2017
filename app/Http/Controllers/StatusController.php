<?php

namespace App\Http\Controllers;

use Request;
use Response;

class StatusController extends Controller {

    public function ok() {
      return Response('All OK', 200)->header('Content-Type', 'text/html');
    }

    public function notFound() {
      return Response('Not found your content', 404)->header('Content-Type', 'text/plain');
    }

    public function bigProblem() {
      return Response('Server error', 500)->header('Content-Type', 'text/plain');
    }
}
