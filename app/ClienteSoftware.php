<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteSoftware extends Model
{
    protected $table = 'cliente_software';

    public function cliente(){
        return $this->hasMany('App\Cliente');
    }

    public function software(){
        return $this->hasManyThrough('App\Software');
    }
}
