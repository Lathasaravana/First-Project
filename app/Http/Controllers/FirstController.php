<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
  public function first($id)
  {
   // return 'Hi im using Controller';
   //return $id;
   //return view('first');
  //return view('user.create',['name'=>'Latha']);
   return view('user.create') ->with(['name'=>'Latha']);

  }
}
