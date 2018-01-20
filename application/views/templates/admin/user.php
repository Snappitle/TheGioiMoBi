<?php
    foreach ($list as $key) 
    {
        echo "<div class=\"row\" id=\"vienda\" style=\"margin-left: 10px\">";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>ID:</label></div>";
        echo "<div class=\"col-md-3\" id=\"login\"><input type=\"text\" name=\"ID\" class=\"form-control box-shadow\" value=\"".$key["IDND"]."\"/></div>";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>Họ tên:</label></div>";
        echo "<div class=\"col-md-3\" id=\"login\"><input type=\"text\" name=\"name\" class=\"form-control box-shadow\" value=\"".$key["HoTen"]."\"/></div>";
        echo "</div>";
        echo "<div class=\"row\" id=\"vienda\" style=\"margin-left: 10px\">";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>Ngày sinh: </label></div>";
        echo "<div class=\"col-md-3\" id=\"login\"><input type=\"text\" name=\"date\" class=\"form-control box-shadow\" value=\"".$key["NgSinh"]."\"/></div>";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>Thành phố:</label></div>";
        echo "<div class=\"col-md-3\" id=\"login\"><input type=\"text\" name=\"city\" class=\"form-control box-shadow\" value=\"".$key["TP"]."\"/></div>";
        
        echo "</div>";
        echo "<div class=\"row\" id=\"vienda\" style=\"margin-left: 10px\">";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>Kí danh: </label></div>";
        echo "<div class=\"col-md-3\" id=\"login\"><input type=\"text\" name=\"user\" class=\"form-control box-shadow\" value=\"".$key["KiDanh"]."\"/></div>";
        echo "</div>";
        echo "<div class=\"row\" id=\"vienda\" style=\"margin-left: 10px\">";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>Chức vụ: </label></div>";
        echo "<div class=\"col-md-3\" id=\"login\"><input type=\"text\" name=\"ID\" class=\"form-control box-shadow\" value=\"".$key["ChucVu"]."\"/></div>";
        echo "<div class=\"col-md-3\"></div>";
        echo "<div class=\"col-md-2\" id=\"font14\"><button type=\"button\" class=\"btn btn-primary\" id=\"bt4\">Sửa</button><button type=\"button\" class=\"btn btn-primary\" id=\"bt4\">Xóa</button></div>";
        echo "</div>";
    }
?>
