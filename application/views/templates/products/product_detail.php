<?php
    foreach ($result as $key) 
    {
        echo "<div class=\"row\" id=\"vienda\">";
        echo "<div class=\"col-md-4\"><img style=\"padding-top: 30px\" src=\"/TheGioiMobi/img/".$key["Hinh"]."\"></div>";

        echo "<div class=\"col-md-3\">";
        echo "<div class=\"row\"><h4 >".$key["Ten"]."</h4></div>";

        echo "<div class=\"row\"><h4 >Giá: ".$key["Gia"]."</h4></div>";
        
        echo "<div class=\"row\"><h4 >Nhà sản xuất: ".$key["NSX"]."</h4></div>";

        echo "<div class=\"row\"><h4 >Màn hình: ".$key["ManHinh"]."</h4></div>";

        echo "<div class=\"row\"><h4 >Hệ điều hành: ".$key["HDH"]."</h4></div>";

        echo "<div class=\"row\"><h4 >Camera sau: ".$key["CameraSau"]."</h4></div>";

        echo "<div class=\"row\"><h4 >Camera trước: ".$key["CameraTruoc"]."</h4></div>";

        echo "<div class=\"row\"><h4 >CPU: ".$key["CameraSau"]."</h4></div>";

        echo "<div class=\"row\"><h4 >RAM: ".$key["Ram"]."</h4></div>";
  
        echo "<div class=\"row\"><h4 >Bộ nhớ trong: ".$key["BoNhoTrong"]."</h4></div>";
       
        echo "<div class=\"row\"><h4 >Dung lượng pin: ".$key["DungLuongPin"]."</h4></div>";

        echo "<div class=\"row\"><h4 >Thẻ sim: ".$key["TheSim"]."</h4></div>";

        echo "<div class=\"row\"><h4 >Ngày nhập: ".$key["NgayNhap"]."</h4></div>";
        echo "</div>";        

        echo "<div class=\"row\"></div>";

        echo "<p class=\"font4\">&#9733Các sản phẩm cùng loại:</p>";

        $i = 0;
        foreach ($fivephones as $phone) 
        {
            echo "<div class=\"col-md-3\"><a href=\"/TheGioiMobi/product_controller/detail/".$phone["IDDT"]."\"><img src=\"/TheGioiMobi/img/".$phone["Hinh"]."\" width=\"100px\" height=\"115px\">"."<p class=\"font5\">".$phone["Ten"]."</p><p class=\"font6\">".$phone["Gia"]."</p></a></div>";
            if($i == 3){
                $i = -1;
                echo "</div>";
                echo "<div class=\"row\" id=\"vienda\">";
            }
            $i++;   
        }

        echo "</div>";
    }
?>