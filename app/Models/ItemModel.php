<?php
namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model {
    protected $tableItem = '';
	protected $tableCategory = '';

    public function __construct() {
        parent::__construct();

        $this->tableItem = $this->DBPrefix.'_tm_item';
        $this->tableCategory = $this->DBPrefix.'_tm_item_cat';
    }

    public function get_list_item() {
        $builder = $this->db->table($this->tableItem.' i');
        $builder->join($this->tableCategory.' c', 'c.item_cat_code = i.item_cat_code', 'left');
        $query   = $builder->get();
        // dd($query->getResultArray());
        return $query->getResultArray();
    }
}