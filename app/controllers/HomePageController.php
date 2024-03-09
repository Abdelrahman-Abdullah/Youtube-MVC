<?php
namespace app\controllers;
use app\models\HomePage;
use app\models\Product;

class HomePageController extends controller
{
    public function index()
    {
        $data = HomePage::all();
        return $this->view('index' , compact('data'));
    }
    public function about()
    {
        echo "About page Agaaaaaaain 123";
    }



}