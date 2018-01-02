<?php
    class product_model extends CI_Model
    {
        public function getinfo($id)
        {
            $sql = "select * from dtdd where IDDT = $id";
            $result = $this->db->query($sql)->result_array();
            return $result;
        }

        public function getlistbykeyword($keyword)
        {
            if($keyword == "cao_cap" || $keyword == "trung_cap" || $keyword == "pho_thong")
            {
                $sql = "select * from dtdd where Loai = \"$keyword\"";
                $result = $this->db->query($sql)->result_array();    
            }
            elseif($keyword == "Samsung" || $keyword == "Apple" || $keyword == "HTC")
            {
                $sql = "select * from dtdd where NSX = \"$keyword\"";
                $result = $this->db->query($sql)->result_array();    
            }
            elseif($keyword == "2cam")
            {
                $sql = "select * from dtdd where (CamTruoc and CamSau) != NULL";
                $result = $this->db->query($sql)->result_array();    
            }
            elseif($keyword == "4g")
            {
                $sql = "select * from dtdd where TheSim like '%hỗ trợ 4G'";
                $result = $this->db->query($sql)->result_array();    
            }
            else
            {
                $sql = "select * from dtdd where Ten like '$keyword%'";
                $result = $this->db->query($sql)->result_array();    
            }

            return $result;
        }
    }
?>