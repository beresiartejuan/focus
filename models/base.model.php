<?php

class BaseModel{

    protected $driver;

    public function __construct($provisional_database = null)
    {
        $this->driver = $GLOBALS['db'] or $provisional_database;
    }
}