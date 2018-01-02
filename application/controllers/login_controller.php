<?php
    class login_controller extends CI_Controller
    {
        public function prelogin()
        {
            $this->load->view("header");
            $this->load->view("templates/guest/login");
            $this->load->view("footer");
        }

        public function login()
        {
            $this->load->model("login_model");
            $i = $this->login_model->isEmpty();

            if($i == 1)
            {
                $this->load->view("header");
                $this->load->view("errors/empty");
                $this->load->view("footer");
            }
            else
            {
                $j = $this->login_model->KiemTraDangNhap();
                if($j == 0)
                {
                    $this->load->view("header");
                    $this->load->view("errors/notexist");
                    $this->load->view("footer");
                }
                elseif($j == 1)
                {
                    require_once(APPPATH.'controllers/home_controller.php');
                    $homectrl = new home_controller();
                    $homectrl->index($_SESSION["userid"]);
                }
                else
                {
                    $this->load->view("header");
                    $this->load->view("errors/wrongpass");
                    $this->load->view("footer");
                }
            }
        }
    }
?>