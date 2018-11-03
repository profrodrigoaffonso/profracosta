<?php
namespace App\Controller;

use App\Controller\AppController;

class TestesController extends AppController
{

    public function index()
    {

    }

    public function req()
    {

    	$this->loadModel("Comandos");

    	$comando = $this->Comandos->get(1);

    	echo $comando['comando'];
    	die;

    }
}