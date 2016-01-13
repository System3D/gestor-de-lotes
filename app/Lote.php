<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'tblote';

	public $timestamps = false;


	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [        
		'id',
		'descricao',
		'obra',
		'fkestagio',
		'fketapa',
		'producao'
	];

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $visible = [        
		'id',
		'descricao',
		'obra',
		'fkestagio',
		'fketapa',
		'producao'
	];


	/**
	* lista handles do lote
	*/
	public function handles()
	{
		return $this->hasMany('App\Handle', 'id', 'fklote');
	}

}
