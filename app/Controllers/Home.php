<?php

namespace App\Controllers;

use App\Models\ItemModel;

class Home extends BaseController {
	protected $itemModel;

	public function __construct() {
		$this->itemModel = new ItemModel();
	}

	public function index() {
		$view_data = array();
		// $list = $this->itemModel->findAll();
		$list = $this->itemModel->get_list_item();

		$view_data = array(
			'data' => $list,
		);
		// dd($list);

		return view('sub-item/item/listing', $view_data);
	}
}
