<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){

		parent::__construct();
		permission();
		$this->load->model('games_model');
		$this->load->model('user_model');
		$this->load->model('Buscar_model');
	}

	public function index(){

		$data['title'] = 'Dashboard - CodeIgniter';
		$data['games'] = $this->games_model->index();
		$data['users'] = $this->user_model->index();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
	}

	public function pesquisar(){

		$data['title'] = 'Resultado da pesquisa por * '. $_POST['busca'] .' * ';
		$data['games'] = $this->games_model->index();
		$data['resultado'] = $this->Buscar_model->buscar($_POST);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/resultado', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
	}
}