<?php
    class home_controller extends CI_Controller
    {
        public function index()
        {
            $this->load->view("header");
            $this->load->view("sidebar");

            $this->load->model("home_model");
            $data["listdtmoi"] = $this->home_model->dsDTMoi();
            $this->load->view("templates/contents/dtmoi", $data);

            $this->load->model("home_model");
            $data["listdtbanchay"] = $this->home_model->dsDTBanChay();
            $this->load->view("templates/contents/dtbanchay", $data);
            $this->load->view("footer");
        }
    }
?>