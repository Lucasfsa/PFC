<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecletica extends Model
{
    protected $table = 'ecletica';

    protected $fillable = [ 'cod_rede', 'cod_loja' ];

    public function cliente()
    {
        return $this->belongsToMany('App\Cliente', 'cliente_ecletica', 'cliente_id', 'ecletica_id');
    }
}
