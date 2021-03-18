<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    protected $fillable= ['nome','cpf','email','telefone'];
    use HasFactory;
    use SoftDeletes;

    public function Endereco(){
        return $this->hasMany(Endereco::class, 'enderecos_id');
    }
}
