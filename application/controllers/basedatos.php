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

        public function usando_result_array(){
        	$this->layout->setTitle("Trabajando consultas SELECT usando result array");

        	#instancian de modelo personas_model y metodo getPersonas2
        	$datos=$this->personas_model->getPersonas2();
        	$this->layout->view("usando_result_array",compact("datos"));
        }#end usando_result_array

        public function usando_where($id=null)
        {
        	$this->layout->setTitle("Select usando where");
        	$datos=$this->personas_model->getPersonasPorId($id);
        	$this->layout->view('usando_where',compact("datos"));
        }

}#end class
