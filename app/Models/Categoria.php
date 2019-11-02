<?php

namespace App\Models;
use App\Traits\Uuids;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use Uuids;
    public $incrementing = false;

    protected $primaryKey = 'id_categoria';
    protected $fillable = ['nome','capacidade_carga','passageiro','opcionais','valor_diaria'];
    protected $table = 'categorias';
}
