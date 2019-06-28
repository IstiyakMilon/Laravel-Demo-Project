<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
class Hellocontroller extends Controller {
  
  public function index(Request $request){
    
    // echo $request;

    dd($request->all());


    // $student= new Student;

    // $student->sname='Istiyak';
    // $student->standard=11;
    // Insert Data using Contructor method
    // $student= new Student(['sname'=>'Mithon', 'standard'=>'10']);
    // $student->save();
   
   
    // Inserting Data to Students table Using Teache model
    
    $student= new Teacher(['sname'=>'Shampa', 'standard'=>'9']);
    $student->save();
    
    // echo 'Age is '.$age;
    $subject="This is Milon";
    // $mark=[30, 40,50];

    // return view('hello')->withmysubject($subject)->withmymark($mark);
    // return view('hello')->with(['mysubject'=>$subject,'mymark'=>$mark]);
    return view('hello')->with(['subject'=>$subject]);
  }

}