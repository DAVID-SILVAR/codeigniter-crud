<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


    class Login_model extends CI_Model{

        public function logar($email, $senha){

            $this->db->where('email', $email);
            $this->db->where('senha', $senha);

            $user = $this->db->get('tb_users')->row_array();

            return $user;



        }





    }