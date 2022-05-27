<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    
    public function index(){

		$this->load->model('games_model');

		$data['title'] = 'Usuarios - CodeIgniter';
		$data['games'] = $this->games_model->index();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/usuarios', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data); 
	
	}





}
