<?php

/**
 * Created by PhpStorm.
 * User: cl
 * Date: 7/11/17
 * Time: 12:20 AM
 */
class Gimnasios_model extends CI_Model
{
    public function getGimnasios(){

        $query=$this->db->get('gym');

        return $query->result();

    }

    public function getInfo($id_gym){
        $query=$this->db->where('id_gym',$id_gym);
        $query=$this->db->get('gym');

        return $query->result();

    }


}