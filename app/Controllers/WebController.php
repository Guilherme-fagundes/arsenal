<?php


namespace App\Controllers;

use League\Plates\Engine;

class WebController
{

    private $view;
    public function __construct()
    {
        $this->view = Engine::create(__DIR__.'/../Views/', 'php');


    }

    public function index()
    {
        echo $this->view->render('welcome', [
            'title' => "Testando"
        ]);

    }

}