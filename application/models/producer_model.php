<?php
    class producer_model extends CI_Model
    {
        public function getall()
        {
            $sql = "select * from nsx";
            $result = $this->db->query($sql)->result_array();
            return $result;
        }
    }
?>