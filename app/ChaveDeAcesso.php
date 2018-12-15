<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChaveDeAcesso extends Model
{
	protected $table = "chaves";
    protected $fillable = ['cod_chave', 'cliente', 'sistema', 'observacao', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
