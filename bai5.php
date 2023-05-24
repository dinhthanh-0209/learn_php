<?php
//5Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
function replaceString($string1,$string2,$string){
    return str_replace($string1,$string2,$string);
}
echo replaceString("Thanhh","Thanh","Dinh Thanh");
?>