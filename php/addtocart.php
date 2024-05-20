<?php
require("lib.php");
$tbname ="cart";
$id = $_REQUEST["id"];
$products = getDataByID($id,"book");
$masp = $products["masanpham"];
$tensp = $products["tensanpham"];
$url = $products["url_img"];
$dongia = $products["dongia"];
$sl = $_REQUEST["soluong"];
$ketqua= insertDataCart($tbname,$masp,$tensp,$url,$dongia,$sl);
if($ketqua !=NULL)
{

    echo("<h3>Thêm Thành Công</h3>");
}
    else
{
    echo("<h3>Thêm Thất Bại</h3>");
}

?>
<a href="../index.php">Quay lại Trang Chính</a>