<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acsn extends Model
{
    protected $table = 'acsn';

    protected $fillable = [ 'contrato' ];

    public function cliente()
    {
        return $this->belongsToMany('App\Cliente', 'cliente_acsn', 'cliente_id', 'acsn_id');
    }
}
