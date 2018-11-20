<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteSoftware extends Model
{
    protected $table = 'cliente_software';

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

    public function software(){
        return $this->belongsTo('App\Software');
    }
}
