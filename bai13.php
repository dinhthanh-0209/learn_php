<?php
//13Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function explodeString($string1, $string2){
    $result = explode($string1, $string2);
    print_r ($result);
}
echo explodeString(" ","Xin chao. Toi la Thanh");
?>