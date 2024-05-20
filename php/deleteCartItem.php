<?php
require("lib.php");
$id = $_REQUEST["id"];
$ketqua = deleteData($id, "cart");
if ($ketqua == TRUE)
    echo "<H3>thành công</h3>";
else
    echo "<H3>Lỗi xóa dũ liệu</h3>";
?>
<a href="../cart.php">Quay về danh sách</a>