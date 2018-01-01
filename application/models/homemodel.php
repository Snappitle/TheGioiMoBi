<?php
  class homemodel extends CI_Model{
    public function dsDTMoi(){ 
        $this->load->database(); 
        $sql = "Select Hinh,Ten,Gia from dtdd where TinhTrang = \"moi\"";
        $dtmoi = $this->db->query($sql);
        return $dtmoi->result_array();
    }

    public function dsDTBanChay(){ 
      $this->load->database(); 
      $sql = "Select Hinh,Ten,Gia from dtdd where TinhTrang = \"chay\"";
      $dtmoi = $this->db->query($sql);
      return $dtmoi->result_array(); 
    }
  } 
?>