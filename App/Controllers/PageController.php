<?php

namespace App\Controllers;

use Framework\Controller;

class PageController extends Controller
{
    public function index($name, $value)
    {
        echo ($name.' '.$value); //убрать
        return $this->view('index.php', ['name' => $name]);
    }
    
}