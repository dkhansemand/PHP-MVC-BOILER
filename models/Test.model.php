<?php

class TestModel extends Model
{
    public function __construct()
    {
        parent::__construct();
        return $this->query("SELECT * FROM brands")->fetchAll();
    }

}
