<?php
    class user_management_controller extends CI_Controller{
        public function user(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/user_management");
            $this->load->view("footer");
        }
    }
?>