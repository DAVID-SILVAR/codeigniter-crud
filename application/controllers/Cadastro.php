<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {  

	public function __construct(){

		parent::__construct();
		$this->load->model('User_model');
	}

    public function index(){

        $data['title'] = 'Cadastrar-se - CodeIgniter';
        $this->load->view('pages/cadastro', $data);
    }

    public function cadastrar(){

        $user = array(
            'nome' => $this->input->post("nome"),
            'email' => $this->input->post("email"),
            'senha' => md5($this->input->post("senha")),
            'pais' => $this->input->post("pais")
        );

/*         echo '<pre>';
        print_r($user);
        echo '</pre>';
        exit(); */


        $this->User_model->salvar($user);
        redirect("Dashboard");
    }

}