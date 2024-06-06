<?php
function ConnectDB()
{
    //tạo kết nối CSDL dùng PDO
    try {
        $hostname = "localhost";
        $dbname = "btlshop";
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
    return $conn;
}
function getListData($tbname)
{
    $conn = ConnectDB();
    //dùng $conn để SELECT
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "SELECT * FROM $tbname";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL); //tạo đối tượng PDOStatement với lệnh SQL
    $ketqua = $pdo_stm->execute(); //thực thi lệnh SQL đã prepare
    //lấy dữ liệu từ bảng sản phẩm lưa vào mảng (2 chiều)
    if ($ketqua == TRUE) {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    } else
        return NULL;
}
function deleteData($id, $tbname)
{
    $conn = ConnectDB();
    //dùng $conn để DELETE
    //tạo câu lệnh SQL cần thực thi
    if ($tbname === 'tbProduct') {
        $strSQL = "DELETE FROM $tbname WHERE ProID=$id";
    } else if ($tbname === 'tbCategory') {
        $strSQL = "DELETE FROM $tbname WHERE CatID=$id";
    }
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL); //tạo đối tượng PDOStatement với lệnh SQL
    $ketqua = $pdo_stm->execute(); //thực thi lệnh SQL đã prepare
    return $ketqua;
}
function insertData($tbname, $tensp, $image, $dongia, $mota, $loaisp)
{
    $conn = ConnectDB();

    //tạo câu lệnh SQL cần thực thi
    $strSQL = "INSERT INTO $tbname(ProID,ProName,ProImage,Price,Description,status,CatID) 
                    VALUES (NULL, ?,?,?,?,0,?)";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL); //tạo đối tượng PDOStatement với lệnh SQL
    //gán giá trị cho các tham số ?
    $param = [$tensp, $image, $dongia, $mota, $loaisp];
    $ketqua = $pdo_stm->execute($param); //thực thi lệnh SQL đã prepare
    return $ketqua;
}
function insertCategoryData($tbname, $nhomsp)
{
    $conn = ConnectDB();

    //tạo câu lệnh SQL cần thực thi
    $strSQL = "INSERT INTO $tbname(CatID,CatName,status) 
                    VALUES (NULL,?,1)";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL); //tạo đối tượng PDOStatement với lệnh SQL
    //gán giá trị cho các tham số ?
    $param = [$nhomsp];
    $ketqua = $pdo_stm->execute($param); //thực thi lệnh SQL đã prepare
    return $ketqua;
}
function insertDataCart($tbname, $masp, $tensp, $url, $dongia, $sl = 1)
{
    $conn = ConnectDB();

    //tạo câu lệnh SQL cần thực thi
    $strSQL = "INSERT INTO $tbname(id,masanpham,tensanpham,url_img,dongia,soluong,tongtien) 
                    VALUES (NULL, ?,?,?,?,?,?)";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL); //tạo đối tượng PDOStatement với lệnh SQL
    //gán giá trị cho các tham số ?
    $param = [$masp, $tensp, $url, $dongia, $sl, $dongia * $sl];
    $ketqua = $pdo_stm->execute($param); //thực thi lệnh SQL đã prepare
    return $ketqua;
}
function getDataByID($id, $tbname)
{
    $conn = ConnectDB();
    //dùng $conn để SELECT
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "SELECT * FROM $tbname WHERE CatID=$id";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL); //tạo đối tượng PDOStatement với lệnh SQL
    $ketqua = $pdo_stm->execute(); //thực thi lệnh SQL đã prepare
    //lấy dữ liệu từ bảng sản phẩm lưa vào mảng (2 chiều)
    if ($ketqua == TRUE) {
        $row = $pdo_stm->fetch(PDO::FETCH_ASSOC); //lấy về 1 dòng từ kêt quả SELECT
        return $row; //NẾU KHÔNG CÓ THÌ $row = NULL
    } else
        return FALSE;
}
function updateData($tbname, $id, $tensp, $loaisp, $mota, $dongia, $image, $status)
{
    $conn = ConnectDB();
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "UPDATE $tbname SET ProName=?,CatID=?,Description=?,Price=?,ProImage=?,status=? WHERE ProID=?";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL); //tạo đối tượng PDOStatement với lệnh SQL
    $param = [$tensp, $loaisp, $mota, $dongia, $image, $status, $id];
    $ketqua = $pdo_stm->execute($param); //thực thi lệnh SQL đã prepare
    return $ketqua;
}

function updateDataCategory($tbname, $id, $nhomsp, $status)
{
    $conn = ConnectDB();
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "UPDATE $tbname SET CatName=?,status=? WHERE CatID=?";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL); //tạo đối tượng PDOStatement với lệnh SQL
    $param = [$tbname, $nhomsp, $status, $id];
    $ketqua = $pdo_stm->execute($param); //thực thi lệnh SQL đã prepare
    return $ketqua;
}

function getProductData()
{
    $conn = ConnectDB();
    //dùng $conn để SELECT
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "SELECT P.*, C.CatName FROM tbProduct P 
                INNER join tbCategory C ON P.CatID = C.CatID";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL); //tạo đối tượng PDOStatement với lệnh SQL
    $ketqua = $pdo_stm->execute(); //thực thi lệnh SQL đã prepare
    //lấy dữ liệu từ bảng sản phẩm lưa vào mảng (2 chiều)
    if ($ketqua == TRUE) {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
        return $rows; //NẾU KHÔNG CÓ THÌ $row = NULL
    } else
        return FALSE;
}
//Hàm hiển thị các <option> từ mảng 2 chiều chứa dữ liệu từ 1 bảng

function ShowOption($rows, $valueCol, $nameCol, $selectedID)
{
    foreach ($rows as $row) {
        $value = $row[$valueCol];
        $name = $row[$nameCol];
        $selected = ($value == $selectedID) ? "selected" : "";
        echo "<option value=\"$value\" $selected>$name</option>";
    }
}
function getSearchData($manhom = 0, $tukhoa = "")
{
    $conn = ConnectDB();
    //dùng $conn để SELECT
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "SELECT SP.*, NSP.tennhom FROM tbsanpham SP 
                INNER join tbnhomsp NSP ON SP.manhom = NSP.manhom WHERE 1 ";
    if ($manhom > 0)
        $strSQL .= " AND SP.manhom=$manhom";
    if ($tukhoa != "")
        $strSQL .= " AND name LIKE '%$tukhoa%'";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL); //tạo đối tượng PDOStatement với lệnh SQL
    $ketqua = $pdo_stm->execute(); //thực thi lệnh SQL đã prepare
    //lấy dữ liệu từ bảng sản phẩm lưa vào mảng (2 chiều)
    if ($ketqua == TRUE) {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
        return $rows; //NẾU KHÔNG CÓ THÌ $row = NULL
    } else
        return FALSE;
}
