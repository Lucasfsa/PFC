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
        return $this->belongsTo('App\User');
    }

    public function software(){
        return $this->belongsTo('App\Software', 'software_id');
    }
}
