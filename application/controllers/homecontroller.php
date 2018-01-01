<?php
    class homecontroller extends CI_Controller{
        public function index(){
            $this->load->view("header");
            $this->load->view("body");

            $this->load->model("homemodel");
            $data["listdtmoi"] = $this->homemodel->dsDTMoi();
            $this->load->view("content.php", $data);

            $this->load->model("homemodel");
            $data2["listdtbanchay"] = $this->homemodel->dsDTBanChay();
            $this->load->view("content2.php", $data2);
            $this->load->view("footer");
        }

        public function login(){
            $this->load->view("header");
            $this->load->view("login");
            $this->load->view("footer");
        }
    }
?>