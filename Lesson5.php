<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$db = "quan_ly_sinh_vien";

$dbh = mysqli_connect($servername, $username, $password);
if(!$dbh)
    die("Unable to connect to MySQL: " . mysqli_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
if (!mysqli_select_db($dbh, $db))     
    die("Unable to select database: " . mysql_error()); 
   // Thông báo lỗi nếu chọn CSDL thất bại
   echo '---------------------------</br>';

// Tạo bảng "customers"
$createTableCustomers = "CREATE TABLE IF NOT EXISTS customers (
    id INT(11) NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)";
$result = mysqli_query($dbh,$createTable);
if (!$result){
    die ('Can\'t create table: '. mysqli_error($dbh));
} else {
    echo 'Table created: '. $createTable. '</br>';
};

echo '---------------------------</br>';

// Thêm 5 khách hàng mới vào bảng "customers"
$addCustomers = "INSERT INTO customers (id, name, email, phone) VALUES
    (1, 'Zeus', 'zeus@olympus.mt.co', '034862445145' ),
    (2, 'Anthena', 'anthena@olympus.mt.co', '075255511565'),
    (3, 'Jupiter',  'jupiter@planet.pt.co', '096554565154'),
    (4, 'Venus', 'venu@planet.pt.co', '025478965568');
    (5, 'Tom', 'tom@planet.pt.co', '038841544655');
";
$result = mysqli_query($dbh,$addCustomers);
if (!$result){
    die ('Can\'t add customers: '. mysqli_error($dbh));
} else {
    echo 'Customers added : '. $addCustomers. '</br>';
};

echo '---------------------------</br>';


// Sửa thông tin của một khách hàng có id là 1
$updateCustomers = "
    UPDATE customers 
    SET name = 'John'
    WHERE id = 1";
$result = mysqli_query($dbh,$updateCustomers);
    if (!$result){
        die ('Can\'t update table: '. mysqli_error($dbh));
    } else {
        echo 'Table updated: '. $updateCustomers. '</br>';
    };
    
    echo '---------------------------</br>';

// Xoá một khách hàng có id là 5
$deleteCustomers = "
    DELETE FROM customers 
    WHERE id = 5";
$result = mysqli_query($dbh,$deleteTable);
    if (!$result){
        die ('Can\'t delete table: '. mysqli_error($dbh));
    } else {
        echo 'Table deleted: '. $deleteTable. '</br>';
    };
    echo '---------------------------</br>';

// Lấy tất cả các khách hàng có email là "example@gmail.com"
$selectCustomers = "
    SELECT * FROM customers 
    WHERE email = 'example@gmail.com'";
$result = mysqli_query($dbh, $selectCustomers);
if (mysqli_num_rows($result) > 0) {
    echo "Customers with email 'example@gmail.com':<br>";
    foreach ($result as $row) {
        echo "ID: " . $row["id"] . "<br>". "Name: " . $row["name"] . "<br>". "Email: " . $row["email"] ."<br>". "Phone: " . $row["phone"] . "<br>";
    }
} else {
    echo "Can\'t find customers with email 'example@gmail.com'.<br>";
}


// Tạo bảng "orders" với ràng buộc khoá ngoại delete cascade
$createTableOrders = "
    CREATE TABLE orders (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    customer_id INT(11),
    total_amount DECIMAL(10,2),
    order_date DATE,
    CONSTRAINT fk_customer_id FOREIGN KEY (customer_id) 
    REFERENCES customers(id) ON DELETE CASCADE
)";

$result = mysqli_query($dbh,$createTableOrders);
if (!$result){
    die ('Can\'t create table: '. mysqli_error($dbh));
} else {
    echo 'Table created: '. $createTableOrders. '</br>';
};

echo '---------------------------</br>';

// Thêm một đơn hàng mới vào bảng "orders" cho khách hàng có id là 3
$insertOrder = "
    INSERT INTO orders (customer_id, total_amount, order_date)
    VALUES (3, 125.25, '2023-07-15')";

    $result = mysqli_query($dbh,$insertOrder);
    if (!$result){
        die ('Can\'t insert customers: '. mysqli_error($dbh));
    } else {
        echo 'Customers inserted : '. $insertOrder. '</br>';
    };
    
    echo '---------------------------</br>';

