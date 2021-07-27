<?php

namespace Gestao_Assistencias;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table ='cliente';


    protected $guarded = [];
    
    public static function distritos($id){

        return distrito::where('prov_id','=',$id)
        ->get();

    }

}