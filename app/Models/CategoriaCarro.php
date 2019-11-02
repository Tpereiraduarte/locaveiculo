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
}
