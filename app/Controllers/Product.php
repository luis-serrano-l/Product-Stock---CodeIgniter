<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();

        return view('products/index', ['products' => $model->getProducts()]);
    }

    public function view($id)
    {
        $model = new ProductModel();

        $product = $model->getProduct($id);

        return view('products/view', ['product' => $product]);
    }

    public function create()
    {
        return view('products/create');
    }

    public function store()
    {
        helper('form');

        $model = new ProductModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'qty' => intval($this->request->getVar('qty'))
        ];

        $model->insert($data);

        return redirect()->to('/products');
    }

    public function edit($id)
    {
        $model = new ProductModel();

        $product = $model->getProduct($id);

        return view('products/edit', ['product' => $product]);
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->deleteProduct($id);

        return redirect()->to('/products');
    }

    public function update($id)
    {
        helper('form');

        $model = new ProductModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'qty' => intval($this->request->getVar('qty'))
        ];

        $model->update($id, $data);

        return redirect()->to('/products');
    }

    public function add($id)
    {
        helper('form');

        $model = new ProductModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'qty' => intval($this->request->getVar('qty')) + 1
        ];

        $model->update($id, $data);

        return redirect()->to('/products');
    }

    public function subtract($id)
    {
        helper('form');

        $model = new ProductModel();

        if (intval($this->request->getVar('qty')) > 0) {
            $data = [
                'name' => $this->request->getVar('name'),
                'qty' => intval($this->request->getVar('qty')) - 1
            ];

            $model->update($id, $data);
        }

        return redirect()->to('/products');
    }

    public function search()
    {
        helper('form');

        $model = new ProductModel();

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $products = $model->searchProducts($keyword);
        } else {
            $products = $model->getProducts();
        }

        return view('products/index', ['products' => $products]);
    }
}