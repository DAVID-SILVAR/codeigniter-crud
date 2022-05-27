<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


    class User_model extends CI_Model{


        public function index(){

            return $this->db->get('tb_users')->result_array();
        }

        public function salvar($user){

            $this->db->insert('tb_users', $user);
        }





    }