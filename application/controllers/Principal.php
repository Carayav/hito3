<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('principal'); // load se refiere a cargar en este caso la vista
	}

	public function cargar_login(){

		$this->load->view('login');

	}

	public function validar_login(){
		if ($this->input->post()) {
         $nombre = $this->input->post('user');
         $contrasena = $this->input->post('pass');
         $this->load->model('Cliente_model'); //load se refiere a cargar en este caso el modelo correspondiente
         $user=$this->Cliente_model->validar($nombre,$contrasena);
         	if($user){
         		$datos_usuario=array(
         			'id' =>$user->id_cliente,
         			'nombre' =>$user->Nombre,
         			'logueado'=>TRUE 
         			);
         		$this->session->set_userdata($datos_usuario);
         		
         		redirect(''); //redirige al default controller
         	}
         	else{
         		redirect('login');	

         	}
		}

	}


	public function logout(){
			$this->session->sess_destroy();
			redirect('');


	}
	
}
