<?php

namespace Gestao_Assistencias;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $table='marca';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

  protected $fillable = ['nome'];
}
