<?php
    class product_model extends CI_Model
    {
        public function getinfo($id)
        {
            $sql = "select * from dtdd where IDDT = $id";
            $result = $this->db->query($sql)->result_array();
            return $result;
        }

        public function get5phones($id)
        {
            $sql = "update dtdd set LuotXem = LuotXem + 1 where IDDT = $id";
            $this->db->query($sql);

            $data = $this->getinfo($id);
            $hang = null;
            foreach ($data as $key) {
                $hang = $key["Hang"];
                break;
            }
            $sql = "select * from dtdd where Hang = \"$hang\" and IDDT != $id limit 5";
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
                $sql = "select * from dtdd where (CameraTruoc and CameraSau) is not NULL";
                $result = $this->db->query($sql)->result_array();    
            }
            elseif($keyword == "4g")
            {
                $sql = "select * from dtdd where TheSim like '%hỗ trợ 4G'";
                $result = $this->db->query($sql)->result_array();    
            }
            else
            {
                $sql = "select * from dtdd where Ten like '%$keyword%'";
                $result = $this->db->query($sql)->result_array();    
            }

            return $result;
        }

        public function getfilterlist($arr)
        {
            $condition = "select * from dtdd where (";

            $len = count($arr);
            $i = 0;

            foreach ($arr as $key) 
            {
                if($i == $len - 1)
                {
                    $condition = $condition." Hang = "."\"$key\"".")";
                }
                else
                {
                    $condition = $condition." Hang = "."\"$key\""." or ";
                }
                $i++;
            }

            $price = $this->getprice();
            $condition = $condition.$price;
            $result = $this->db->query($condition)->result_array();
            return $result;
        }

        public function getprice()
        {
            $result = "";
            if(isset($_POST["price"]))
            {
                $price = $_POST["price"];
                $value = (int)$price;
                if($value == 5)
                { 
                    $result = " and (Gia between ".(($value - 4)*1000000)." and ".($value*1000000).")";
                }
                elseif($value == 21)
                {
                    $result = " and Gia >= 21000000";
                }
                else
                {
                    $result = " and (Gia between ".(($value - 5)*1000000)." and ".($value*1000000).")";
                }
            }

            return $result;
        }

        public function getonlypricelist()
        {
            $price = $_POST["price"];
            $value = (int)$price;
            if($value == 5)
            { 
                $sql = "select * from dtdd where Gia between ".(($value - 4)*1000000)." and ".($value*1000000);
            }
            elseif($value == 21)
            {
                $sql = "select * from dtdd where Gia >= 21000000";
            }
            else
            {
                $sql = "select * from dtdd where Gia between ".(($value - 5)*1000000)." and ".($value*1000000);
            }
            $result = $this->db->query($sql)->result_array();
            return $result;
        }

        public function getall()
        {
            $sql = "select * from dtdd";
            $result = $this->db->query($sql)->result_array();
            return $result;
        }
    }
?>