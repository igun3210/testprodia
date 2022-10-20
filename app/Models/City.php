<?php
namespace App\Models;

use CodeIgniter\Model;

class City extends Model {
    // protected $tableAccount = '';
    protected $tableCity = '';
	protected $tableForecast = '';

    public function __construct() {
        parent::__construct();

        // $this->tableAccount = 'account';
        $this->tableCity = 'city';
        $this->tableForecast = 'forecast';
    }

    public function get_list_city() {
        $builder = $this->db->table($this->tableCity);
        // $builder->join($this->tableCategory.' c', 'c.item_cat_code = i.item_cat_code', 'left');
        $query   = $builder->get();
        // dd($query->getResultArray());
        return $query->getResultArray();
    }

    public function get_list_forecast() {
        $builder = $this->db->table($this->tableCity);
        // $builder->join($this->tableCategory.' c', 'c.item_cat_code = i.item_cat_code', 'left');
        $query   = $builder->get();
        // dd($query->getResultArray());
        return $query->getResultArray();
    }

    public function save_city($data=array()) {
        $builder = $this->db->table($this->tableCity);
        $builder->insert($data);
        // $query   = $builder->get();
        // dd($query->getResultArray());
        return true;
    }

    public function save_forecast($data=array()) {
        $builder = $this->db->table($this->tableForecast);
        $builder->insertBatch($data);
        // $query   = $builder->get();
        // dd($query->getResultArray());
        return true;
    }

}