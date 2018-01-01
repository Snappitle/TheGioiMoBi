<?php
    class producer_management_controller extends CI_Controller{
        public function producer(){
            $this->load->view("header");
            $this->load->view("header_admin");
            $this->load->view("producer_management");
            $this->load->view("footer");
        }
    }
?>