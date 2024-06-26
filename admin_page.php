<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Admin </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="../cart.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Thiết Lập Kho hàng</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden">
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div> -->
                        <button class="tablinks" onclick="openTable(event, 'Product')">Sản Phẩm</button>
                        <button class="tablinks" onclick="openTable(event, 'Category')">Loại Sản Phẩm</button>
                        <button class="tablinks" onclick="openTable(event, 'New')">New Tab</button>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="./index.php" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">

                            <a href="./index.php" class="nav-item nav-link active">Home</a>
                            <a href="./main_page.php" class="nav-item nav-link">Shop</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="../cart.php" class="dropdown-item">Shopping Cart</a>
                                    <a href="./checkout.php" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="" class="nav-item nav-link">Login</a>
                            <a href="" class="nav-item nav-link">Register</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->



    <!-- Admin Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Bảng Nhập dữ liệu cửa hàng</span></h2>
        </div>
        <div class="row px-xl-5 flex-column">
            <div id="Product" class="tabcontent" style="display:block">
                <div class="d-flex">
                    <div class="product-form d-flex col-lg-4 mb-5">
                        <div id="success">

                        </div>
                        <form novalidate="novalidate" action="./php/XuLyDuLieu.php" method="post" enctype="multipart/form-data">
                            <div class="control-group d-none">
                                <p>Bảng
                                    <input type="text" class="form-control" id="table" name="table" placeholder="Tên Sản Phẩm" value="tbProduct" required="required" data-validation-required-message="Hãy Nhập Tên Sản Phẩm" />
                                </p>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <p>Tên Sản Phẩm
                                    <input type="text" class="form-control" id="ProName" name="ProName" placeholder="Tên Sản Phẩm" required="required" data-validation-required-message="Hãy Nhập Tên Sản Phẩm" />
                                </p>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <p>Hình Ảnh Sản Phẩm
                                    <input type="text" class="form-control" id="ProImage" name="ProImage" placeholder="Hình Ảnh sản Phẩm" required="required" data-validation-required-message="" />
                                </p>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <p>Đơn Giá
                                    <input type="int" class="form-control" id="Price" name="Price" placeholder="Đơn Giá (đơn vị :đ)" required="required" data-validation-required-message="Phải Nhập Đơn Giá" />
                                </p>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <p>Mô Tả Sản Phẩm
                                    <input class="form-control" rows="6" id="Description" name="Description" placeholder="Mô Tả Chi Tiết Sản Phẩm" required="required" data-validation-required-message="Hãy Nhập Mô Tả Chi Tiết Sản Phẩm"></input>
                                </p>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <p> Mã Loại Sản Phẩm
                                    <select name="CatID" id="CatID">
                                        <option value="0">Chọn nhóm SP</option>
                                        <?php
                                        require("./php/lib.php");
                                        $rows = getListData("tbCategory");
                                        foreach ($rows as $row) {
                                        ?>
                                            <option value="<?= $row["CatID"] ?>"><?= $row["CatName"] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </p>
                                <p class="help-block text-danger"></p>
                            </div>
                            <!-- <div class="control-group">
                            <p>Trạng thái
                                <input type="int" class="form-control" id="soluong" name="soluong" placeholder="Số Lượng" required="required" data-validation-required-message="Hãy Nhập số lượng sản phẩm" />
                            </p>
                            <p class="help-block text-danger"></p>
                        </div> -->
                            <div>
                                <button class="btn btn-primary py-2 px-4" type="submit" name="nhapdulieu" id="nhapdulieu">Nhập Dữ Liệu</button>
                            </div>
                        </form>

                    </div>
                    <div class="col-lg-8 mb-5">
                        <h5 class="font-weight-semi-bold mb-3">Bảng Dữ Liệu Hiện Tại</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên Sản Phẩm</th>
                                    <th scope="col">Hình Ảnh Sản Phẩm</th>
                                    <th scope="col">Đơn Giá</th>
                                    <th scope="col">Mô Tả Sản Phẩm</th>
                                    <th scope="col">Loại Sản Phẩm</th>
                                    <th scope="col">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once("./php/lib.php");
                                $products = getProductData();
                                $i = 0;
                                foreach ($products as $p) {
                                    $hinhanh = ($p["ProImage"] == "") ? "./img/no-image.png" : $p["ProImage"];
                                    $i++;
                                ?>
                                    <tr height="30">
                                        <td>
                                            <?= $i ?>
                                        </td>
                                        <td>
                                            <?= $p["ProName"] ?>
                                        </td>
                                        <td class="align-content-center"><img src="<?= $hinhanh ?>" width="80"></td>
                                        <td>
                                            <?= $p["Price"] ?>
                                        </td>
                                        <td>
                                            <?= $p["Description"] ?>
                                        </td>
                                        <!-- <td>
                                    <?= $p["status"] ?>
                                </td> -->
                                        <td>
                                            <?= $p["CatName"] ?>
                                        </td>
                                        <td>
                                            <a href="Suadulieu.php?id=<?= $p["ProID"] ?>">Sửa</a>
                                            <a href="./php/deleteItem.php?id=<?= $p["ProID"] ?>" onclick="return confirm('Chắc chắn xóa?');">Xóa</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Category" class="tabcontent">
                <div class="d-flex">
                    <div class="product-form d-flex">
                        <div class=" col-lg-4 mb-5 ">
                            <form novalidate="novalidate" action="./php/XuLyDuLieu.php" method="post" enctype="multipart/form-data">
                                <div class="control-group d-none">
                                    <p>Bảng Nhóm
                                        <input type="text" class="form-control" id="table" name="table" placeholder="Tên Sản Phẩm" value="tbCategory" required="required" data-validation-required-message="Hãy Nhập Tên Sản Phẩm" />
                                    </p>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <p>Loại Sản Phẩm
                                        <input type="text" class="form-control" id="CatName" name="CatName" placeholder="Nhóm Sản Phẩm" required="required" data-validation-required-message="Hãy Nhập Tên Nhóm Sản Phẩm" />
                                    </p>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <!-- <div class="control-group">
                            <p>Trạng thái
                                <input type="int" class="form-control" id="soluong" name="soluong" placeholder="Số Lượng" required="required" data-validation-required-message="Hãy Nhập số lượng sản phẩm" />
                            </p>
                            <p class="help-block text-danger"></p>
                        </div> -->
                                <div>
                                    <button class="btn btn-primary py-2 px-4" type="submit" name="nhapdulieu" id="nhapdulieu">Nhập Dữ Liệu</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-8 mb-5">
                            <h5 class="font-weight-semi-bold mb-3">Bảng Dữ Liệu Hiện Tại</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Loại Sản Phẩm</th>
                                        <th scope="col">Trạng Thái</th>
                                        <th scope="col">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once("./php/lib.php");
                                    $products = getListData('tbCategory');
                                    $i = 0;
                                    foreach ($products as $p) {
                                        $i++;
                                    ?>
                                        <tr height="30">
                                            <td>
                                                <?= $i ?>
                                            </td>
                                            <td>
                                                <?= $p["CatName"] ?>
                                            </td>
                                            <td>
                                                <?= $p["status"] ?>
                                            </td>
                                            <td>
                                                <a href="SuaNhomSP.php?id=<?= $p["CatID"] ?>">Sửa</a>
                                                <a href="./php/deleteCategory.php?id=<?= $p["CatID"] ?>" onclick="return confirm('Chắc chắn xóa?');">Xóa</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
                <script>
                    function openTable(evt, tableName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        document.getElementById(tableName).style.display = "block";
                        evt.currentTarget.className += " active";
                    }
                </script>
            </div>
        </div>


        <!-- Admin End -->


        <!-- Footer Start -->
        <!-- <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="./index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="./main_page.php"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="./detail.php"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="../cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="./checkout.php"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="./contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="./index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="./main_page.php"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="./detail.php"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="../cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="./checkout.php"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="./contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div> -->
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>