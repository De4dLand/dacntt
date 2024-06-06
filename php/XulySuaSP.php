<?php
require("lib.php");
//lấy dữ liệu từ form gửi tới
$tbname = 'tbProduct';
$id = $_REQUEST['ProID'];
$tensp = $_REQUEST['ProName'];
$loaisp = $_REQUEST['CatID'];
$mota = $_REQUEST["Description"];
$dongia = $_REQUEST["Price"];
$image = $_REQUEST["ProImage"];
$status = $_REQUEST["status"];
//$image = UploadFile("image1", "Hinhanh");
$ketqua = updateData($tbname, $id, $tensp, $loaisp, $mota, $dongia, $image, $status);
if ($ketqua == TRUE)
    echo "<H3>thành công</h3>";
else
    echo "<H3>Lỗi thêm dũ liệu</h3>";
?>
<a href="../admin_page.php">Quay về danh sách</a>