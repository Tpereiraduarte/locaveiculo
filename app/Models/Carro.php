<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Carro extends Model
{
    use Uuids;
    public $incrementing = false;

    protected $primaryKey = 'id_carro';
    protected $fillable = ['modelo','ano','fabricante','placa','imagem'];
    protected $table = 'carros';

     public function categoriacarro(){
    	return $this->belongsTo(CategoriaCarro::class,'id_carro','carro_id');
    }
    public function aluguel(){
    	return $this->belongsTo(Aluguel::class,'id_carro','carro_id');
    }
}
