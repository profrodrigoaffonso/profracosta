<?php
namespace App\Controller;

use App\Controller\AppController;

class FilasController extends AppController
{

    public function index()
    {

    }

    public function gerar()
    {
    	if($this->request->is('post')){

    		$data = $this->request->getData();

    		$ultimo = $this->Filas->find()
    			->select(['numero'])
    			->order(['id'=>'DESC'])
    			->where([
    				'tipo'=>$data['tipo']
    			])
    			->first();



    		if(!$ultimo){
    			$numero = 1;
    		}else{
    			$numero = $ultimo->numero + 1;
    		}

    		$fila = $this->Filas->newEntity();
    		$fila->tipo = $data['tipo'];
    		$fila->numero = $numero;
    		$this->Filas->save($fila);


    	}

    }
}