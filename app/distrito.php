<?php

namespace Gestao_Assistencias;

use Illuminate\Database\Eloquent\Model;

class distrito extends Model
{
    protected $table ='distrito';


    protected $guarded = [];


//Metodo para selecionar os distritos correspondentes a uma provincia
    public static function distritos($id){
       return distrito::where('prov_id','=',$id)
       ->get();
    }
}
