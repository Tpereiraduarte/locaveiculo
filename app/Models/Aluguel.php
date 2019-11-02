<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Aluguel extends Model
{
    use Uuids;
    public $incrementing = false;

    protected $primaryKey = 'id_aluguel';
    protected $fillable = ['data_inicial','data_final','valor','usuario_id','carro_id'];
    protected $table = 'aluguels';
    
    public function paragrafos()
    {
        return $this->hasMany(Paragrafo::class,'id_norma','norma_id');
    }
}
