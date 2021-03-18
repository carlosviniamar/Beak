<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contem extends Model
{
    protected $fillable= [''];
    use HasFactory;
    use SoftDeletes;

    public function prestadores(){
        return $this->belongsToMany(Prestador::class, 'prestadors', 'prestadors_id');
    }

    public function redessociais(){
        return $this->belongsToMany(Pessoa::class, 'redes_socials', 'redes-_socials_id');
    }
}
