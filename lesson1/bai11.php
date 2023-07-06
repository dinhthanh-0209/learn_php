<?php
//11Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
function deleteFirstLetter($string1, $string2){
    return rtrim($string1, $string2);
}
echo deleteFirstLetter("dinh thanh", "d");
?>