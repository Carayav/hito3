<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Canchas extends CI_Controller {

    public function index()
    {
        $this->load->model('Canchas_model');
        $data['canchas'] = $this->Canchas_model->getCanchas();
        $this->load->view('canchas', $data); // load se refiere a cargar en este caso la vista
    }


}


?>