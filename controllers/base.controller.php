<?php

class BaseController{

    protected array $data;
    protected object $tmp;

    public function __construct($provisional_engine = null)
    {
        $this->data = ['__from__' => __CLASS__];
        $this->tmp = $GLOBALS['tmp'];
    }

    public function set($key, $value){
        $this->data[$key] = $value;
    }
}