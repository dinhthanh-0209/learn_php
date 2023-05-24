<?php
//12Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function deleteLastLetter($string1, $string2){
    return rtrim($string1, $string2);
}
echo deleteLastLetter("dinh thanh", "h");
?>