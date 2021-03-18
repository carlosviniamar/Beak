<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conversa extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable= ['mensagem','clientes_id','prestadors_id'];
    public function Cliente(){
        return $this->belongsToMany(Cliente::class, 'clientes', 'clientes_id');
    }
    public function Prestador(){
        return $this->belongsToMany(Prestador::class, 'prestadors', 'prestadors_id');
    }
}
