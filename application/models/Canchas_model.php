<?php

class Canchas_model extends CI_Model
{

    public function getCanchas()
    {
        $query = $this->db->get('canchas');

        return $query->result();

    }

    public function getCanchasByGymId($id_gym)
    {
        $query = $this->db->where('id_gym',$id_gym);
        $query = $this->db->get('canchas');

        return $query->result();

    }

}
?>	