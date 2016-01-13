<?php

namespace App\Http\Controllers;

use App\CjtCrono;
use App\Handle;
use App\Http\Controllers\Controller;
use App\Lote;
use App\Obra;
use Illuminate\Http\Request;
use JavaScript;

class LotesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {

		// $obras = new ObrasController;
		// $obras = $obras->index($request);
		// $obras = $obras->toArray();

		$lotes = Lote::all();
		$obras = Obra::all()->lists('descricao', 'id');

		if ($request->ajax()) {
			dd($request);
		} else {

			if ($request->old('obra_id')) {
				$etapas = Obra::find($request->old('obra_id'))->etapas->lists('codigo', 'id');
			} else {
				$etapas = array();
			}

			JavaScript::put([
				'urlbase' => env("APP_URL"),
				'obra_id' => $request->old('obra_id'),
				'etapa_id' => $request->old('etapa_id'),
				'etapas' => $etapas,
				'selected' => $request->old('handles_ids'),
			]);

			return view('lotes.index', compact('obras', 'lotes', 'etapas'));
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request) {

		$data = $request->all();

		$obra_id = $data['obra_id'];
		$etapa_id = $data['etapa_id'];
		$grouped = @$data['grouped'];
		$handles_ids = $data['handles_ids'];

		if ($request->ajax()) {
			// sleep(2);
			return view('lotes.modal', compact('obra_id', 'etapa_id', 'grouped', 'handles_ids'));
		} else {
			return view('lotes.create');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$data = $request->all();

		// Salva o lote
		$lote = Lote::create([
			'descricao' => $data['descricao'],
			'obra' => $data['obra_id'],
			'fkestagio' => null,
			'fketapa' => $data['etapa_id'],
			'producao' => null,
		]);

		if ($lote) {
			$sys_notifications[] = array('type' => 'success', 'message' => 'Lote criado com sucesso!');
		} else {
			$sys_notifications[] = array('type' => 'danger', 'message' => 'Não foi possível criar o lote');
			$request->session()->flash('sys_notifications', $sys_notifications);
			return back()->withInput($request->all());
		}

		// Salva o Cronograma do Conjunto
		$data['fkobra'] = $data['obra_id'];
		$data['fketapa'] = $data['etapa_id'];
		$handles_ids = array();

		foreach (@$data['handles_ids'] as $handle_id) {
			if ($request->has('grouped')) {

				$handles_conjunto = Handle::find($handle_id)->group();

				foreach ($handles_conjunto as $handle) {
					// Atualiza HANDLE [lote]
					$handle->fklote = $lote->id;
					$handle->save();

					$handles_ids[] = $handle->id;
				}

			} else {

				$handl = Handle::find($handle_id);
				// Atualiza HANDLE [lote]
				$handl->fklote = $lote->id;
				$handl->save();

				$handles_ids[] = $handl->id;
			}
		}

		foreach ($data as $key => $value) {
			if (empty($value)) {
				unset($data[$key]);
			}
		}

		$cronosaved = 0;
		foreach ($handles_ids as $handle_id) {

			$data['fkpeca'] = $handle_id;
			$data['fklote'] = $lote->id;

			$cjtcrono = CjtCrono::create($data);

			if ($cjtcrono) {
				$cronosaved++;
			}
		}

		if ($cronosaved > 0) {
			$sys_notifications[] = array('type' => 'success', 'message' => 'Novo Conograma criado com  ' . $cronosaved . ' itens!');
		} else {
			$sys_notifications[] = array('type' => 'danger', 'message' => 'Não foi possível criar o CRONOGRAMA!');
			$request->session()->flash('sys_notifications', $sys_notifications);
			return back()->withInput($request->all());
		}

		$request->session()->flash('sys_notifications', $sys_notifications);
		return back()->withInput($request->all());

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
