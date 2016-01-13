<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
	/**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'tbobras';
	
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [        
		'id', 'descricao', 'dataini', 'datafim', 'fkcliente', 'obs', 'status_online'
	];

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $visible = [        
		'id', 'descricao', 'dataini', 'datafim', 'fkcliente', 'obs', 'status_online'
	];


	/**
	* lista etapas da obra
	*/
	public function etapas()
	{
		return $this->hasMany('App\Etapa', 'fkobra', 'id');
	}

}
