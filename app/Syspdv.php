<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syspdv extends Model
{
    protected $table = 'syspdv';

    protected $fillable = [ 'controle', 'versao', 'serie' ];

    public function cliente()
    {
        return $this->belongsToMany('App\Cliente', 'cliente_syspdv');
    }
}
