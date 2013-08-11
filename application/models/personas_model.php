<?php
	class personas_model extends CI_Model
	{
		function __construct(){
			parent::__construct();
		}#end construct

		public function getPersonas(){
			$query=$this->db
			->select("id,nombre,correo,telefono as tel, fecha")
			->from("personas")
			->order_by("id","desc")
			->get();
			return $query->result();
		}

		public function getPersonas2(){

			$query=$this->db
			->select("id,nombre,correo,telefono as tel, fecha")
			->from("personas")
			->order_by("id","desc")
			->get();
			return $query->result_array();

		}#end getPersonas2

		 public function getPersonasPorId($id)
	    {
	        $where=array("id"=>$id);
	        $query=$this->db
	        ->select("id,nombre,correo,telefono as tel,fecha")
	        ->from("personas")
	        ->where($where)
	        ->get();
	        return $query->row();
	    }

	    public function insertar_persona($datos=array()){
	    	$this->db->insert("personas",$datos);
	    	return true;
	    }#end insertar_persona

	}#end class