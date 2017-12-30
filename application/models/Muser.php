<?php
  class Muser extends CI_Model{
    public function layDTMoiNhat(){ 
        $this->load->database(); 
        $sql = "Select * from dtdd where TinhTrang = \"moi\"";
        $new = $this->db->query($sql);
        return $new->result_array();
    }

    public function layTen(){
        $new = $this->Muser->layDTMoiNhat();
        $numRow = $new->mysql_num_rows();
    }
  } 
?>