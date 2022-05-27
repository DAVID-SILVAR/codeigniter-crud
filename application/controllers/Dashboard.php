<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index(){

		$this->load->model('games_model');
		$this->load->model('user_model');

		$data['title'] = 'Dashboard - CodeIgniter';
		$data['games'] = $this->games_model->index();
		$data['users'] = $this->user_model->index();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
	}
}