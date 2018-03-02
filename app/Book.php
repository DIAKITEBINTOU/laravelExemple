<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function genre()
    { 
        return $this->belongsTs('App\Genre');
    }
    public function translations()
    {
        return $this->belongsToMany('App\Translation');
    }
}



    

   

