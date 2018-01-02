<?php
    class product_controller extends CI_Controller
    {
        public function detail($id)
        {
            $this->load->view("header");
            $this->load->model("product_model");
            $data["result"] = $this->product_model->getinfo($id);
            $this->load->view("sidebar");
            $this->load->view("templates/products/product_detail",$data);
            $this->load->view("footer");
        }
    }
?>