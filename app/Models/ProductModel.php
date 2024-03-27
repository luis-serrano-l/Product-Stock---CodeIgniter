<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'qty'];

    public function getProducts() {
        return $this->findAll();
    }

    public function getProduct($id) {
        return $this->where('id', $id)->first();
    }

    public function deleteProduct($id) {
        $this->where('id', $id)->delete();
    }

    public function searchProducts($keyword) {
        return $this->table('products')
            ->like('name', $keyword)
            ->get()->getResultArray();
    }
}

