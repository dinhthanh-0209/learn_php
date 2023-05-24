<?php
//Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
function countLength($string){
    return strlen($string);
}
echo countLength("Thanh");

//Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
function countWord($string){
    return str_word_count($string);
    echo countWord("Thanh");
}

//Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
function revertString($string){
    return strrev($string);
}
echo revertString("Thanh");


//Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function searchString($string1,$string){
    return strpos($string1,$string);
}
echo searchString("Thanh","Dinh Thanh");


//Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
function replaceString($string1,$string2,$string){
    return str_replace($string1,$string2,$string);
}
echo replaceString("Thanhh","Thanh","Dinh Thanh");


//Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().



//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
function changeToUpper($string){
    return strtoupper($string);
}
echo changeToUpper("thanh");

//Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
function changeToLower($string){
    return strtolower($string);
}
echo changeToLower("THANH");

//Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
function changeFirst($string){
    return ucwords($string);
}
echo changeFirst("dinh thanh");

//Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
function ($string){
    return trim($string);
}
echo ("THANH");

//Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
//Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
//Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
//Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
//Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
//Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
//Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
//Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
//Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
