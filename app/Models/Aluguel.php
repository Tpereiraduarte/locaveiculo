<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Aluguel extends Model
{
    use Uuids;
    public $incrementing = false;

    protected $primaryKey = 'id_aluguel';
    protected $fillable = ['data_inicial','data_final','cliente_id','categoria_carro_id','carro_id','valor'];
    protected $table = 'aluguels';
    protected $with = ['cliente','categoriacarro','carro'];
    
    public function cliente(){
    	return $this->belongsTo(Cliente::class,'cliente_id','id_cliente');
    }

    public function categoriacarro(){
        return $this->belongsTo(Categoria::class,'categoria_carro_id','id_categoria_carro');
    }

 	public function carro(){
    	return $this->belongsTo(Carro::class,'carro_id','id_carro');
    }

}
