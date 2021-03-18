<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Determina extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable= [''];
    public function Cliente(){
        return $this->belongsToMany(Cliente::class, 'clientes', 'clientes_id');
    }
    public function Avalicao(){
        return $this->belongsToMany(Avaliacao::class, 'avaliacaos', 'avaliacaos_id');
    }

}
