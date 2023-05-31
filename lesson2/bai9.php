<?php
//9Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
function changeFirst($string){
    return ucwords($string);
}
echo changeFirst("dinh thanh");
?>