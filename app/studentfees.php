<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentfees extends Model
{
   public function user(){
        return $this->belongsTo(User::class);
    }  
}
