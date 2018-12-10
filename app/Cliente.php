<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    protected $fillable = [
        'nome_fantasia', 'razao_social', 'segmento', 'email', 'telefone', 'user_id'
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pessoa_j(){
        return $this->hasOne('App\PessoaJ');
    }

    public function pessoa_f(){
        return $this->hasOne('App\PessoaF');
    }

    public function syspdv()
    {
        return $this->belongsToMany('App\Syspdv', 'cliente_syspdv', 'cliente_id', 'syspdv_id')->withPivot('chave_id')->withTimestamps();
    }

    public function acsn()
    {
        return $this->belongsToMany('App\Acsn', 'cliente_acsn', 'cliente_id', 'acsn_id');
    }

    public function ecletica()
    {
        return $this->belongsToMany('App\Ecletica', 'cliente_ecletica', 'cliente_id', 'ecletica_id');
    }
}
