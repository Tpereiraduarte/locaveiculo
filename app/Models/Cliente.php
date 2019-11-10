<?php

namespace App\Models;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    use Uuids;
    public $incrementing = false;

    protected $primaryKey = 'id_cliente';
    protected $fillable = ['nome','sobrenome','cpf','cnh','email','password'];
    protected $table = 'clientes';

     public function aluguel(){
    	return $this->belongsTo(Aluguel::class,'id_cliente','cliente_id');
    }

}

