<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {


	public function __construct(){

		parent::__construct();
		permission();
		$this->load->model('games_model');
	}

	public function index(){

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

		$this->games_model->salvar($game);

		redirect("dashboard");
	}

	public function editar($id){

		$data['title'] = 'Editar Game - CodeIgniter';
		$data['game'] = $this->games_model->buscar($id);

/* 		echo '<pre>';
		print_r($data);
		echo '<pre>';
		exit(); */

        $this->load->view('templates/header', $data);	//Template fixo
        $this->load->view('templates/nav-top', $data);	//Template fixo

		$this->load->view('pages/form-games', $data); 	// Conteudo Principal
	
        $this->load->view('templates/footer', $data);	//Template fixo
        $this->load->view('templates/js', $data); 		//Template fixo
	}

	public function atualizar($id){
		
		$game  = $_POST;

		$this->games_model->update($id, $game);
		redirect("games");
	}

	public function deletar($id){

		$game = $_POST;

		$this->games_model->deletar($id);
		redirect("games");
	}


}