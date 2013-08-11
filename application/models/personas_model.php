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

	}#end class