<?php
include('control.php'); //chèn trang control vào news
$getdata = new Data(); // Gọi class data
$select = $getdata->product(); //Gọi function gắn bằng 1 biến
?>
<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="template/css/header.css">
    <link rel="stylesheet" href="template/css/home.css">
    <link rel="stylesheet" href="template/css/main.css">
    <link rel="stylesheet" href="template/css/footer.css">
    <link rel="icon" href="img/logoshop.png" type="image/gif">
    <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/fontawesome.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/brands.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/solid.css">
    <link rel="stylesheet" href="./template/css/dangxuat.css">

    <script src="https://kit.fontawesome.com/f03f52505a.js" crossorigin="anonymous"></script>
    <title>Trang chủ</title>
</head>

<body>

    <?php
    // Gọi tệp header.php
    include('header_trangchu.php');
    ?>

    <section class="box-element">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="img/banner/02.jpg" class="d-block w-100 banner-img" alt="...">
                    <div class="slide-content-box">
                        <h1 class="slide-title">FASHION FOR MEN</h1>
                        <p>Sản phẩm của chúng tôi sẽ giúp cho bạn có được vẻ ngoài mạnh mẽ và lịch lãm. </p>
                        <div><a href="shirt.php" class="btn-in-slide">Khám Phá</a></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/banner/banner3.jpg" class="d-block w-100 banner-img" alt="...">
                    <div class="slide-content-box">
                        <h1 class="slide-title">INTERESTING BLOG</h1>
                        <p>Luôn tổng hợp những bài viết hay và hữu ích về thời trang. Giúp bạn có được nhiều lựa chọn
                            trong cách chọn đò.
                        </p>
                        <div><a href="blog.php" class="btn-in-slide">Khám Phá</a></div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>


    <main>
        <div class="container container-main">
            <div class="row list-category box-element">
                <div class="col-lg-3 col-md-6 col-sm-6 item-cate">
                    <div class="about-picture">
                        <a href="shirt.php"><img class="img-cate" src="img/category/1.png" alt=""></a>
                        <a href="shirt.php">
                            <div class="picture-title">Áo</div>
                        </a>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 item-cate">
                    <div class="about-picture">
                        <a href="pant.php"><img class="img-cate" src="img/category/image2.png" alt=""></a>
                        <a href="pant.php">
                            <div class="picture-title">Quần</div>
                        </a>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 item-cate">
                    <div class="about-picture">
                        <a href="shoes.php"><img class="img-cate" src="img/category/img3.png" alt=""></a>
                        <a href="shoes.php">
                            <div class="picture-title">Giày</div>
                        </a>

                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 item-cate">
                    <div class="about-picture">
                        <a href="accessories.php"><img class="img-cate" src="img/category/img4.png" alt=""></a>
                        <a href="accessories.php">
                            <div class="picture-title">Phụ Kiện</div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="box-element">
                <div class="title-box mb-4 row">
                    <div class="col-lg-3 col-md-4 col-sm-12 title">
                        <h1>SẢN PHẨM MỚI</h1>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 product-list-cate">
                        <div>
                            <a href="./shirt.php"><span><i class="fas fa-tshirt"></i></span> Áo</a>|
                            <a href="./pant.php"><span><i class="fas fa-fire"></i></span> Quần</a>|
                            <a href="./shoes.php"><span></span><i class="fas fa-shoe-prints"></i> Giày</a>|
                            <a href="./accessories.php"><span><i class="fab fa-redhat"></i></span> Phụ Kiện</a>
                        </div>
                    </div>
                </div>
                <?php
                // Truy vấn để lấy 8 sản phẩm mới nhất từ cơ sở dữ liệu
                $sql = "SELECT * FROM product ORDER BY created_time DESC LIMIT 8";
                $result = mysqli_query($conn, $sql);

                // Kiểm tra và hiển thị sản phẩm
                if (mysqli_num_rows($result) > 0) {
                    ?>
                    <div class="owl-carousel owl-theme" id="owlCarouselProduct">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="item product-item">
                                <div class="card">
                                    <div class="card-img">
                                        <a href="detailProduct.php?id=<?php echo $se['id'] ?>"><img
                                                src="<?php echo $row['anh'] ?>" class="card-img-top" alt="..."></a>
                                        <div class="add-cart-box">
                                            <a href="detailProduct.php?id=<?php echo $se['id'] ?>">
                                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                                THÊM VÀO GIỎ HÀNG
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="./delete_product.php?id=<?php echo $se['id'] ?>"></a>
                                        <h5 class="card-title">
                                            <?php echo $row['tensp'] ?>
                                        </h5>
                                        <p class="card-text"> <span>
                                                <?php echo $row['gia'] ?>
                                            </span>₫</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                } else {
                    echo "Không có sản phẩm để hiển thị.";
                }
                ?>





                <div class="panner-adver box-element">
                    <img src="img/banner-adver.jpg" alt="">
                    <div class="text-adver font-text-2">
                        <p>Giảm 10% khi tổng hóa đơn <br> trên 3 triệu đồng</p>
                    </div>
                </div>
                <!-- Xu huong -->
                <div class="box-element">
                    <div class="title-box mb-4 row">
                        <div class="col-lg-3 col-md-4 col-sm-6 title">
                            <h1>XU HƯỚNG</h1>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 product-list-cate">
                            <div>
                                <a href=""><span><i class="fas fa-tshirt"></i></span> Áo</a>|
                                <a href=""><span><i class="fas fa-fire"></i></span> Quần</a>|
                                <a href=""><span></span><i class="fas fa-shoe-prints"></i> Giày</a>|
                                <a href=""><span><i class="fab fa-redhat"></i></span> Phụ Kiện</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 products">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                            <div class="product-item">

                                <div class="card" style="">
                                    <div class="card-img">
                                        <img src="img/shirt/shirt7.jpg" class="card-img-top" alt="...">
                                        <div class="add-cart-box">
                                            <a href="">
                                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                                THÊM VÀO GIỎ HÀNG
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sale"><span>Sale !</span></div>
                                    <div class="new"><span>New !</span></div>
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Áo Jeans MIIX Collective co</h5>
                                        </a>
                                        <p class="card-text-sale"><strike>700.000 ₫</strike></p>
                                        <p class="card-text">350.000 ₫</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                            <div class="product-item">

                                <div class="card" style="">
                                    <div class="card-img">
                                        <img src="img/shirt/short8.jpg" class="card-img-top" alt="...">
                                        <div class="add-cart-box">
                                            <a href="">
                                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                                THÊM VÀO GIỎ HÀNG
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Áo Thun Nam Unisex Cotton</h5>
                                        </a>
                                        <p class="card-text">300.000 ₫</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                            <div class="product-item">

                                <div class="card" style="">
                                    <div class="card-img">
                                        <img src="img/shirt/shirt.jpg" class="card-img-top" alt="...">
                                        <div class="add-cart-box">
                                            <a href="">
                                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                                THÊM VÀO GIỎ HÀNG
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Áo Thun Nam Dài Tay Julido</h5>
                                        </a>
                                        <p class="card-text">200.000 ₫</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                            <div class="product-item">

                                <div class="card" style="">
                                    <div class="card-img">
                                        <img src="img/shirt/shirt2.jpg" class="card-img-top" alt="...">
                                        <div class="add-cart-box">
                                            <a href="">
                                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                                THÊM VÀO GIỎ HÀNG
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Áo Thun Nam Unisex Phông</h5>
                                        </a>
                                        <p class="card-text">200.000 ₫</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                            <div class="product-item">

                                <div class="card" style="">
                                    <div class="card-img">
                                        <img src="img/shirt/shirt3.jpg" class="card-img-top" alt="...">
                                        <div class="add-cart-box">
                                            <a href="">
                                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                                THÊM VÀO GIỎ HÀNG
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Áo Thun Nam Trơn Cổ Tròn</h5>
                                        </a>
                                        <p class="card-text">100.000 ₫</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                            <div class="product-item">

                                <div class="card" style="">
                                    <div class="card-img">
                                        <img src="img/shirt/shirt4.jpg" class="card-img-top" alt="...">
                                        <div class="add-cart-box">
                                            <a href="">
                                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                                THÊM VÀO GIỎ HÀNG
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Áo Thun Nam Thể Thao</h5>
                                        </a>
                                        <p class="card-text">200.000 ₫</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                            <div class="product-item">

                                <div class="card" style="">
                                    <div class="card-img">
                                        <img src="img/shirt/shirt5.jpg" class="card-img-top" alt="...">
                                        <div class="add-cart-box">
                                            <a href="">
                                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                                THÊM VÀO GIỎ HÀNG
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Blentino Áo Thun Nam Polo</h5>
                                        </a>
                                        <p class="card-text">150.000 ₫</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 item">
                            <div class="product-item">

                                <div class="card" style="">
                                    <div class="card-img">
                                        <img src="img/shirt/shirt6.jpg" class="card-img-top" alt="...">
                                        <div class="add-cart-box">
                                            <a href="">
                                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                                THÊM VÀO GIỎ HÀNG
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Áo Len Collective co</h5>
                                        </a>
                                        <p class="card-text">350.000 ₫</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="box-btn font-text-2 mb-3">
                        <a href="shirt.php" class=" btn-viewmore" class="btn-blog-detail">Xem thêm</a>
                    </div>
                </div>

                <!-- Tin Tưc -->

                <div class="box-element">
                    <div class="title-box mb-4">
                        <h1>TIN TỨC MỚI</h1>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-item">
                                <div class="card" style="">
                                    <img src="img/New folder/new1.png" class="card-img-top" alt="...">
                                    <div class="card-body card-news">
                                        <h5 class="card-title">Hướng dẫn phối đồ</h5>
                                        <div class="infor-news">
                                            <span><i class="fas fa-calendar-day"></i> 21/01/2021</span>
                                            <span><i class="fas fa-user"></i> Minh Nguyễn</span> |
                                            <span>2 bình luận</span>
                                            <p class="content-card">Nếu như quần jeans thường hợp hơn với giới trẻ, quần
                                                vải
                                                âu phù hợp với không gian nghiêm túc, chốn công sở thì quần kaki lại là
                                                chiếc quần đa...
                                            </p>
                                            <a href="" class="btn-blog-detail">Chi tiết >></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-item">
                                <div class="card" style="">
                                    <img src="img/New folder/new2.png" class="card-img-top" alt="...">
                                    <div class="card-body card-news">
                                        <h5 class="card-title">Hướng dẫn chọn size quần áo</h5>
                                        <div class="infor-news">
                                            <span><i class="fas fa-calendar-day"></i> 21/01/2021</span>
                                            <span><i class="fas fa-user"></i> Minh Nguyễn</span> |
                                            <span>2 bình luận</span>
                                            <p class="content-card">Trang phục sẽ tôn lên vóc dáng con người, vì vậy,
                                                quan
                                                trọng hơn cả là bạn phải chọn được trang phục phù hợp với form người
                                                mình..
                                            </p>
                                            <a href="" class="btn-blog-detail">Chi tiết >></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="product-item">
                                <div class="card" style="">
                                    <img src="img/New folder/new3.png" class="card-img-top" alt="...">
                                    <div class="card-body card-news">
                                        <h5 class="card-title">Cách chọn áo sơ mi</h5>
                                        <div class="infor-news">
                                            <span><i class="fas fa-calendar-day"></i> 21/01/2021</span>
                                            <span><i class="fas fa-user"></i> Minh Nguyễn</span> |
                                            <span>2 bình luận</span>
                                            <p class="content-card">Với kiểu dáng rộng rãi và đặc biệt ít nhăn, một
                                                chiếc
                                                quần dáng suông đem đến ấn tượng phóng khoáng, khỏe mạnh và thậm chí hơi
                                                bụi
                                                bặm với vài sợi vải tước ở phần gấu...
                                            </p>
                                            <a href="" class="btn-blog-detail">Chi tiết >></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-btn font-text-2">
                        <a href="blog.php" class=" btn-viewmore">Xem thêm</a>
                    </div>
                </div>
            </div>

    </main>
    <?php
    // Gọi tệp footer.php
    include('footer.php');
    ?>
    <script>
        $(document).ready(function () {
            $('#owlCarouselProduct').owlCarousel({
                autoplay: true,
                autoplayTimeout: 2000,
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        })
    </script>
</body>

</html>