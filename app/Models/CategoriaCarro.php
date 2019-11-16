<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class CategoriaCarro extends Model
{
    use Uuids;
    public $incrementing = false;

    protected $primaryKey = 'id_categoria_carro';
    protected $fillable = ['categoria_id','carro_id'];
    protected $table = 'categoria_carros';
    protected $with = ['categoria','carro'];


 public function categoria(){
    	return $this->belongsTo(Categoria::class,'categoria_id','id_categoria');
    }
 public function carro(){
    	return $this->hasMany(Carro::class,'id_carro','carro_id');
    }
    public function aluguel(){
        return $this->belongsTo(Aluguel::class,'id_categoria_carro','categoria_carro_id');
    }

}