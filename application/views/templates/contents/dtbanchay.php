<?php
    $i = 0;
    echo "<div class=\"row\" id=\"vienda\"><p class=\"font4\">&#9733Top 10 sản phẩm bán chạy nhất:</p></div>";
    echo "<div class=\"row\" id=\"vienda\">";
    foreach ($listdtbanchay as $key) {
        echo "<div class=\"col-md-3\"><a href=\"/TheGioiMobi/product_controller/detail/".$key["IDDT"]."\"><img src=\"/TheGioiMobi/img/".$key["Hinh"]."\" width=\"200px\" height=\"230px\">"."<p class=\"font5\">".$key["Ten"]."</p><p class=\"font6\">".$key["Gia"]."</p></a></div>";
        if($i == 3){
            $i = -1;
            echo "</div>";
            echo "<div class=\"row\" id=\"vienda\">";
        }
        $i++;   
    }
?>