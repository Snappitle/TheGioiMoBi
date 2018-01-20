<?php
    foreach ($list as $key) 
    {
        echo "<div class=\"row\" id=\"vienda\">";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>Loại: </label></div>";
        echo "<div class=\"col-md-2\" id=\"login\"><input type=\"text\" name=\"type\" class=\"form-control box-shadow\" value=\"".$key["Loai"]."\"/></div>";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>Giá tiền trở lên: </label></div>";
        echo "<div class=\"col-md-2\" id=\"login\"><input type=\"text\" name=\"price\" class=\"form-control box-shadow\" value=\"".$key["GiaTienTroLen"]."\"/></div>";

        echo "<button type=\"button\" class=\"btn btn-primary\" id=\"bt4\">Sửa</button><button type=\"button\" class=\"btn btn-primary\" id=\"bt4\">Xóa</button></div>";
        echo "<div class=\"row\" id=\"vienda\">";
      
        echo "</div";
    }
?>