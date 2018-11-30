<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chave extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function ecletica(){
        return $this->belongsToMany('App\Ecletica', 'cliente_ecletica')->withPivot('quantidade');
    }
}
