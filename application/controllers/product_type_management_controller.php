<?php
    class product_type_management_controller extends CI_Controller{
        public function product_type(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/product_type_management");
            $this->load->view("footer");
        }
    }
?>