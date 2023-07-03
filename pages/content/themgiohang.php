<?php
session_start();
require_once("../mvc/model/connect.php");
if (isset($_POST["themgiohang"])) {
    $id = $_GET['id_sanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM sanpham where id_sp = $id limit 1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        //mảng chứa những dữ liệu
        $new_product = array(array('id' => $id, 'masp' => $row['masp'], 'hinhanh' => $row['hinhanh'], 'tensp' => $row['tensp'], 'giasp' => $row['giasp'], 'soluong' => $soluong, 'noidung' => $row['noidung'], ));
        //kiểm tra session giỏ hàng tồn tại hay không
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION as $cart_item) {
                // nếu đầu vào trùng nhau
                if ($cart_item['id'] == $id) {
                    // tạo ra một mảng mới 
                    $product = array(array('id' => $id, 'masp' => $cart_item['masp'], 'hinhanh' => $cart_item['hinhanh'], 'tensp' => $cart_item['tensp'], 'giasp' => $cart_item['giasp'], 'soluong' => $soluong+1, 'noidung' => $cart_item['noidung'], ));
$found = true;
                }
            }
        }
    }
}
?>