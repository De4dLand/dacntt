<?php
require("lib.php");
//lấy dữ liệu từ form gửi tới
if ($_REQUEST['table'] == 'tbProduct') {
    $tbname = $_REQUEST['table'];
    $tensp = $_REQUEST['ProName'];
    $image = $_REQUEST["ProImage"];
    $dongia = $_REQUEST["Price"];
    $mota = $_REQUEST["Description"];
    $loaisp = $_REQUEST['CatID'];
    //$image = UploadFile("image1", "Hinhanh");

    $ketqua = insertData($tbname, $tensp, $image, $dongia, $mota, $loaisp);
    if ($ketqua == TRUE)
        echo "<H3>thành công</h3>";
    else
        echo "<H3>Lỗi thêm dũ liệu</h3>";
} else if ($_REQUEST['table'] == 'tbCategory') {
    $tbname = $_REQUEST['table'];
    $nhomsp = $_REQUEST['CatName'];
    $ketqua = insertCategoryData($tbname, $nhomsp);
    if ($ketqua == TRUE)
        echo "<H3>thành công</h3>";
    else
        echo "<H3>Lỗi thêm dũ liệu</h3>";
}
