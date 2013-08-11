<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('template1');
    }

    public function index(){
    	$this->layout->setTitle("Gestor personas");

    	$datos=$this->personas_model->getPersonas();
    	$this->layout->view("index",compact("datos"));

    }#end crud
}#end class