// Lấy tất cả các đơn hàng của khách hàng có id là 3
$selectOrders = "
    SELECT * FROM orders 
    WHERE customer_id = 3";
$result = mysqli_query($dbh, $selectOrders);
if (mysqli_num_rows($result) > 0) {
    echo "Orders with id là 3:<br>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] ."<br>". "Customer ID: " . $row["customer_id"] ."<br>". "Total Amount: " . $row["total_amount"] ."<br>". "Order Date: " . $row["order_date"] . "<br>";
    }
} else {
    echo "Can\'t find orders with id 3<br>";
}
echo '---------------------------</br>';

// Lấy danh sách khách hàng và đơn hàng của họ sử dụng câu lệnh JOIN
$selectCustomersOrders = "
    SELECT customers.id, customers.name, orders.id AS order_id, orders.total_amount, orders.order_date
    FROM customers
    JOIN orders ON customers.id = orders.customer_id";

$result = mysqli_query($dbh, $selectCustomersOrders);

if (mysqli_num_rows($result) > 0) {
    echo "Customers list :<br>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Customer ID: " . $row["id"] ."<br>". "Customer Name: " . $row["name"] ."<br>". "Order ID: " . $row["order_id"] ."<br>". "Total Amount: " ."<br>". $row["total_amount"] . "Order Date: " ."<br>". $row["order_date"] . "<br>";
    }
} else {
    echo "Can\'t find customers and orders <br>";
}
echo '---------------------------</br>';

// Lấy danh sách email của khách hàng sử dụng hàm DISTINCT
$selectDistinctEmails = "
    SELECT DISTINCT email 
    FROM customers";
$result = mysqli_query($dbh, $selectDistinctEmails);

if (mysqli_num_rows($result) > 0) {
    echo "Customer email list :<br>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Can\'t find email <br>";
}
echo '---------------------------</br>';

// Tạo bảng KHACHHANG
$createKHACHHANG = "
    CREATE TABLE KHACHHANG (
    MAKH char(4) NOT NULL,
    HOTEN VARCHAR(255) NOT NULL,
    DCHI VARCHAR(255) NOT NULL,
    SODT VARCHAR(20) NOT NULL,
    NGSINH DATE NOT NULL,
    DOANHSO DECIMAL(10, 2) NOT NULL,
    NGDK DATE NOT NULL,
    PRIMARY KEY (MAKH)
)";

$result = mysqli_query($dbh,$createKHACHHANG);
if (!$result){
    die ('Can\'t create table: '. mysqli_error($dbh));
} else {
    echo 'Table created: '. $createKHACHHANG. '</br>';
};
echo '---------------------------</br>';

// Tạo bảng NHANVIEN
$createNHANVIEN = "
    CREATE TABLE NHANVIEN (
    MANV char(4) NOT NULL,
    HOTEN VARCHAR(255) NOT NULL,
    NGVL DATE NOT NULL,
    SODT VARCHAR(20) NOT NULL,
    PRIMARY KEY (MANV)
)";

$result = mysqli_query($dbh,$createNHANVIEN);
if (!$result){
    die ('Can\'t create table: '. mysqli_error($dbh));
} else {
    echo 'Table created: '. $createNHANVIEN. '</br>';
};

echo '---------------------------</br>';

// Tạo bảng SANPHAM
$createSANPHAM = "
    CREATE TABLE SANPHAM (
    MASP char(4) NOT NULL,
    TENSP VARCHAR(255) NOT NULL,
    DVT VARCHAR(20) NOT NULL,
    NUOCSX VARCHAR(255) NOT NULL,
    GIA DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (MASP)
)";

$result = mysqli_query($dbh,$createSANPHAM);
if (!$result){
    die ('Can\'t create table: '. mysqli_error($dbh));
} else {
    echo 'Table created: '. $createSANPHAM. '</br>';
};

echo '---------------------------</br>';

// Tạo bảng HOADON
$createHOADON = "
    CREATE TABLE HOADON (
    SOHD int NOT NULL,
    NGHD DATE NOT NULL,
    MAKH char(4) NOT NULL,
    MANV char(4) NOT NULL,
    TRIGIA DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (SOHD),
    FOREIGN KEY (MAKH) REFERENCES KHACHHANG(MAKH) ON DELETE CASCADE,
    FOREIGN KEY (MANV) REFERENCES NHANVIEN(MANV) ON DELETE CASCADE
)";

