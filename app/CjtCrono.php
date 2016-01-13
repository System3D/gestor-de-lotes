<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CjtCrono extends Model
{
    /**
	* The table associated with the model.
	*
	* @var string
	*/
	protected $table = 'tbcjtcrono';

	public $timestamps = true;

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [        
		'id',
		'fklote',
		'fkobra',
		// 'pcp',
		'dataprev_pcp',
		'datareal_pcp',
		// 'preparacao',
		'dataprev_preparacao',
		'datareal_preparacao',
		// 'gabarito',
		'dataprev_gabarito',
		'datareal_gabarito',
		// 'solda',
		'dataprev_solda',
		'datareal_solda',
		// 'pintura',
		'dataprev_pintura',
		'datareal_pintura',
		// 'expedicao',
		'dataprev_expedicao',
		'datareal_expedicao',
		// 'montagem',
		'dataprev_montagem',
		'datareal_montagem',
		// 'entrega',
		'dataprev_entrega',
		'datareal_entrega',
		'fkpeca',
		'status',
		'fketapa',
		'pcp_qtd',
		'preparacao_qtd',
		'gabarito_qtd',
		'solda_qtd',
		'pintura_qtd',
		'expedicao_qtd',
		'montagem_qtd',
		'entrega_qtd',
		'fkmedicoes',
		'created_at',
		'updated_at',
	];

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $visible = [        
		'id',
		'fklote',
		'fkobra',
		// 'pcp',
		'dataprev_pcp',
		'datareal_pcp',
		// 'preparacao',
		'dataprev_preparacao',
		'datareal_preparacao',
		// 'gabarito',
		'dataprev_gabarito',
		'datareal_gabarito',
		// 'solda',
		'dataprev_solda',
		'datareal_solda',
		// 'pintura',
		'dataprev_pintura',
		'datareal_pintura',
		// 'expedicao',
		'dataprev_expedicao',
		'datareal_expedicao',
		// 'montagem',
		'dataprev_montagem',
		'datareal_montagem',
		// 'entrega',
		'dataprev_entrega',
		'datareal_entrega',
		'fkpeca',
		'status',
		'fketapa',
		'pcp_qtd',
		'preparacao_qtd',
		'gabarito_qtd',
		'solda_qtd',
		'pintura_qtd',
		'expedicao_qtd',
		'montagem_qtd',
		'entrega_qtd',
		'fkmedicoes',
	];

	public function handle()
	{
		return $this->belongsTo('App\Handle', 'fkpeca');
	}

}
