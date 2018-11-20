<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $table = 'softwares';

    public function cliente(){
        return $this->belongsToMany('App\Cliente');
    }
}
