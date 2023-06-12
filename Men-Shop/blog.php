<?php
include('control.php'); //chèn trang control vào news
session_start();
$_SESSION['user_id'];
$getdata = new Data(); // Gọi class data
$select_user = $getdata->select_user_id($_SESSION['user_id']);

$select = $getdata->blog(); //Gọi function gắn bằng 1 biến
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="template/css/header.css">
    <link rel="stylesheet" href="template/css/main.css">
    <link rel="stylesheet" href="template/css/footer.css">
    <link rel="stylesheet" href="template/css/blog.css">
    <link rel="stylesheet" href="template/css/generalblog.css">
    <link rel="icon" href="img/logoshop.png" type="image/gif">
    <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/fontawesome.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/brands.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/solid.css">
    <link rel="stylesheet" href="./template/css/dangxuat.css">
    <title>Tin Viết</title>
</head>

<body>
    <?php
    // Gọi tệp footer.php
    include('header.php');
    ?>
    <main>
        <div class="container">
            <div class="banner-current-page box-element">
                <img src="img/banner-current-page.png" alt="">
                <div class="current-page-box">
                    <h3 class="title-banner-page">Tin Tức</h3>
                    <div class="current-page-box-link">
                        <a href="trangchu.php" class="link-previous-page">Trang chủ ></a>
                        <span class="current-page"> Tin Tức</span>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-9 col-md-9 col-sm-12 box-element">
                    <?php
                    foreach ($select as $se) { // khi thực hiện lấy dữ liệu trong data cần sử dụng?>
                        <div class="card card-blog">

                            <div class="card-body blog-content">
                                <img src="<?php echo $se['image'] ?>" alt="...">
                                <h3 class="card-title"><a href="./detailblog.php?id=<?php echo $se['id'] ?>">
                                        <?php echo $se['title'] ?>
                                    </a>
                                </h3>
                                <div class="card-infor-area">
                                    <span><i class="fas fa-calendar-week"></i>
                                        <?php echo $se['created_time'] ?>
                                    </span>
                                    <?php
                                    foreach ($select_user as $su) { // khi thực hiện lấy dữ liệu trong data cần sử dụng?>
                                        <span><i class="fas fa-user"></i>
                                            <?php echo $su['hoten'] ?>
                                        </span>
                                        <?php
                                    } ?>
                                </div>
                                <p class="card-text">
                                    <?php echo $se['n_content'] ?>
                                </p>
                                <a href="./detailblog.php?id=<?php echo $se['id'] ?>" class="btn-blog-viewdetail">Chi tiết
                                    >></a>
                            </div>

                        </div>
                        <?php
                    } ?>


                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 box-element">

                    <div class="blog-sidebar-content">
                        <form action="">
                            <div class="form-group blog-form-search">
                                <input type="text" placeholder="Tìm kiếm bài viết" class="form-control">
                                <button type="submit" class="btn-submit-search"><span><i
                                            class="fas fa-search"></i></span></button>
                            </div>
                        </form>



                        <div class="post-popular">
                            <h3 class="heading-blog">Tin Phổ Biến</h3>
                            <div class="post-popular-card">
                                <div class="post-img">
                                    <img src="img/blog/imgblog3.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <h5><a href="">Cách chọn áo sơ mi cho phù hợp</a></h5>
                                    <div class="post-time"><span><i class="fas fa-calendar-alt"></i></span> 25/02/2021
                                    </div>

                                </div>
                            </div>
                            <div class="post-popular-card">
                                <div class="post-img">
                                    <img src="img/blog/kaki.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <h5><a href="">Đôi điều về Quần Kaki</a></h5>
                                    <div class="post-time"><span><i class="fas fa-calendar-alt"></i></span> 28/01/2021
                                    </div>

                                </div>
                            </div>
                            <div class="post-popular-card">
                                <div class="post-img">
                                    <img src="img/blog/short_2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <h5><a href="">Bí quyết lựa chọn short kaki nam</a></h5>
                                    <div class="post-time"><span><i class="fas fa-calendar-alt"></i></span> 01/01/2021
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </main>
    <?php
    // Gọi tệp footer.php
    include('footer.php');
    ?>
</body>

</html>