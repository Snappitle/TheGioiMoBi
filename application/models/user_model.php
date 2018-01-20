<?php
    class user_model extends CI_Model
    {
        public function getall()
        {
            $sql = "select * from nd";
            $result = $this->db->query($sql)->result_array();
            return $result;
        }
    }
?>