<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function software(){
        return $this->belongsTo('App\Software', 'software_id');
    }
}
