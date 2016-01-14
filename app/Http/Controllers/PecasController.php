<?php

namespace App\Http\Controllers;

use App\CjtCrono;
use App\Handle;
use App\Http\Controllers\Controller;
use App\Lote;
use DB;
use Illuminate\Http\Request;
use JavaScript;

class PecasController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request, $obra_id = null, $etapa_id = null) {

		if ($request->ajax()) {

			$flg_rec = $request->input('flg_rec', 3);

			$orderBy = $request->input('sort', ['id' => 'asc']);

			$handle = new Handle;
			$cjtcrono = new CjtCrono;

			$handles = $handle->where('obra', $obra_id)
				->where('fketapa', $etapa_id)
				->where('FLG_REC', $flg_rec)
				->orderBy(current(array_keys($orderBy)), current($orderBy))
				->with('lote'); // if you need options data anyway

			if ($request->input('grouped')) {

				if ($flg_rec == 3) {
					$handles = $handles->groupBy('MAR_PEZ')
						->select($handle->getTable() . '.*', DB::raw('SUM(QTA_PEZ) as QTA_PEZ'))
						->get();
				} else {
					$handles = $handles->groupBy('POS_PEZ')
						->select($handle->getTable() . '.*', DB::raw('SUM(QTA_PEZ) as QTA_PEZ'))
						->get();
				}

			} else {
				$handles = $handles->get();
			}

			if ($request->ajax()) {

				$response = array();
				$response['data'] = array();

				foreach ($handles as $handle) {

					// dd( $handle->group );

					$response['data'][] = [
						'PROJETO' => $handle->PROJETO,
						'HANDLE' => $handle->HANDLE,
						'FLG_REC' => $handle->FLG_REC,
						'NUM_COM' => $handle->NUM_COM,
						'DES_COM' => $handle->DES_COM,
						'LOT_COM' => $handle->LOT_COM,
						'DLO_COM' => $handle->DLO_COM,
						'CLI_COM' => $handle->CLI_COM,
						'IND_COM' => $handle->IND_COM,
						'DT1_COM' => $handle->DT1_COM,
						'DT2_COM' => $handle->DT2_COM,
						'NUM_DIS' => $handle->NUM_DIS,
						'DES_DIS' => $handle->DES_DIS,
						'NOM_DIS' => $handle->NOM_DIS,
						'REV_DIS' => $handle->REV_DIS,
						'DAT_DIS' => $handle->DAT_DIS,
						'TRA_PEZ' => $handle->TRA_PEZ,
						'SBA_PEZ' => $handle->SBA_PEZ,
						'DES_SBA' => $handle->DES_SBA,
						'TIP_PEZ' => $handle->TIP_PEZ,
						'MAR_PEZ' => $handle->MAR_PEZ,
						'MBU_PEZ' => $handle->MBU_PEZ,
						'DES_PEZ' => $handle->DES_PEZ,
						'POS_PEZ' => $handle->POS_PEZ,
						'NOT_PEZ' => $handle->NOT_PEZ,
						'ING_PEZ' => $handle->ING_PEZ,
						'MAX_LEN' => $handle->MAX_LEN,
						'QTA_PEZ' => $handle->QTA_PEZ,
						'QT1_PEZ' => $handle->QT1_PEZ,
						'MCL_PEZ' => $handle->MCL_PEZ,
						'COD_PEZ' => $handle->COD_PEZ,
						'COS_PEZ' => $handle->COS_PEZ,
						'NOM_PRO' => ($handle->NOM_PRO == null) ? 'CHAPA' : $handle->NOM_PRO,
						'LUN_PRO' => $handle->LUN_PRO,
						'LAR_PRO' => $handle->LAR_PRO,
						'SPE_PRO' => $handle->SPE_PRO,
						'MAT_PRO' => $handle->MAT_PRO,
						'TIP_BUL' => $handle->TIP_BUL,
						'DIA_BUL' => $handle->DIA_BUL,
						'LUN_BUL' => $handle->LUN_BUL,
						'PRB_BUL' => $handle->PRB_BUL,
						'PUN_LIS' => $handle->PUN_LIS,
						'SUN_LIS' => $handle->SUN_LIS,
						'PRE_LIS' => $handle->PRE_LIS,
						'FLG_DWG' => $handle->FLG_DWG,
						'obra' => $handle->obra,
						'id' => $handle->id,
						'fklote' => ($handle->lote) ? $handle->lote->descricao : '',
						'fkestagio' => $handle->fkestagio,
						'grp' => $handle->grp,
						'nome_file1' => $handle->nome_file1,
						'nome_file2' => $handle->nome_file2,
						'nome_file3' => $handle->nome_file3,
						'nome_file4' => $handle->nome_file4,
						'fketapa' => $handle->fketapa,
						'CATEPERFIL' => $handle->CATEPERFIL,
						'fkImportacao' => $handle->fkImportacao,
						'fkpreparacao' => $handle->fkpreparacao,
						'fkmedicao' => $handle->fkmedicao,
						'status' => null,
					];
				}

				$response['current'] = $request->input('current', 1);
				$response['rowCount'] = $request->input('rowCount', 10);
				$response['total'] = $handles->count();

				return json_encode($response);

			}

		} else {

			$obras = new ObrasController;
			$obras = $obras->index($request);
			$lotes = Lote::all();

			if ($request->old('obra_id')) {
				$etapas = $obras->find($request->old('obra_id'))->etapas->lists('codigo', 'id');
			} else {
				$etapas = array();
			}

			JavaScript::put([
				'urlbase' => env("APP_URL") . env("APP_URLPREFIX"),
				'obra_id' => $request->old('obra_id'),
				'etapa_id' => $request->old('etapa_id'),
				'etapas' => $etapas,
				'selected' => $request->old('handles_ids'),
			]);

			return view('pecas.index', compact('obras', 'lotes'));
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
