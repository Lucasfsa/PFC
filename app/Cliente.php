<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    protected $fillable = [
        'nome_fantasia', 'razao_social', 'segmento', 'email', 'telefone',
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pessoa_f(){
        return $this->hasOne('App\PessoaF');
    }

    public function pessoa_j(){
        return $this->hasOne('App\PessoaJ');
    }

    public function ecletica(){
        return $this->belongsToMany('App\Ecletica', 'cliente_ecletica')->withPivot('chave_id');
    }

    public function cliente_ecletica(){
        return $this->hasMany('App\ClienteEcletica');
    }
}
