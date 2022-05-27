<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller { 

        public function index(){
            
            $data['title'] = 'Login - CodeIgniter';
            $this->load->view('pages/login', $data);
        }



    }