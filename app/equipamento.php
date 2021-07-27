<?php

namespace Gestao_Assistencias;

use Illuminate\Database\Eloquent\Model;

class equipamento extends Model
{
    protected $table ='equipamento';



    protected $guarded = [];

    public static function equipamentos($id){

        return equipamento::where('cliente_id','=',$id)
        ->get();

    }
}
