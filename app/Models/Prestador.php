<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestador extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable= ['nome','cpf','email','telefone'];

    public function RedeSocial(){
        return $this->belongsToMany(Rede_Social::class, 'redes-_socials', 'redes-_socials_id');
    }
}
