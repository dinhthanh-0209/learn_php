<?php
//17Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
$findString17 = strpos("dinh thanh", "thanh");
   if ($findString17 !== false) {
   echo "chuoi co chua chuoi con ";
   } else {
             echo "chuoi khong chua chuoi con";
   }

?>
