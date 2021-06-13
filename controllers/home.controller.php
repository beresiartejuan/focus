<?php

class HomeController extends BaseController{

    public function index(){
        echo "Hola " . $_SESSION['USER']['name'] . "!";
    }
}

Router::get('/home', 'HomeController@index');