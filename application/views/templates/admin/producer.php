<?php
    foreach ($list as $key) 
    {
        echo "<div class=\"row\" id=\"vienda\" style=\"margin-left: 0px\">";
        echo "<div class=\"col-md-1\" id=\"font14\"><label>Tên: </label></div>";
        echo "<div class=\"col-md-1\" id=\"login\"><input type=\"text\" name=\"type\" class=\"form-control box-shadow\" value=\"".$key["Ten"]."\"/></div>";
        echo "<div class=\"col-md-1\" id=\"font14\"><label>Trụ sở: </label></div>";
        echo "<div class=\"col-md-1\" id=\"login\"><input type=\"text\" name=\"ts\" class=\"form-control box-shadow\" value=\"".$key["TruSo"]."\"/></div>";

        echo "<div class=\"row\" id=\"vienda\" style=\"margin-left: 0px\">";
      
        echo "<div class=\"col-md-2\" id=\"font14\" ><label>Năm thành lập: </label></div>";
        echo "<div class=\"col-md-1\" id=\"login\"><input type=\"text\" name=\"ntl\" class=\"form-control box-shadow\" value=\"".$key["NamTL"]."\"/></div>";

        echo "<div class\"cod-md-1\"><button type=\"button\" class=\"btn btn-primary\" id=\"bt4\">Sửa</button><button type=\"button\" class=\"btn btn-primary\" id=\"bt4\">Xóa</button></div>";
        echo "</div>";
    }
?>
