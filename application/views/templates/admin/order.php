<?php
    foreach ($list as $key) 
    {
        echo "<div class=\"row\" id=\"vienda\" style=\"margin-left: 10px\">";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>ID người dùng: </label></div>";
        echo "<div class=\"col-md-3\" id=\"login\"><input type=\"text\" name=\"idnd\" class=\"form-control box-shadow\" value=\"".$key["IDDH"]."\"/></div>";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>ID sản phẩm:</label></div>";
        echo "<div class=\"col-md-3\" id=\"login\"><input type=\"text\" name=\"idsp\" class=\"form-control box-shadow\" value=\"".$key["IDND"]."\"/></div>";
        echo "</div>";
        echo "<div class=\"row\" id=\"vienda\" style=\"margin-left: 10px\">";
        echo "<div class=\"col-md-2\" id=\"font14\"><label>Ngày lập: </label></div>";
        echo "<div class=\"col-md-3\" id=\"login\"><input type=\"text\" name=\"date\" class=\"form-control box-shadow\" value=\"".$key["NgNhap"]."\"/></div>";
        echo "<div class=\"col-md-5\" id=\"font14\"><button type=\"button\" class=\"btn btn-primary\" id=\"bt4\">Sửa</button><button type=\"button\" class=\"btn btn-primary\" id=\"bt4\">Xóa</button></div>";
        echo "</div>";
    }
?>