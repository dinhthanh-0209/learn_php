<?php
//18Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function replaceChar($string, $string1, $string2){
    return preg_replace($string, $string1, $string2);
}
echo replaceChar("%", "+", "di%h thanh");

?>