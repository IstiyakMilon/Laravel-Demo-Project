<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   // Define fillable ( What data we can insert)

   protected $fillable =['sname', 'standard'];

    //Removing Auto created_at and updated_at
    public $timestamps=false;
}
