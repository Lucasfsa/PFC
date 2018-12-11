<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChaveDeAcesso extends Model
{
	protected $table = "Chaves";
    protected $fillable = ['cod_chave', 'cliente', 'sistema', 'observacao', 'user_id'];
}
