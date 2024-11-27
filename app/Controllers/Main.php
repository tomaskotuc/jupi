<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Hraci; //musíš udělat


class Main extends BaseController
{
    var $hraci; // proměnná hráči musíš udělat
    
    public function __construct() // konstruktor
    {
        $this->hraci = new Hraci(); //musíš udělat
    }

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
    public function polaci() 
    {
        //echo view("polaci");
        
         
        $polaci = $this->hraci->where("country","pl")->findAll(); // where je klíčové slovo v sql vyjadřující podmínku, country je sloupec ve kterém hledáme, a pl znamená co konkrétně hledáme(poláky rn, 2. světová type shit)
        $data ["hraci"] = $polaci;  // něco to dělá
        echo view("polaci", $data);                       //výsledek posíláme do view poláci´, 
    }                                                              // poláci znamená proměnná, do kterého se ten výsledek bude ukládat

}
