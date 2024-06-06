<?php
require("lib.php");
$id = $_REQUEST["id"];
$tbname = "tbCategory";
$ketqua = deleteData($id, $tbname);
if ($ketqua == TRUE)
    echo "<H3>thành công</h3>";
else
    echo "<H3>Lỗi xóa dũ liệu</h3>";
?>
<a href="./admin_page.php">Quay về danh sách</a>