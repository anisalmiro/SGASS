<?php

namespace Gestao_Assistencias;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $table='stock';

	 protected $fillable = ['tipo','partN','quantidade','user_id','cons_id'];
}

