<?php
    $i = 0;
    echo "<div class=\"row\" id=\"vienda\">";
    echo "<div id=\"row\" id=\"vienda\"><p class=\"font4\"><span class=\"glyphicon glyphicon-star\">Top 10 sản phẩm bán chạy nhất:</span></p></div>";
    foreach ($listdtbanchay as $key) {
        echo "<div class=\"col-md-3\"><img src=\"/TheGioiMobi/img/".$key["Hinh"]."\" width=\"200px\" height=\"230px\">"."<p class=\"font5\">".$key["Ten"]."</p><p class=\"font6\">".$key["Gia"]."</p></div>";
        if($i == 3){
            $i = -1;
            echo "</div>";
            echo "<div class=\"row\" id=\"vienda\">";
        }
        $i++;   
    }
?>