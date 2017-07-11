<?php

/**
 * Created by PhpStorm.
 * User: cl
 * Date: 7/11/17
 * Time: 12:17 AM
 */
class Gimnasios extends CI_Controller
{

    public function index()
    {
        $this->load->model('Gimnasios_model');
        $data['gimnasios'] = $this->Gimnasios_model->getGimnasios();
        $this->load->view('gimnasios', $data); // load se refiere a cargar en este caso la vista
    }

    public function ver_info($id)
    {
        $this->load->model('Gimnasios_model');
        $data['gimnasio'] = $this->Gimnasios_model->getInfo($id);
        $this->load->model('Canchas_model');
        $data['canchas'] = $this->Canchas_model->getCanchasByGymId($id);
        $this->load->view('gimnasio', $data); // load se re1fiere a cargar en este caso la vista
    }


}