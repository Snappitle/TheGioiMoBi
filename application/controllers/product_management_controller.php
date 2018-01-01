<?php
    class product_management_controller extends CI_Controller{
        public function product(){
            $this->load->view("header");
            $this->load->view("header_admin");
            $this->load->view("product_management");
            $this->load->view("footer");
        }
    }
?>