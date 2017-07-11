<?php

class Horarios_model extends CI_Model {

    public function getHorarios(){

        $query=$this->db->get('horarios');

        return $query->result();

    }

	
}
?>