<?php
namespace App\Controllers;

use App\Libraries\Controller;

class Pages extends Controller
{
    public function __construct()
    {
        // constructor
    }

    public function login()
    {
        $postdata = $_POST ?? array();

        $this->view('pages/login/header');
        $this->view('pages/login/main');
        $this->view('pages/login/footer');

        // print_r($_POST) ;
    }

    public function contact()
    {
        // echo "contact";
        $this->view("pages/contact");

        $fname = $_POST['fname'] ?? '';

        // echo $fname;
    }

    public function contactFormSubmission()
    {
        echo "inside contactFormSubmission()";

        print_r($_POST);
    }
}
