<?php
    class order_model extends CI_Model
    {
        public function getall()
        {
            $sql = "select * from dh";
            $result = $this->db->query($sql)->result_array();
            return $result;
        }
    }
?>