<?php
    class order_management_controller extends CI_Controller{
        public function order(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/order_management");
            $this->load->view("footer");
        }
    }
?>