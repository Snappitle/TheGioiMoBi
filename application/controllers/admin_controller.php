<?php
    class admin_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();        
        }

        public function admin()
        {
            
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/admin");
            $this->load->view("footer");
        }

        public function user()
        {
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/user_management");
            $this->load->model("user_model");
            $data["list"] = $this->user_model->getall();
            $this->load->view("templates/admin/user",$data);
            $this->load->view("footer");
        }

        public function product()
        {
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/product_management");
            $this->load->model("product_model");
            $data["list"] = $this->product_model->getall();
            $this->load->view("templates/admin/product",$data);
            $this->load->view("footer");
        }

        public function product_type()
        {
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/product_type_management");
            $this->load->model("producttype_model");
            $data["list"] = $this->producttype_model->getall();
            $this->load->view("templates/admin/product_type",$data);
            $this->load->view("footer");
        }

        public function producer()
        {
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/producer_management");
            $this->load->model("producer_model");
            $data["list"] = $this->producer_model->getall();
            $this->load->view("templates/admin/producer",$data);
            $this->load->view("footer");
        }

        public function order()
        {
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/order_management");
            $this->load->model("order_model");
            $data["list"] = $this->order_model->getall();
            $this->load->view("templates/admin/order",$data);
            $this->load->view("footer");
        }

        public function search()
        {
            foreach ($_POST as $key => $name) 
            {
                if ($name != "search") 
                {
                    $name = $_POST[$key];
                }
            }

            require_once(APPPATH.'controllers/product_controller.php');
            $productctrl = new product_controller();
            $productctrl->search($_POST["search"],$name);
        }
    }
?>