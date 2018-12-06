<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoaF extends Model
{
    protected $table = 'pessoa_f';

    protected $fillable = [ 'cpf', 'cliente_id' ];
}
