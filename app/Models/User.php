<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class User extends Authenticatable
{
    use Uuids;
    use Notifiable;
    public $incrementing = false;

	protected $primaryKey = 'id_usuario';
    protected $fillable = ['nome','sobrenome','cpf','cnh','email','password','remember_token','email_verified_at'];
    protected $table = 'users';

}
