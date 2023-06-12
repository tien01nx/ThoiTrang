<?php
include('control.php'); //chèn trang control vào news
session_start();
$getdata = new Data(); // Gọi class data
ob_start(); // Bắt đầu đệm đầu ra
$select = $getdata->select_cart_products();



$total = 0;
// Lặp qua các sản phẩm và tính toán tổng tạm tính
foreach ($select as $sp) {
    $productId = $sp['id'];
    // Lấy giá trị của sản phẩm từ CSDL
    $cartData = $getdata->cart($productId);
    if (mysqli_num_rows($cartData) > 0) {
        $cartItem = mysqli_fetch_assoc($cartData);
        $price = intval($sp['gia']);
        $total += $price;
    }
}


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
    <link rel="stylesheet" href="template/css/cart.css">
    <link rel="icon" href="img/logoshop.png" type="image/gif">
    <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/fontawesome.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/brands.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/solid.css">
    <link rel="stylesheet" href="./template/css/dangxuat.css">
    <title>Giỏ Hàng</title>
    <style>
    .btn-order {
        background-color: #4CAF50;
        /* Màu nền của nút */
        color: white;
        /* Màu chữ trên nút */
        padding: 10px 20px;
        /* Kích thước lề và đệm của nút */
        border: none;
        /* Loại bỏ viền */
        border-radius: 4px;
        /* Bo tròn các góc của nút */
        cursor: pointer;
        /* Hiển thị con trỏ tương tác khi di chuột vào nút */
    }

    .btn-order:hover {
        background-color: #45a049;
        /* Màu nền khi di chuột vào nút */
    }

    .btn-delete-link {
        text-decoration: none;
    }

    .btn-delete {
        background-color: #e74c3c;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-delete:hover {
        background-color: #c0392b;
    }
    </style>
</head>

<body>

    <?php
    // Gọi tệp header.php
    include('header.php');
    ?>
    <main>
        <div class="container box-element">
            <div class="banner-current-page box-element">
                <img src="img/banner-current-page.png" alt="">
                <div class="current-page-box">
                    <h3 class="title-banner-page">Giỏ Hàng</h3>
                    <div class="current-page-box-link">
                        <a href="trangchu.php" class="link-previous-page">Trang chủ ></a>
                        <span class="current-page"> Giỏ Hàng</span>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class=" col-lg-8 col-md-12">

                    <div class="product-list">

                        <?php
                        $selectedProductIds = []; // Mảng lưu trữ ID của sản phẩm đã được hiển thị
                        foreach ($select as $sp) {
                            $productId = $sp['id'];

                            if (!in_array($productId, $selectedProductIds)) {
                                $selectedProductIds[] = $productId; // Thêm ID của sản phẩm vào mảng lưu trữ
                        
                                $cartData = $getdata->cartByProductId($productId);

                                if (mysqli_num_rows($cartData) > 0) {
                                    while ($cartItem = mysqli_fetch_assoc($cartData)) {
                                        ?>
                        <div class="card-product-item">
                            <div class="product-img">
                                <img src="<?php echo $sp['anh'] ?>" alt="">
                            </div>
                            <div class="cart-product-content">
                                <div class="infor-product-area">
                                    <p class="name-product">
                                        <?php echo $sp['tensp'] ?>
                                    </p>
                                    <p>Màu Sắc:
                                        <?php echo $cartItem['mausac'] ?>
                                    </p>
                                    <p>Kích Cỡ:
                                        <?php echo $cartItem['kichco'] ?>
                                    </p>
                                    <a class="btn-delete-link"
                                        href="delete_cart.php?delete=<?php echo $cartItem['id'] ?>">
                                        <button class="btn-delete">Xóa</button>
                                    </a>
                                </div>
                                <div class="product-price">
                                    <span id="price">
                                        <?php echo $cartItem['price'] ?>
                                    </span>₫
                                </div>
                                <div class="product-quantity quantity-md">
                                    <button class="btn-minus">-</button>
                                    <input class="inputQuantity" name="txtqty" type="text"
                                        value=" <?php echo $cartItem['qty'] ?>">
                                    <button class="btn-plus">+</button>
                                </div>
                            </div>
                        </div>
                        <?php
                                    }
                                }
                            }
                        }
                        ?>
                    </div>

                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="cart-total-price-area">
                        <div class="price-item">
                            <span class="title-price">Tổng</span>
                            <span class="total-price" id="totalCard">
                                <?php echo number_format($total) ?> ₫
                            </span>
                        </div>


                    </div>
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $cartItem['id']; ?>">
                        <input type="hidden" name="qty" value="<?php echo $cartItem['qty']; ?>">
                        <input type="hidden" name="price" value="<?php echo $cartItem['price']; ?>">
                        <button type="submit" class="btn-order">Thanh Toán</button>
                    </form>

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        // Get the posted data
                        $id = $_POST['id'];
                        $qty = $_POST['qty'];
                        $price = $_POST['price'];

                        // Update quantity and price in database
                        $result = $getdata->update_cart($id, $qty, $price);

                        if ($result) {
                            // Redirect back to the cart page
                            header("Location:order.php");
                        } else {
                            echo "Error updating record: " . mysqli_error($conn);
                        }
                    }
                    ?>

                    <?php
                    ob_end_flush(); // Kết thúc đệm đầu ra
                    ?>
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