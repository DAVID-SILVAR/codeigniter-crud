<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller { 

        public function index(){
            
            $data['title'] = 'Login - CodeIgniter';
            $this->load->view('pages/login', $data);
        }

        public function logar(){

            $this->load->model('Login_model');

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



    }