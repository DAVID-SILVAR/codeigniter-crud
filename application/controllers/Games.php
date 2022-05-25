<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {


	public function index(){

		$this->load->model('games_model');

		$data['title'] = 'Games - CodeIgniter';
		$data['games'] = $this->games_model->index();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/games', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data); 

		
	}

	public function new(){

		$data['title'] = 'Games - CodeIgniter';

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-games', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
		
	}

	public function salvar(){

		$game = $_POST;
		$game["user_id"] = '1';

		$this->load->model('games_model');
		$this->games_model->salvar($game);

		redirect("dashboard");

	}


}