<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
</head>
<body>
    <h1 style="text-align:center">Sửa sản phẩm</h1>
    <?php
    $id = $_REQUEST["id"];//lấy id sản phẩm cần sửa từ link
    require("lib.php");
    $sanpham = getDataByID($id);
    if($sanpham===FALSE)
        die("<h3>LỖI SQL</h3>");
    if($sanpham===NULL)
        die("<h3>KHÔNG TÌM THẤY SẢN PHẨM</h3>");
    ?>
    <form name="f1" id="f1" method="post" action="./php/XulySuaSP.php">
        <input type="hidden" name="id" value="<?=$sanpham["id"]?>">
        <table width="400" align="center" border="0">
            <tr height="40">
                <td width="30%">Mã Sản Phẩm:</td>
                <td width="70%"><input type="text" id="masanpham" name="masanpham" value="<?=$sanpham["masanpham"]?>"></td>
            </tr>
            <tr height="40">
                <td width="30%">Tên Sản Phẩm:</td>
                <td width="70%"><input type="text" id="tensanpham" name="tensanpham" value="<?=$sanpham["tensanpham"]?>"></td>
            </tr>
            <tr height="40">
                <td width="30%">Loại Sản Phẩm:</td>
                <td width="70%"><input type="text" id="loaisanpham" name="loaisanpham" value="<?=$sanpham["loaisanpham"]?>"></td>
            </tr>
            <tr height="40">
                <td colspan="2" align="center">
                    <input type="submit" id="b1" name="b1" value="Cập nhật">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>