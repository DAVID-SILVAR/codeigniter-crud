<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller { 

        public function __construct(){

            parent::__construct();            
            $this->load->model('Login_model');
        }

        public function index(){
            
            $data['title'] = 'Login - CodeIgniter';
            $this->load->view('pages/login', $data);
        }

        public function logar(){

            $email = $_POST['email'];
            $senha = md5($_POST['senha']); 
            
             $user = $this->Login_model->logar($email, $senha);

             if($user){

                $this->session->set_userdata("logado", $user);
                redirect("dashboard");
             }else{
                 redirect("login");
             }

        }

        public function sair(){
            $this->session->unset_userdata("logado");
            redirect("login");
        }



    }