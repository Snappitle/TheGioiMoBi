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
            $this->load->view("header");
            $this->load->model("login_model");
            $i = $this->login_model->isEmpty();

            if($i == 1)
            {
                $this->load->view("errors/empty");
            }
            else
            {
                $j = $this->login_model->KiemTraDangNhap();
                if($j == 0)
                {
                    $this->load->view("errors/notexist");
                }
                elseif($j == 1)
                {
                    $this->load->view("templates/user/success");
                }
                else
                {
                    $this->load->view("errors/wrongpass");
                }
            }
            $this->load->view("footer");
        }
    }
?>