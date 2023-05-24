<?php
//14Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function implodeString($string, $string1, $string2){
    $result = implode($string, $string1, $string2);
    print_r ($result);
}
echo implodeString("Dinh", "Thanh"," ");
?>