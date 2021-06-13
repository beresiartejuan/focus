<?php

class PagesController extends BaseController{

    public function index(){
        echo $this->tmp->render('template.html.twig', $this->data);
    }

    public function singup(){
        echo $this->tmp->render('pages/singup/index.html.twig', $this->data);
    }

    public function login(){
        echo $this->tmp->render('pages/login/index.html.twig', $this->data);
    }
}

Router::get('/', 'PagesController@index');
Router::get('/registro', 'PagesController@singup');
Router::get('/login', 'PagesController@login');