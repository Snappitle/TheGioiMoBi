<?php
    class product_model extends CI_Model
    {
        public function getinfo($id)
        {
            $sql = "select * from dtdd where IDDT = $id";
            $result = $this->db->query($sql)->result_array();
            return $result;
        }
    }
?>