$result = mysqli_query($dbh,$createHOADON);
if (!$result){
    die ('Can\'t create table: '. mysqli_error($dbh));
} else {
    echo 'Table created: '. $createHOADON. '</br>';
};

echo '---------------------------</br>';

// Tạo bảng CTHD
$createCTHD = "
    CREATE TABLE CTHD (
    SOHD int,
    MASP char(4),
    SL int,
    PRIMARY KEY (SOHD, MASP),
    FOREIGN KEY (SOHD) REFERENCES HOADON(SOHD) ON DELETE CASCADE,
    FOREIGN KEY (MASP) REFERENCES SANPHAM(MASP) ON DELETE CASCADE
)";

$result = mysqli_query($dbh,$createCTHD);
if (!$result){
    die ('Can\'t create table: '. mysqli_error($dbh));
} else {
    echo 'Table created: '. $createCTHD. '</br>';
};

echo '---------------------------</br>';

// Câu lệnh INSERT vào bảng NHANVIEN
$insertNHANVIEN = "
    INSERT INTO NHANVIEN (MANV, HOTEN, NGVL, SODT) VALUES
                            ('NV01', 'Nguyen Nhu Nhut', '2006-04-13', '0927345678'),
                            ('NV02', 'Le Thi Phi Yen', '2006-04-21', '0987567390'),
                            ('NV03', 'Nguyen Van B', '2006-04-27', '0997047382'),
                            ('NV04', 'Ngo Thanh Tuan', '2006-04-24', '0913758498'),
                            ('NV05', 'Nguyen Thi Truc Thanh', '2006-07-20', '0918590387');";

$result = mysqli_query($dbh,$insertNHANVIEN);
if (!$result){
      die ('Can\'t insert customers: '. mysqli_error($dbh));
} else {
 echo 'Customers inserted : '. $insertNHANVIEN. '</br>';
};
                            
echo '---------------------------</br>';

// Câu lệnh INSERT vào bảng KHACHHANG
$insertKHACHHANG = "
    INSERT INTO KHACHHANG(MAKH, HOTEN, DCHI, SODT, NGSINH, DOANHSO, NGDK) VALUES
                            ('KH01','Nguyen Van A','731 Tran Hung Dao, Q5, TpHCM','08823451','1960-10-22','13,060,000','2006-07-22'),
                            ('KH02','Tran Ngoc Han','23/5 Nguyen Trai, Q5, TpHCM','0908256478','1974-04-03','280,000','2006-07-30'),
                            ('KH03','Tran Ngoc Linh','45 Nguyen Canh Chan, Q1, TpHCM','0938776266','1980-06-12','3,860,000','2006-08-05'),
                            ('KH04','Tran Minh Long','50/34 Le Dai Thanh, Q10, TpHCM','0917325476','1965-03-09','250,000','2006-10-20'),
                            ('KH05','Le Nhat Minh','30 Truong Dinh, Q3, TpHCM','08246108','1950-03-10','21,000','2006-10-28'),
                            ('KH06','Le Hoai Thuong','227 Nguyen Van Cu, Q5, TpHCM','08631738','1981-12-31','915,000','2006-11-24'),
                            ('KH07','Nguyen Van Tam','32/3 Tran Binh Trong, Q5, TpHCM','0916783565','1971-06-04','12,500','2006-06-01'),
                            ('KH08','Nguyen Van Ba','123 Nguyen Hue, Q1, TpHCM','0938435756','1972-01-10','450,000','2006-12-01'),
                            ('KH09','Tran Van Hai','456 Nguyen Trai, Q5, TpHCM','0938435757','1973-02-11','650,000','2007-01-01'),
                            ('KH10','Le Van Hung','789 Nguyen Canh Chan, Q1, TpHCM','0938435758','1974-03-12','850,000','2007-01-02');";
$result = mysqli_query($dbh,$insertKHACHHANG);
if (!$result){
      die ('Can\'t insert customers: '. mysqli_error($dbh));
} else {
 echo 'Customers inserted : '. $insertKHACHHANG. '</br>';
};
                            
