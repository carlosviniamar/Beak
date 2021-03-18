<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servico extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable= ['titulo', 'descricao', 'tempo-estimado', 'preco', 'categorias_id'];

    public function Categoria(){
        return $this->hasMany(Categoria::class, 'categorias_id');
    }
}
