<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoaJ extends Model
{
    protected $table = 'pessoa_j';

    protected $fillable = [ 'cnpj', 'cliente_id' ];
}
