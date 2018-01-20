<?php
    $i = 0;
    echo "<div class=\"row\" id=\"vienda\">";
    foreach ($list as $key) {
        echo "<div style=\"padding-top: 30px\" class=\"col-md-3\"><img src=\"/TheGioiMobi/img/".$key["Hinh"]."\" width=\"200px\" height=\"230px\">"."<p class=\"font5\">".$key["Ten"]."</p><p class=\"font6\">".$key["Gia"]."</p><button type=\"button\" class=\"btn btn-primary\" id=\"bt4\">Sửa</button><button type=\"button\" class=\"btn btn-primary\" id=\"bt4\">Xóa</button></div>";
        if($i == 3){
            $i = -1;
            echo "</div>";
            echo "<div class=\"row\" id=\"vienda\">";
        }
        $i++;   
    }
    if(count($list) == 0)
    {
        echo "<p class=\"font4\">Không có sản phẩm nào</p>";
    }
    echo "</div>";
?>