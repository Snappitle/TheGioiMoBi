<?php
    class producer_management_controller extends CI_Controller{
        public function producer(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/producer_management");
            $this->load->view("footer");
        }
    }
?>