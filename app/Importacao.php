<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Importacao extends Model
{
    	/**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'tbimportacao';

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'Id',
		'descricao',
		'fkobra',
		'fketapa',
		'fkcliente',
		'fkusuario',
		'data',
		'dbf2d',
		'dbf3d',
		'ifc',
		'fbx',
		'dbf2d_orig',
		'dbf3d_orig',
		'ifc_orig',
		'fbx_orig',
		'erro_debug',
	];

	/**
	* lista handles da importação
	*/
	public function handles()
	{
		return $this->hasMany('App\Handle', 'id', 'fkImportacao');
	}
}
