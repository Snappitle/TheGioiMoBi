<?php
    foreach ($result as $key) {
        echo "<div class=\"row\" id=\"vienda\">";
        echo "<div class=\"col-md-4\"><img src=\"/TheGioiMobi/img/".$key["Hinh"]."\"></div>";

        echo "<div class=\"col-md-8\">";
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
        echo "</div>";
    }
?>