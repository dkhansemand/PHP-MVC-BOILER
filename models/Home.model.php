<?php

class HomeModel extends Model
{

    public function __construct()
    {
        return (new Database)->query("SELECT * FROM brands")->fetchAll();
    }


}
