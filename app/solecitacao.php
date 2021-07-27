<?php

namespace Gestao_Assistencias;

use Illuminate\Database\Eloquent\Model;

class solecitacao extends Model
{
   protected $table ='solecitacao';

    protected $fillable = ['descricao', 'estado','clie_id','avaria_id','equip_id','distrit_id'];

}
