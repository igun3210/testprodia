<?php
namespace App\Models;

use CodeIgniter\Model;

class ProdiaModel extends Model {
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
        $query   = $builder->get();
        return $query->getResultArray();
    }

    public function get_city($cityID='') {
        $builder = $this->db->table($this->tableCity);
        $builder->where('city_id', $cityID);
        $query   = $builder->get();
        return $query->getRowArray();
    }

    public function get_list_forecast($cityID='') {
        $builder = $this->db->table($this->tableForecast);
        $builder->where('city_key', $cityID);
        $query   = $builder->get();
        return $query->getResultArray();
    }

    public function save_city($data=array()) {
        $builder = $this->db->table($this->tableCity);
        $builder->insert($data);
        return true;
    }

    public function update_city($cityID='', $data=array()) {
        $builder = $this->db->table($this->tableCity);
        $builder->where('city_id', $cityID);
        $builder->update($data);
        return true;
    }

    public function save_forecast($data=array()) {
        $builder = $this->db->table($this->tableForecast);
        $builder->insertBatch($data);
        return true;
    }

    public function clear_forecast($cityID='') {
        $builder = $this->db->table($this->tableForecast);
        $builder->where('city_key', $cityID);
        $builder->delete();
        return true;
    }

}