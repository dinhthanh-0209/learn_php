<?php
//6Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
function checkStartWord($word, $word2){
    if (strpos($word, $word2)=="") return "false";
    else if (strpos($word, $word2)!= 0) return "false";
    else return "true";
 }

 echo checkStartWord("Dinh Thanh", "Thanh");
?>