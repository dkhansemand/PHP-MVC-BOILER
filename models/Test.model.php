<?php

class TestModel extends Model
{
    public function __construct()
    {
        return (new Database)->query("SELECT * FROM brands")->fetchAll();
    }

}
