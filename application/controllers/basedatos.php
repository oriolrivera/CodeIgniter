<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class basedatos extends CI_Controller
{
	public function __construct()
        {
            parent::__construct();
            $this->layout->setLayout('template1');
        }

        public function index(){

        	$this->layout->setTitle("Consulta select con result");

        	#instancian de modelo personas_model y metodo getPersonas
        	$datos=$this->personas_model->getPersonas();
        	$this->layout->view("index",compact("datos"));

        }#end index
}#end class
