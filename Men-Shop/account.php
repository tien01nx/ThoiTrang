<?php
include('control.php'); //chèn trang control vào news
session_start();
$getdata = new Data(); // Gọi class data
$select = $getdata->user();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/css/header.css">
    <!-- <link rel="stylesheet" href="template/css/main.css"> -->
    <link rel="stylesheet" href="template/css/footer.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="./template/css/suplo-style.scss.css">
    <link rel="stylesheet" href="./template/css/timber.scss.css">

    <link rel="stylesheet" href="template/css/base.scss.css">
    <link rel="stylesheet" href="./template/css/dangxuat.css">

    <script src="https://kit.fontawesome.com/f03f52505a.js" crossorigin="anonymous"></script>
    <title>Trang khách hàng</title>
</head>

<body>

    <?php
    // Gọi tệp header.php
    include('header.php');
    ?>
    <section id="breadcrumb-wrapper">
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner">
                    <div class="breadcrumb-small">
                        <a href="trangchu.php" title="Quay trở về trang chủ">Trang chủ</a>



                        <span aria-hidden="true"><i class="fas fa-caret-right"></i></span>
                        <span>Tài khoản</span>


                    </div>
                </div>
            </div>
        </div>
    </section>






    <div class="title_full">

    </div>

    </div>
    <section class="signup page_customer_account">
        <div class="container">
            <div class="wrap_background_aside  margin-bottom-40">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-main-acount">
                        <div id="parent" class="row">
                            <div id="a" class="col-xs-12 col-sm-12 col-lg-9 col-left-account">
                                <?php
                                foreach ($select as $se) {

                                    ?>
                                <div class="page-title m992">
                                    <h1 class="title-head margin-top-0"><a href="">Trang khách hàng</a></h1>
                                </div>
                                <div class="form-signup name-account m992">
                                    <p><strong>Xin chào, <a href="/account/addresses" style="color:#08bbb7;">
                                                <?php echo $se['hoten'] ?>
                                            </a>&nbsp;!</strong></p>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">

                                    <div class="my-account">
                                        <div class="dashboard">

                                            <div class="recent-orders">
                                                <div class="table-responsive tab-all" style="overflow-x:auto;">
                                                    <table class="table table-cart" id="my-orders-table">
                                                        <thead class="thead-default">
                                                            <tr>
                                                                <th>Đơn hàng</th>
                                                                <th>Ngày</th>
                                                                <th>Địa chỉ</th>
                                                                <th>Giá trị đơn hàng</th>
                                                                <th>Trạng thái thanh toán</th>
                                                                <th>TT vận chuyển</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>

                                                            <tr>
                                                                <td colspan="6">
                                                                    <p>Không có đơn hàng nào.</p>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                    </table>

                                                </div>

                                                <div
                                                    class="paginate-pages pull-right page-account text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div id="b" class="col-xs-12 col-sm-12 col-lg-3 col-right-account margin-top-20">
                                <div class="block-account">
                                    <div class="block-title-account">
                                        <h5>Tài khoản của tôi</h5>
                                    </div>
                                    <div class="block-content form-signup">
                                        <p>Tên tài khoản: <strong style="line-height: 20px;"> Nguyễn Thắng!</strong></p>
                                        <p><i class="fa fa-home font-some" aria-hidden="true"></i> <span>Địa chỉ:
                                            </span></p>
                                        <p><i class="fa fa-mobile font-some" aria-hidden="true"></i> <span>Điện thoại:
                                            </span> </p>
                                        <p><i class="fa fa-map-marker font-some" aria-hidden="true"></i> <span> Địa chỉ
                                                1: </span></p>
                                        <p><i class="fa fa-yelp font-some" aria-hidden="true"></i> <span> Công ty:
                                            </span></p>
                                        <p><i class="fa fa-plane font-some" aria-hidden="true"></i> <span> Quốc gia
                                                :</span></p>
                                        <p><i class="fa fa-code font-some" aria-hidden="true"></i> <span> Zip code:
                                            </span></p>
                                        <p style="margin-top:20px; background: none;"><a href="./addresses.php"
                                                class="btn btn-full btn-primary">Sổ địa chỉ (0)</a></p>


                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php
                                } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php
    // Gọi tệp footer.php
    include('footer.php');
    ?>
</body>

</html>