<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $table = 'softwares';

    public function clienteSoftware(){
        return $this->belongsTo('App\ClienteSoftware');
    }

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
}
