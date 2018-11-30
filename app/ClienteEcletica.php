<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteEcletica extends Model
{
    protected $table = 'cliente_ecletica';

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
}
