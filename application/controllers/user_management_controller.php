<?php
    class user_management_controller extends CI_Controller{
        public function user(){
            $this->load->view("header");
            $this->load->view("header_admin");
            $this->load->view("user_management");
            $this->load->view("footer");
        }
    }
?>