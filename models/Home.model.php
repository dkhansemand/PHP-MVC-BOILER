<?php

class HomeModel extends Model
{

    public function __construct()
    {
        return $this->query("SELECT * FROM brands")->fetchAll();
    }


}
