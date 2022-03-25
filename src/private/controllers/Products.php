<?php

namespace App\Controllers;

use App\Libraries\Controller;

class Products extends Controller
{
    public function __constructor()
    {
        // products cunstructor
    }

    public function index()
    {
        // inside index
        $this->view("sample");
    }

    public function add()
    {
        $postdata = $_POST ?? array();
        
        // echo "<pre>";
        // print_r($postdata);
        // echo "</pre>";

        if (isset($postdata['id']) && isset($postdata['name']) && isset($postdata['price'])) {
            $product = $this-> model('Product');    // ?????????
            $product->name = $postdata['name'];
            $product->price = $postdata['price'];
            $product ->save();
        }
        
        $data['products'] = $this->model('Product')::all();
        // print_r($data['products']);
        $this->view('products/add', $data);
        // print_r($postdata);
    }
}
