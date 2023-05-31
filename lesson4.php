<?php
echo "Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.";
    echo "<br>";
    function checkYear($year){
        if ($year % 2 ==0){
            return $year;
        }

    } 
    $year = 2023;
    if (checkYear($year)){
        echo "Năm $year là năm chẵn";
    } else {
        echo "Năm $year là năm lẻ";
    }echo  "<br>";

echo  "Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.";
    echo  "<br>";
        for ($n = 1;$n <= 100;$n++){
            echo "$n"." ";
        }echo  "<br>";
   
echo "Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.";
    echo  "<br>";  
        for($n = 1;$n <= 100;$n++){
            if($n % 2 == 0){    
                echo "<b>$n</b>"." ";
            } else {
                echo "$n"." ";
            }
        }
    echo  "<br>";
echo "Bài 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
    $nam = array(1990, 1991, 1992, 1993, 1994, 1995);";
    echo  "<br>";
        $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
        foreach ($nam as $nam){
            echo "$nam"." ";
        }



?>