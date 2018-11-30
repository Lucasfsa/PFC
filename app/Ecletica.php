<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecletica extends Model
{
    protected $table = 'ecletica';

    public function cliente(){
        return $this->belongsToMany('App\Cliente', 'cliente_ecletica')->withPivot('chave_id');
    }
}
