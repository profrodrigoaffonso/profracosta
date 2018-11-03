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

    public function comando()
    {

    	$this->loadModel("Comandos");

    	$comando = $this->Comandos->get(1);

    	if($this->request->is('post')){
    		$data = $this->request->getData();
    		$comando->comando = $data['comando'];
    		$this->Comandos->save($comando);
    		$this->redirect(['action'=>'comando']);
    	}

    	$this->set(compact('comando'));
    }
}