<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index() 
    {
        echo view("index");
    }


    public function karty() 
    {
        echo view("karty");
    }
    
    public function tabulka() 
    {
        echo view("tabulka");
    }

    public function carousel() 
    {
        echo view("carousel");
    }
    public function ukol() 
    {
        echo view("ukol");
    }
}
