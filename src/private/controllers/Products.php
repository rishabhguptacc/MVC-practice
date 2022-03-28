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
            $product->save();
        }
        
        
        $data['products'] = $this->model('Product')::all();
        // print_r($data['products']);
        $this->view('products/add', $data);
        // print_r($postdata);
    }


    public function edit()
    {
        $params = func_get_args();
        $data['product'] = $this->model('Product')::find(array('id' => $params[2]));
        $this->view('products/add', $data);
    }

    public function update()
    {
        global $settings;
        $postdata = $_POST ?? array();
        if (isset($postdata['id']) && isset($postdata['name']) && isset($postdata['price'])) {
            $product = $this-> model('Product')::find(array('id'=>$postdata['id']));
            $product->name = $postdata['name'];
            $product->price = $postdata['price'];
            $product->save();
        }
        header("Location: ".$settings['siteurl']."/products/add");
    }


    public function delete()
    {
        global $settings;

        $params = func_get_args();

        if ($params[1] == 'delete') {
            $product = $this->model('Product')::find(array('id'=>$params[2]));
            $product->delete();
        }
        header("Location: ".$settings['siteurl']."/products/add");
    }
}
