<?php
function ConnectDB()
{
    //tạo kết nối CSDL dùng PDO
    try {
        $conn = new PDO("mysql:host=localhost;dbname=dacntt", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
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
    $pdo_stm = $conn->prepare($strSQL);//tạo đối tượng PDOStatement với lệnh SQL
    $ketqua = $pdo_stm->execute();//thực thi lệnh SQL đã prepare
    //lấy dữ liệu từ bảng sản phẩm lưa vào mảng (2 chiều)
    if($ketqua==TRUE)
    {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    else
        return NULL;

}
function deleteData($id,$tbname)
{
    $conn = ConnectDB();
    //dùng $conn để DELETE
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "DELETE FROM $tbname WHERE id=$id";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL);//tạo đối tượng PDOStatement với lệnh SQL
    $ketqua = $pdo_stm->execute();//thực thi lệnh SQL đã prepare
    return $ketqua;
}
function insertData($tbname ,$masp,$tensp,$loaisp,$mota,$dongia,$image,$soluong)
{
    $conn = ConnectDB();
  
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "INSERT INTO $tbname(id,masanpham,tensanpham,loaisanpham,motasanpham,dongia,url_img,soluong,daban) 
                    VALUES (NULL, ?,?,?,?,?,?,?,0)";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL);//tạo đối tượng PDOStatement với lệnh SQL
    //gán giá trị cho các tham số ?
    $param = [$masp,$tensp,$loaisp,$mota,$dongia,$image,$soluong];
    $ketqua = $pdo_stm->execute($param);//thực thi lệnh SQL đã prepare
    return $ketqua;
}
function insertDataCart($tbname ,$masp,$tensp,$url,$dongia,$sl=1)
{
    $conn = ConnectDB();
  
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "INSERT INTO $tbname(id,masanpham,tensanpham,url_img,dongia,soluong,tongtien) 
                    VALUES (NULL, ?,?,?,?,?,?)";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL);//tạo đối tượng PDOStatement với lệnh SQL
    //gán giá trị cho các tham số ?
    $param = [$masp,$tensp,$url,$dongia,$sl,$dongia*$sl];
    $ketqua = $pdo_stm->execute($param);//thực thi lệnh SQL đã prepare
    return $ketqua;
}
function getDataByID($id,$tbname)
{
    $conn = ConnectDB();
    //dùng $conn để SELECT
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "SELECT * FROM $tbname WHERE id=$id";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL);//tạo đối tượng PDOStatement với lệnh SQL
    $ketqua = $pdo_stm->execute();//thực thi lệnh SQL đã prepare
    //lấy dữ liệu từ bảng sản phẩm lưa vào mảng (2 chiều)
    if($ketqua==TRUE)
    {
        $row = $pdo_stm->fetch(PDO::FETCH_ASSOC);//lấy về 1 dòng từ kêt quả SELECT
        return $row; //NẾU KHÔNG CÓ THÌ $row = NULL
    }
    else
        return FALSE;
}
function updateData($tbname,$id,$masp,$tensp,$loaisp,$mota,$dongia,$image,$soluong)
{
    $conn = ConnectDB();
    //tạo câu lệnh SQL cần thực thi
    $strSQL = "UPDATE $tbname SET masanpham=?,tensanpham=?,loaisanpham=?,motasanpham=?,dongia=?,url_img=?,soluong=? WHERE id=?";
    //chạy câu lênh SQL tới máy chủ MySQL
    $pdo_stm = $conn->prepare($strSQL);//tạo đối tượng PDOStatement với lệnh SQL
    $param = [$masp,$tensp,$loaisp,$mota,$dongia,$image,$soluong,$id];
    $ketqua = $pdo_stm->execute($param);//thực thi lệnh SQL đã prepare
    return $ketqua;
}
?>