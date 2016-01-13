<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handle extends Model {
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'tbhandle';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'PROJETO',
		'HANDLE',
		'FLG_REC',
		'NUM_COM',
		'DES_COM',
		'LOT_COM',
		'DLO_COM',
		'CLI_COM',
		'IND_COM',
		'DT1_COM',
		'DT2_COM',
		'NUM_DIS',
		'DES_DIS',
		'NOM_DIS',
		'REV_DIS',
		'DAT_DIS',
		'TRA_PEZ',
		'SBA_PEZ',
		'DES_SBA',
		'TIP_PEZ',
		'MAR_PEZ',
		'MBU_PEZ',
		'DES_PEZ',
		'POS_PEZ',
		'NOT_PEZ',
		'ING_PEZ',
		'MAX_LEN',
		'QTA_PEZ',
		'QT1_PEZ',
		'MCL_PEZ',
		'COD_PEZ',
		'COS_PEZ',
		'NOM_PRO',
		'LUN_PRO',
		'LAR_PRO',
		'SPE_PRO',
		'MAT_PRO',
		'TIP_BUL',
		'DIA_BUL',
		'LUN_BUL',
		'PRB_BUL',
		'PUN_LIS',
		'SUN_LIS',
		'PRE_LIS',
		'FLG_DWG',
		'obra',
		'id',
		'fklote',
		'fkestagio',
		'grp',
		'nome_file1',
		'nome_file2',
		'nome_file3',
		'nome_file4',
		'fketapa',
		'CATEPERFIL',
		'fkImportacao',
		'fkpreparacao',
		'fkmedicao',
	];

	public $timestamps = false;

	public function getTable() {
		return $this->table;
	}

	/**
	 *  get the lote
	 */
	public function lote() {
		return $this->belongsTo('App\Lote', 'fklote', 'id');
	}

	/**
	 *  get the importacao
	 */
	public function importacao() {
		return $this->belongsTo('App\Importacao', 'fkImportacao', 'id');
	}

	public function conjuntoCronograma() {
		return $this->hasOne('App\CjtCrono', 'fkpeca', 'id');
	}

	/**
	 * @return Relationship
	 */
	public function group() {
		return Self::where('MAR_PEZ', $this->MAR_PEZ)
			->where('FLG_REC', 3)
			->get();
	}

}
