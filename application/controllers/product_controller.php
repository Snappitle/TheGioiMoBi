
<?php
    class product_controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("product_model");
        }
        
        public function detail($id)
        {
            $this->load->view("header");
            $this->load->view("sidebar");

            $data["result"] = $this->product_model->getinfo($id);
            $data["fivephones"] = $this->product_model->get5phones($id);
            $this->load->view("templates/products/product_detail",$data);

            $this->load->view("footer");
        }

        public function search($keyword = NULL, $name = NULL)
        {
            $this->load->view("header");
            
            if($name == NULL)
            {
                $this->load->view("sidebar");
                if($keyword == NULL)
                {
                    $data["list"] = $this->product_model->getlistbykeyword($_POST["search"]);
                    $this->load->view("templates/contents/search",$data);    
                }
                else
                {
                    $data["list"] = $this->product_model->getlistbykeyword($keyword);
                    $this->load->view("templates/contents/search",$data);    
                }
            }
            else
            {
                $this->load->view("templates/admin/header_admin");
                $this->load->view("templates/admin/".$name."_management");
                $data["list"] = $this->product_model->getlistbykeyword($_POST["search"]);
                $this->load->view("templates/contents/search",$data);    
            }
            $this->load->view("footer"); 
        }

        public function filter()
        {
            $this->load->view("header");
            $this->load->view("sidebar");

            if(isset($_POST["brand"]))
                $data["list"] = $this->product_model->getfilterlist($_POST["brand"]);
            else
                @$data["list"] = $this->product_model->getonlypricelist($_POST["brand"]);
            $this->load->view("templates/contents/search",$data);
            $this->load->view("footer");
        }
    }
?>