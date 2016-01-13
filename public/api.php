<?php 
		
	require '../vendor/autoload.php';

	$faker = Faker\Factory::create();

	$request = $_POST;


	$data 				= array();
	$data['current'] 	= 1;
	$data['rowCount'] 	= 10;
	$data['rows'] 		= array();
	$data['total']		= 50;
	$status 			= array(0,1,2,3,4); 	

	for ($i=0; $i < $data['total']; $i++) { 
		$data['rows'][] = [

							'id'				=> $i+1,
							'obra'				=> $faker->word,
							'cliente'			=> $faker->name,
							'etapa'				=> $faker->word,
							'lote'				=> $faker->word,
							'conjunto'			=> $faker->word,
							'ndesenho'			=> $faker->word,
							'qtd'				=> $faker->word,
							'descricao'			=> $faker->word,
							'tratamento'		=> $faker->word,
							'dataprojeto'		=> $faker->date('d/m/Y'),
							'pcp'				=> $faker->word,
							'datapcp'			=> $faker->date('d/m/Y'),
							'preparação'		=> $faker->word,
							'datapreparação'	=> $faker->date('d/m/Y'),
							'gabarito'			=> $faker->word,
							'datagabarito'		=> $faker->date('d/m/Y'),
							'solda'				=> $faker->word,
							'datasolda'			=> $faker->date('d/m/Y'),
							'pintura'			=> $faker->word,
							'datapintura'		=> $faker->date('d/m/Y'),
							'expedicao'			=> $faker->word,
							'dataexpedicao'		=> $faker->date('d/m/Y'),
							'montagem'			=> $faker->word,
							'datamontagem'		=> $faker->date('d/m/Y'),
							'entrega'			=> $faker->word,
							'dataentrega'		=> $faker->date('d/m/Y'),
							'status'			=> $status[array_rand($status)],
						];
	};

	echo json_encode( $data );		