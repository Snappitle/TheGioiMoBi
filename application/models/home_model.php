<?php
    class home_model extends CI_Model
    {        
        public function dsDTMoi()
        { 
            $sql = "Select IDDT,Hinh,Ten,Gia from dtdd order by NgayNhap desc limit 10";
            $dtmoi = $this->db->query($sql);
            return $dtmoi->result_array();
        }

        public function dsDTBanChay()
        { 
            $sql = "Select IDDT,Hinh,Ten,Gia from dtdd order by SoLuongMua desc limit 10";
            $dtmoi = $this->db->query($sql);
            return $dtmoi->result_array(); 
        }
    } 
?>