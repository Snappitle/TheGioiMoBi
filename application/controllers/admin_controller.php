<?php
    class admin_controller extends CI_Controller{
        public function admin(){
            $this->load->view("header");
            $this->load->view("header_admin");
            $this->load->view("admin");
            $this->load->view("footer");
        }
    }
?>