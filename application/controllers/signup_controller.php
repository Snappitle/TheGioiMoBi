<?php
    class signup_controller extends CI_Controller
    {
        public function signup()
        {
            $this->load->view("header");
            $this->load->view("templates/guest/signup");
            $this->load->view("footer");
        }
    }
?>