echo '---------------------------</br>';


// Câu lệnh INSERT vào bảng SANPHAM
$insertSANPHAM = "
    INSERT INTO SANPHAM (MASP,TENSP, DVT, NUOCSX, GIA) VALUES
                        ('SP01','But chi', 'cay', 'Viet Nam', '5,000'),
                        ('SP02','But chi', 'hop', 'Viet Nam', '30,000'),
                        ('SP03','But bi', 'cay', 'Viet Nam', '5,000'),
                        ('SP04','But bi', 'hop', 'Trung Quoc', '7,000'),
                        ('SP05','Tap 100 giay mong', 'quyen', 'Trung Quoc', '2,500'),
                        ('SP06','Tap 200 giay mong', 'quyen', 'Trung Quoc', '4,500'),
                        ('SP07','Tap 100 giay mong', 'quyen', 'Viet Nam', '3,000'),
                        ('SP08','Tap 200 giay mong', 'quyen', 'Viet Nam', '5,500'),
                        ('SP09','Tap 100 giay mong', 'chuc', 'Viet Nam', '23,000'),
                        ('SP10','Tap 200 giay mong', 'chuc', 'Viet Nam', '53,000');";
$result = mysqli_query($dbh,$insertSANPHAM);
if (!$result){
      die ('Can\'t insert customers: '. mysqli_error($dbh));
} else {
 echo 'Customers inserted : '. $insertSANPHAM. '</br>';
};
                            
echo '---------------------------</br>';


// Câu lệnh INSERT vào bảng HOADON
$insertHOADON = "
    INSERT INTO HOADON (SOHD, NGHD, MAKH, MANV, TRIGIA) VALUES
                        (1, '2023-06-15', 'KH01', 'NV01', 100000),
                        (2, '2023-06-16', 'KH02', 'NV02', 200000),
                        (3, '2023-06-17', 'KH03', 'NV03', 300000),
                        (4, '2023-06-18', 'KH04', 'NV04', 400000),
                        (5, '2023-06-19', 'KH05', 'NV04', 500000),
                        (6, '2023-06-20', 'KH06', 'NV03', 600000),
                        (7, '2023-06-21', 'KH07', 'NV02', 700000),
                        (8, '2023-06-22', 'KH08', 'NV01', 800000);";
$result = mysqli_query($dbh,$insertHOADON);
if (!$result){
      die ('Can\'t insert customers: '. mysqli_error($dbh));
} else {
 echo 'Customers inserted : '. $insertHOADON. '</br>';
};
                            
echo '---------------------------</br>';


// Câu lệnh INSERT vào bảng CTHD
$insertCTHD = "
    INSERT INTO CTHD (SOHD, MASP, SL) VALUES
                    (1,'SP01', 1),
                    (1,'SP02', 2),
                    (2,'SP03', 3),
                    (2,'SP04', 4),
                    (3,'SP01', 5),
                    (3,'SP03', 6),
                    (4,'SP03', 7),
                    (4,'SP01', 8),
                    (5,'SP02', 9),
                    (5,'SP04', 10),
                    (6,'SP010', 11),
                    (6,'SP08', 12),
                    (7,'SP09', 13),
                    (7,'SP07', 14),
                    (8,'SP06', 15),
                    (8,'SP05', 16);";

$result = mysqli_query($dbh,$insertCTHD);
if (!$result){
      die ('Can\'t insert customers: '. mysqli_error($dbh));
} else {
 echo 'Customers inserted : '. $insertCTHD. '</br>';
};
                            
echo '---------------------------</br>';

// Thêm thuộc tính GHICHU vào quan hệ SANPHAM
$addColumnGHICHU = "
    ALTER TABLE SANPHAM ADD COLUMN GHICHU VARCHAR(20)";

    $result = mysqli_query($dbh,$addColumnGHICHU);
    if (!$result){
          die ('Can\'t add: '. mysqli_error($dbh));
    } else {
     echo 'GHICHU added : '. $addColumnGHICHU. '</br>';
    };
                                
    echo '---------------------------</br>';

