<?php
//19Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
function checkint(int $string){
    if (is_int($string) != "1") return "false";
    else return "true";
}
echo checkInt("29");

?>