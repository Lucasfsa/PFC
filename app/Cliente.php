<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'id_funcionario');
    }
}