// Thêm thuộc tính LOAIKH vào quan hệ KHACHHANG
$addColumnLOAIKH = "
    ALTER TABLE KHACHHANG ADD COLUMN LOAIKH TINYINT";

    $result = mysqli_query($dbh,$addColumnLOAIKH);
    if (!$result){
          die ('Can\'t add: '. mysqli_error($dbh));
    } else {
     echo 'LOAIKH added : '. $addColumnLOAIKH. '</br>';
    };
                                
    echo '---------------------------</br>';

// Cập nhật tên "Nguyễn Văn B" cho dữ liệu Khách Hàng có mã là KH01
$updateKH01 = "
    UPDATE KHACHHANG 
    SET HOTEN = 'Nguyễn Văn B' 
    WHERE MAKH = 'KH01'";

    $result = mysqli_query($dbh,$updateKH01);
    if (!$result){
        die ('Can\'t update table: '. mysqli_error($dbh));
    } else {
        echo 'Table updated: '. $updateKH01. '</br>';
    };
    echo '---------------------------</br>';

// Cập nhật tên "Nguyễn Văn Hoan" cho dữ liệu Khách Hàng có mã là KH09 và năm đăng ký là 2007
$updateKH09 = "
    UPDATE KHACHHANG 
    SET HOTEN = 'Nguyễn Văn Hoan' 
    WHERE MAKH = 'KH09' AND YEAR(NGDK) = 2007";

    $result = mysqli_query($dbh,$updateKH09);
    if (!$result){
        die ('Can\'t update table: '. mysqli_error($dbh));
    } else {
        echo 'Table updated: '. $updateKH09. '</br>';
    };
    echo '---------------------------</br>';

// Sửa kiểu dữ liệu của thuộc tính GHICHU trong quan hệ SANPHAM thành varchar(100)
$modifyColumnGHICHU = "
    ALTER TABLE SANPHAM MODIFY COLUMN GHICHU VARCHAR(100)";

    $result = mysqli_query($dbh,$modifyColumnGHICHU);
    if (!$result){
        die ('Can\'t modify properties: '. mysqli_error($dbh));
    } else {
        echo 'properties modified: '. $modifyColumnGHICHU. '</br>';
    };
    echo '---------------------------</br>';

// Xóa thuộc tính GHICHU trong quan hệ SANPHAM
$dropColumnGHICHU = "
    ALTER TABLE SANPHAM DROP COLUMN GHICHU";

    $result = mysqli_query($dbh,$dropColumnGHICHU);
    if (!$result){
        die ('Can\'t drop properties : '. mysqli_error($dbh));
    } else {
        echo 'Properties droped: '. $dropColumnGHICHU. '</br>';
    };
    echo '---------------------------</br>';

// Xóa tất cả dữ liệu khách hàng có năm sinh 1971
$deleteYear1971 = "
    DELETE FROM KHACHHANG 
    WHERE YEAR(NGSINH) = 1971";
    $result = mysqli_query($dbh,$deleteYear1971);
    if (!$result){
        die ('Can\'t delete year: '. mysqli_error($dbh));
    } else {
        echo 'Year deleted: '. $deleteYear1971. '</br>';
    };
    echo '---------------------------</br>';


// Xóa tất cả dữ liệu khách hàng có năm sinh 1971 và năm đăng ký 2006
$delete1971_2006 = "
    DELETE FROM KHACHHANG 
    WHERE YEAR(NGSINH) = 1971 AND YEAR(NGDK) = 2006";

    $result = mysqli_query($dbh,$delete1971_2006);
    if (!$result){
        die ('Can\'t delete year: '. mysqli_error($dbh));
    } else {
        echo 'TYear deleted: '. $delete1971_2006. '</br>';
    };
    echo '---------------------------</br>';

// Xóa tất hoá đơn có mã KH = KH01
$deleteHoaDonKH01 = "
    DELETE FROM HOADON 
    WHERE MAKH = 'KH01'";

    $result = mysqli_query($dbh,$deleteHoaDonKH01);
    if (!$result){
        die ('Can\'t delete orders: '. mysqli_error($dbh));
    } else {
        echo 'Orders deleted: '. $deleteHoaDonKH01. '</br>';
    };
    echo '---------------------------</br>';

// Đóng kết nối
mysqli_close($dbh);
?>
