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

    public function novena()
    {
    	$dt_inicio = date('d/m/Y');
    	$dias = [];
    	if($this->request->is('post')){
    		$data = $this->request->getData();
    		$inicio = $this->dateDB($data['inicio']);  
    		$dt_inicio = date("d/m/Y", strtotime($inicio));  		

    		for ($i=1; $i <=9 ; $i++) {
    			if($i>1){
    				$inicio = date('Y-m-d', strtotime("+1 days",strtotime($inicio)));

    			}
    			$dias["{$i}º"] = $inicio;
    			
    		}
    	}

    	$this->set(compact("dias","dt_inicio"));
    }

    public function preparacao()
    {
    	$dias = [];
    	$dt_inicio = date('d/m/Y');
    	if($this->request->is('post')){
    		$data = $this->request->getData();
    		$inicio = $this->dateDB($data['inicio']);

    		$dt_inicio = date("d/m/Y", strtotime($inicio));
    		$inicio = date('Y-m-d', strtotime("-33 days",strtotime($inicio)));

    		$dias['preparacao']['de'] = $inicio;
    		$inicio = date('Y-m-d', strtotime("+11 days",strtotime($inicio)));
    		$dias['preparacao']['ate'] = $inicio;

    		$inicio = date('Y-m-d', strtotime("+1 days",strtotime($inicio)));
    		$dias['1_semana']['de'] = $inicio;
    		$inicio = date('Y-m-d', strtotime("+6 days",strtotime($inicio)));
    		$dias['1_semana']['ate'] = $inicio;

    		$inicio = date('Y-m-d', strtotime("+1 days",strtotime($inicio)));
    		$dias['2_semana']['de'] = $inicio;
    		$inicio = date('Y-m-d', strtotime("+6 days",strtotime($inicio)));
    		$dias['2_semana']['ate'] = $inicio;

    		$inicio = date('Y-m-d', strtotime("+1 days",strtotime($inicio)));
    		$dias['3_semana']['de'] = $inicio;
    		$inicio = date('Y-m-d', strtotime("+6 days",strtotime($inicio)));
    		$dias['3_semana']['ate'] = $inicio;

    		// debug($dias);

    	}
    	$this->set(compact("dias","dt_inicio"));
    }


}