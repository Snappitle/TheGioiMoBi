<?php
    class login_model extends CI_Model
    {
        public function isEmpty()
        {
            if(empty($_POST["username"]) || empty(trim($_POST["password"])))
			{
                return 1;
            }       
            return 0; 
        }

        public function KiemTraDangNhap()
        {
            $sql = "select * from nd";
            $isStopped = false;
            $rows = $this->db->query($sql)->result_array();
            foreach($rows as $row)
            {
                if($_POST["username"] == $row["KiDanh"])
                {
                    if($_POST["password"] == $row["MatKhau"])
                    {
                        if($row["ChucVu"] == 1)
                        {
                            $_SESSION["admin"] = 1;
                        }
                        $_SESSION["userid"] = $_POST["username"];
                        $isStopped = true;
                        return 1; //dang nhap thanh cong
                    }
                    else
                    {
                        $isStopped = true;
                        return 2; //sai mat khau
                    }
                }
            }
            if(!$isStopped)
            {
                return 0; //username khong ton tai
            }
        }
    }
?>