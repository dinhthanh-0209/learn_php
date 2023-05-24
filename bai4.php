<?php
//4Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function searchString($string1,$string){
    return strpos($string1,$string);
}
echo searchString("Thanh","Dinh Thanh");
?>