<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index(){
      return view('contact');
  }

  public function store(Request $request){
      // dd($request->all());
      $this->validate($request,['email'=>'required|email']);
      dd($request->all());
  }

    //
}
