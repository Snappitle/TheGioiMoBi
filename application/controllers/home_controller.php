<?php
    class home_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("product_model");
            $this->load->model("home_model");
        }

        public function index($username = null)
        {
            $this->load->view("header");
            $this->load->view("sidebar",$username);

            $data["listdtmoi"] = $this->home_model->dsDTMoi();
            $this->load->view("templates/contents/dtmoi", $data);

            $data["listdtbanchay"] = $this->home_model->dsDTBanChay();
            $this->load->view("templates/contents/dtbanchay", $data);
            $this->load->view("footer");
        }
    }
?>