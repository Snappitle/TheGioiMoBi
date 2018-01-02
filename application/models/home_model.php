<?php
    class home_model extends CI_Model
    {        
        public function dsDTMoi()
        { 
            $sql = "Select IDDT,Hinh,Ten,Gia from dtdd where TinhTrang = \"moi\"";
            $dtmoi = $this->db->query($sql);
            return $dtmoi->result_array();
        }

        public function dsDTBanChay()
        { 
            $sql = "Select IDDT,Hinh,Ten,Gia from dtdd where TinhTrang = \"chay\"";
            $dtmoi = $this->db->query($sql);
            return $dtmoi->result_array(); 
        }
    } 
?>