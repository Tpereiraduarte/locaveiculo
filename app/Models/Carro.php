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
}
