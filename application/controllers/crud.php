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

    public function add(){
    	$this->layout->setTitle("Crear persona");

    	#si existe post
    	if ($this->input->post()) {
    		#print_r($_POST);
    		#validar formulario

    		if ($this->form_validation->run("formulario/add")) {
    			#recuperando datos via post
    			$data=array
    			(
    			'nombre'=>$this->input->post("nom",true),
    			'correo'=>$this->input->post("correo",true),
    			'telefono'=>$this->input->post("tel",true),
    			'fecha'=>date("Y-m-d h:m:s")
    			);
    			#cargando metodo guardar persona
    			$guardar=$this->personas_model->insertar_persona($data);
                    if($guardar)
                    {
                         $this->session->set_flashdata('ControllerMessage', 'Se ha agregado el registro exitosamente.');
                		redirect(base_url().'crud',  301);
                    }else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
               			redirect(base_url().'crud/add',  301);
                    }#end guardar

    		}#end form validation

    	}#end isset post

    	$this->layout->view("add");
    }#end add

    public function edit($id=null){
    	#sino existe id via get cargo error 404
    	if(!$id)
        {
            show_404();
        }

		if($this->input->post()){
			#print_r($_POST);
			if ($this->form_validation->run("formulario/add")) {
				$data=array
				(
					'nombre'=>$this->input->post("nom",true),
					'correo'=>$this->input->post("correo",true),
					'telefono'=>$this->input->post("tel",true)
				);
				$guardar=$this->personas_model->modificar_persona($data,$id);
				 if($guardar)
                    {
                         $this->session->set_flashdata('ControllerMessage', 'Se ha editado el registro exitosamente.');
                redirect(base_url().'crud/edit/'.$id,  301);
                    }else
                    {
                        $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Inténtelo nuevamente por favor.');
                					           redirect(base_url().'crud/edit/'.$id,  301);
                    }#end guardar
			}#end form validation

		}#end isset post

	    $datos=$this->personas_model->getPersonasPorId($id);
    	$this->layout->view("edit",compact("id","datos"));
    }#end edit

}#end class
















