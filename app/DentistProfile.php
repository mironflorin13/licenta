<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DentistProfile extends Model
{
    protected $guarded=[];

   public function user()
   { 
       return $this->belongsTo(Dentist::class);
   } 
}
