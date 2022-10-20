<?php

namespace App\Controllers;

// use CodeIgniter\HTTP\RequestInterface;
use App\Models\ProdiaModel;
use App\Models\City;

class Prodia extends BaseController {
	protected $prodiaModel;
	protected $cityModel;
	
	public function __construct() {
		$this->prodiaModel = new ProdiaModel();
		$this->cityModel = new City();
		
	}

	public function index() {
		$view_data = array();

		$city = $this->prodiaModel->get_list_city();

		$view_data = array(
			'data' => $city,
		);

		return view('prodia/home', $view_data);
	}

	public function show($c='') {
		$view_data = array();

		$d_city = $this->prodiaModel->get_city($c);
		if (!isset($d_city) || count($d_city)==0) return redirect()->to('/prodia/index');

		$l_forecast = $this->prodiaModel->get_list_forecast($c);
		if (!isset($l_forecast) || count($l_forecast)==0) return redirect()->to('/prodia/index');

		$view_data = array(
			'city' => $d_city,
			'data' => $l_forecast,
		);

		return view('prodia/show', $view_data);
	}

	public function save() {
		$input = $this->request->getVar();
		$data_input = json_decode($input['new_data'],true);
		
		foreach ($data_input['list'] as $v) {
			$data_forecast[] = array(
				'city_key'			=> $data_input['city']['id'],
				'forecast_time'		=> $v['dt_txt'],
				'forecast_pressure'	=> $v['main']['pressure'],
				'forecast_humidity'	=> $v['main']['humidity'],
				'forecast_wind'		=> $v['wind']['speed']
			);
		}
		// $list = $this->prodiaModel->save_city($data_city);

		$d_city = $this->prodiaModel->get_city($data_input['city']['id']);
		if (isset($d_city)) {
			$data_city = array(
				'city_del'	=> 0
			);
			$this->prodiaModel->update_city($data_input['city']['id'], $data_city);
		} else {
			$data_city = array(
				'city_id'	=> $data_input['city']['id'],
				'city_name'	=> $data_input['city']['name'],
				'city_lat'	=> $data_input['city']['coord']['lat'],
				'city_lon'	=> $data_input['city']['coord']['lon'],
				'city_del'	=> 0
			);
		}


		$this->prodiaModel->save_city($data_city);
		$this->prodiaModel->save_forecast($data_forecast);


		return redirect()->to('/prodia/show/'.$data_input['city']['id']);
	}

	public function clear($cityID='') {
		$d_city = $this->prodiaModel->get_city($cityID);
		if (isset($d_city)) {
			$data_city = array(
				'city_del'	=> 1
			);
			$this->prodiaModel->update_city($cityID, $data_city);
			$this->prodiaModel->clear_forecast($cityID);
		}

		return redirect()->to('/prodia');
	}
}
