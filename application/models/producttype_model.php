<?php
    class producttype_model extends CI_Model
    {
        public function getall()
        {
            $sql = "select * from loai";
            $result = $this->db->query($sql)->result_array();
            return $result;
        }
    }
?>