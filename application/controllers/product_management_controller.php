<?php
    class product_management_controller extends CI_Controller{
        public function product(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/product_management");
            $this->load->view("footer");
        }
    }
?>