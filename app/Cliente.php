<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    protected $fillable = [
        'nome_fantasia', 'razao_social', 'cnpj', 'segmento', 'email', 'telefone',
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function software(){
        return $this->hasOne('App\Software', 'software_id');
    }

    public function clienteSoftware(){
        return $this->belongsTo('App\ClienteSoftware');
    }
}
