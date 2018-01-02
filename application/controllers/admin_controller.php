<?php
    class admin_controller extends CI_Controller
    {
        public function admin(){
            
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/admin");
            $this->load->view("footer");
        }

        public function order(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/order_management");
            $this->load->view("footer");
        }

        public function producer(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/producer_management");
            $this->load->view("footer");
        }

        public function product(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/product_management");
            $this->load->view("footer");
        }

        public function product_type(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/product_type_management");
            $this->load->view("footer");
        }

        public function user(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/user_management");
            $this->load->view("footer");
        }
    }
?>