<?php
//16Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
function checkEndString($string, $string2){
    $result = strstr($string, $string2);
    if (str_word_count($result)== 1) return "true";
    else return "false";
 }
 echo checkEndString("hello mn nha", "nha");
?>