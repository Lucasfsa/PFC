<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chave extends Model
{
    public function cliente(){
        return $this->belongsTo('App\Cliente', 'cliente_id');
    }

    public function software(){
        return $this->belongsTo('App\Software', 'software_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
