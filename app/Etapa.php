<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
	/**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'tbetapa';

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [        
		'id', 'codigo', 'identificacao', 'fkobra', 'fkcliente', 'obs'
	];

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $visible = [        
		'id', 'codigo', 'identificacao', 'fkobra', 'fkcliente', 'obs'
	];


	/**
	* Retorna a obra da etapa
	*/
	public function obra()
	{
		return $this->belongsTo('App\Obra', 'id', 'fkobra');
	}

	/**
	* Retorna os lotas da etapa
	*/
	public function lotes()
	{
		return $this->hasMany('App\Lote', 'fketapa', 'id');
	}

}
