<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ctdh</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <!-- Header Section End -->



    <div class="container">
        <div class="checkout__form">
            <?php
            if (isset($_SESSION['ten'])) {
                extract($_SESSION['ten']);
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">


                            <div class="sidebar">
                                <div class="sidebar__item">
                                    <div class="section-title product__discount__title">
                                        <h2>Tài khoản<p>xin chào:
                                                <?= $ten ?>
                                            </p>
                                        </h2>

                                    </div>
                                    <ul>


                                        <?php if ($vai_tro == 1) { ?>
                                            <div class="selling_products ">
                                                <li><a href="admin/index.php">Đăng nhập trang admin</a></li>
                                            </div>
                                        <?php } ?>




                                        <li>
                                            <div class="selling_products">
                                                <a href="">Chi tiết đơn hàng</a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="selling_products">
                                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                            </div>
                                        </li>


                                        <li>
                                            <div class="selling_products">
                                                <a href="index.php?act=giohang">Giỏ hàng</a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="selling_products">
                                                <a href="index.php?act=dangxuat">Đăng xuất</a>
                                            </div>
                                        </li>


                                    </ul>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <div class="product__discount">
                                <div class="filter__item">
                                    <div class="section-title product__discount__title">
                                        <h5>Chi tiết đơn hàng !</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="product__item">

                                                <table class="col-lg-12" border="1px" style="text-align: center;">
                                                    <tr>
                                                        <th>Sản phẩm</th>
                                                        <th>Ảnh</th>
                                                        <th>Giá</th>
                                                        <th>Số lượng</th>
                                                        <th>Thành giá</th>
                                                        
                                                    </tr>
                                                    <tbody id="order">
                                                    
                                                        <?php

                                                        if ($_SESSION['ten']['id_kh']) {
                                                            $tong =0;
                                                            // extract($_SESSION['cart']);
                                                            foreach ($loadbill as $bill) {
                                                                extract($bill);
                                                                $sp = loadone_sanpham($id_sp);
                                                                $hinh = $img_path . $sp['img_sp'];
                                                                // var_dump($loadbill);
                                                                
                                                                $link= "index.php?act=ctdh?id_dh=".$id_dh;
                                                        ?>
                                                                <tr>
                                                                    <td><?= $sp['ten_sp'] ?></td>
                                                                    <td><img src="<?=$hinh?>" alt="" width='100px'></td>
                                                                    <td><?= $giamua ?></td>
                                                                    <td><?= $soluong ?></td>
                                                                    <td><?= $thanhtien ?></td>
                                                                </tr>
                                                        <?php
                                                        $tong += $thanhtien;
                                                            }
                                                            
                                                            // echo '<pre>';
                                                            // var_dump($loadbill);
                                                        }
                                                        ?>
                                                        <tr>Tổng tiền: <?=$tong?></tr>
                                                    </tbody>
                                                    
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } else { ?>
                <h4>Đăng Nhập</h4>

                <p><a href="index.php?act=dangnhap">Đăng nhập </a>để xem !</p>
            <?php } ?>

        </div>


    </div>

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>



    <!-- Code injected by live-server -->
</body>

</html>