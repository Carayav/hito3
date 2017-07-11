<?php

class Cliente_model extends CI_Model {
	

	public function validar($nombre,$pass){
		$query=$this->db->where('Nombre',$nombre);
		$query=$this->db->where('contraseña',$pass);
		$query=$this->db->get('cliente');
		
		return $query->row();



	}
}


?>	