<?php
    class homecontroller extends CI_Controller{
        public function _construct(){
            parent::_construct();
        }

        public function in(){   
            $this->load->Model("Muser");
            $data["list"] = $this->Muser->layDTMoiNhat();

        }

        public function indexview(){
            $this->load->view("header");
            $this->load->View("body");
            $this->load->view("footer");
        }

        public function login(){
            $this->load->view("login");
        }
    }
?>