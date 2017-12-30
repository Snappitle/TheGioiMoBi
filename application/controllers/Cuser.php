<?php
    class Cuser extends CI_Controller{
        public function _construct(){
            parent::_construct();
        }

        public function in(){   
            $this->load->Model("Muser");
            $data["list"] = $this->Muser->layDTMoiNhat();

        }

        public function indexView(){
            $this->load->View("frame");
        }
    }
?>