<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abrange extends Model
{
    protected $fillable= [''];
    use HasFactory;
    use SoftDeletes;
    public function Servico(){
        return $this->belongsToMany(Servico::class, 'servicos', 'servicos_id');
    }
    public function Avaliacao(){
        return $this->belongsToMany(Avaliacao::class, 'avaliacaos', 'avaliacaos_id');
    }
}
