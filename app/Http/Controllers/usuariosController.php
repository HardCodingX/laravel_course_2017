<?php

namespace App\Http\Controllers;

use Request;
use View;
use DB;

class usuariosController extends Controller {

    public function index() {
      $users = DB::table('usuarios')->select()->get();
      return View('usuarios.index', compact('users'));
    }

    public function edit($id) {
      $user = DB::table('usuarios')->select()->where('id', '=', $id)->get();
      return View('usuarios.edit', compact('user'));
    }

    public function add() {
      return View('usuarios.add');
    }

    public function update($id) {
      $Nombre = Request::get('Nombre', '');
      $Status = Request::get('Status', 0);
      $user = DB::table('usuarios')->where('id', '=', $id)->update([
        'Nombre' => $Nombre,
        'Status' => $Status
      ]);
      return redirect('users/'.$id);
    }

    public function save() {
      $Nombre = Request::get('Nombre', '');
      $Status = Request::get('Status', 0);
      $user = DB::table('usuarios')->insert([
        'Nombre' => $Nombre,
        'Status' => $Status,
        'Fecha_Creado' => date('Y-m-d'),
        'password' => ''
      ]);
      return redirect('users');
    }

    public function delete($id) {
      $users = DB::table('usuarios')->where('id', '=', $id)->delete();
      return redirect('users');
    }
}
