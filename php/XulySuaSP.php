<?php
require("lib.php");
//lấy dữ liệu từ form gửi tới
$tbname= 'book';
$id = $_REQUEST['id'];
$masp = $_REQUEST['masanpham'];
$tensp = $_REQUEST['tensanpham'];
$loaisp = $_REQUEST['loaisanpham'];
$mota = $_REQUEST["motasanpham"];
$dongia = $_REQUEST["dongia"];
$image = $_REQUEST["imageurl"];
$soluong = $_REQUEST["soluong"];
//$image = UploadFile("image1", "Hinhanh");
$ketqua = updateData($tbname,$id,$masp, $tensp,$loaisp,$mota,$dongia,$image,$soluong);
if($ketqua==TRUE)
    echo "<H3>thành công</h3>";
else
echo "<H3>Lỗi thêm dũ liệu</h3>";
?>
<a href="../admin_page.php">Quay về danh sách</a>
