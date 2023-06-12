<?php
include('control.php'); //chèn trang control vào news
session_start();
$getdata = new Data(); // Gọi class data
$select_cart = $getdata->cart();
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
    <link rel="stylesheet" href="template/css/order.css">
    <link rel="icon" href="img/logoshop.png" type="image/gif">
    <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/fontawesome.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/brands.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.2-web/css/solid.css">
    <link rel="stylesheet" href="./template/css/dangxuat.css">
    <title>Thanh toán</title>
    <style>
    .address-form .btn-add-cart {
        /* Các thuộc tính CSS của nút "Thêm địa chỉ" trong form */
        background-color: #f2f2f2;
        color: #333;
        border: 1px solid #ccc;
        padding: 10px 20px;

    }

    .btn-add-cart:hover {
        background-color: #45a049;
    }

    .btn-add-cart:focus {
        outline: none;
    }
    </style>
</head>

<body>
    <section class="model_checkout">
        <!-- Modal -->
        <div class="modal  fade " id="confirmOrder" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-checkout">
                <div class="modal-content">

                    <div class="modal-body ">
                        <div class="success-icon"><i class="fas fa-check-circle"></i></div>
                        <p class="text-sucess">Đặt hàng thành công</p>
                        <div class="detail-order">
                            <div class="check-out">
                                <span>Mã đơn hàng:</span>
                                <span>11234</span>
                            </div>
                            <div class="check-out">
                                <span>Khách hàng:</span>
                                <span>Nguyễn Ngọc Vũ</span>
                            </div>
                            <div class="check-out">
                                <span>Địa chỉ: </span>
                                <span>12 Trần Thái Tông, Cầu Giấy, Hà Nội</span>
                            </div class="check-out">
                            <div class="check-out">
                                <span>Số điện thoại: </span>
                                <span>0966247911</span>
                            </div>
                            <div class="check-out">
                                <span>Hình thức thanh toán: </span>
                                <span>Thanh toán khi nhận hàng</span>
                            </div>
                            <p class="text-order">Đơn hàng</p>
                            <div class="check-out">
                                <span class="name-product">01 x Áo khoác dài</span>
                                <span>200.000 đ</span>
                            </div>
                            <div class="check-out">
                                <span class="name-product">01 x Áo khoác dài</span>
                                <span>200.000 đ</span>

                            </div>
                            <div class="total-order">
                                <span>Tổng tiền</span>
                                <span>400.000 đ</span>
                            </div>
                            <div class="btn-return">
                                <a href="trangchu.php"><span><i class="fas fa-long-arrow-alt-left"></i></span> Quay lại
                                    trang chủ</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php
    // Gọi tệp header.php
    include('header.php');
    ?>
    <main>
        <div class="container box-element">
            <div class="banner-current-page box-element">
                <img src="img/banner-current-page.png" alt="">
                <div class="current-page-box">
                    <h3 class="title-banner-page">Thanh Toán</h3>
                    <div class="current-page-box-link">
                        <a href="trangchu.php" class="link-previous-page">Trang chủ ></a>
                        <a href="cart.php" class="link-previous-page">Giỏ Hàng ></a>
                        <span class="current-page"> Thanh Toán</span>
                    </div>
                </div>
            </div>
            <h2 class="order-title">1. ĐỊA CHỈ THANH TOÁN</h2>
            <div class="row">
                <div class=" col-lg-7 col-md-12">
                    <div class="infor-order-area">
                        <form class="address-form" method="POST">
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Họ tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtname" id="colFormLabel"
                                        placeholder="Nhập họ tên">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Điện thoại</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="txtphone" id="colFormLabel"
                                        placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Địa chỉ</label>
                                <div class="col-sm-9">
                                    <textarea name="txtaddress" id="" class="form-control" cols="30" rows="4"
                                        placeholder="Ghi rõ địa chỉ nhận hàng"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Ghi chú</label>
                                <div class="col-sm-9">
                                    <textarea name="txtnote" id="" class="form-control" cols="30" rows="4"
                                        placeholder="Ghi chú"></textarea>
                                </div>
                            </div>
                            <button class="btn-add-cart" type="submit" name="addToOrder">Thêm địa chỉ</button>

                        </form>
                        <?php
                        $user_id = $_SESSION['user_id']; // Gán giá trị cho user_id từ phiên đăng nhập
                        
                        if (isset($_POST['addToOrder'])) {
                            // Lấy dữ liệu từ form
                            $name = $_POST['txtname'];
                            $phone = $_POST['txtphone'];
                            $address = $_POST['txtaddress'];
                            $note = $_POST['txtnote'];
                            $created_time = date('Y-m-d ');
                            $last_update = date('Y-m-d ');
                            $account_id = $_SESSION['user_id'];
                            // Thêm sản phẩm vào giỏ hàng với biến giá mới
                            $inserted = $getdata->add_order($account_id, $name, $phone, $address, $note, $created_time, $last_update);


                            // Kiểm tra xem sản phẩm đã được thêm thành công hay chưa
                            if ($inserted) {
                                // Lưu thông tin bảng "bill" thành công
                                $bill_id = mysqli_insert_id($conn); // Lấy ID của bản ghi vừa được tạo
                        
                                // Cập nhật cột "bill_id" trong bảng "cart"
                                $updated = $getdata->update_cart_bill_id($bill_id);
                                if ($updated) {
                                    // Cập nhật thành công, chuyển hướng đến trang khác hoặc hiển thị thông báo thành công
                                } else {
                                    // Cập nhật thất bại, hiển thị thông báo lỗi hoặc xử lý theo ý định của bạn
                                }
                                // Thêm sản phẩm thành công, chuyển hướng đến trang khác
                                header("Location:order.php");
                                exit();
                            } else {
                                // Thêm sản phẩm thất bại, hiển thị thông báo
                                echo "Thanh toán thất bại. Vui lòng thử lại.";
                            }
                        }



                        ?>

                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="infor-bill-area">
                        <?php

                        foreach ($select_cart as $sc) { // khi thực hiện lấy dữ liệu trong data cần sử dụng
                            $count_cart = count($sc);
                            ?>

                        <div class="infor-bill-flex infor-bill-item">
                            <span>Đơn hàng (
                                <?php echo $count_cart ?> sản phẩm)
                            </span>
                            <a href="cart.php">Sửa</a>
                        </div>
                        <div class="infor-bill-item ">
                            <div class="order-product-item infor-bill-flex">
                                <span>1x</span>
                                <span>Aó khoác dài-đen-M</span>
                                <span>200.000đ</span>
                            </div>
                            <div class="order-product-item infor-bill-flex">
                                <span>1x</span>
                                <span>Aó khoác dài-đen-M</span>
                                <span>200.000đ</span>
                            </div>
                        </div>
                        <div class="infor-bill-item">
                            <div class="infor-bill-flex">
                                <span>Tạm Tính</span>
                                <span>400.000 đ</span>
                            </div>
                            <div class="infor-bill-flex">
                                <span>Giảm giá</span>
                                <input type="text" name="discount" placeholder="Nhập giá trị giảm giá"
                                    onblur="addCurrencySymbol(this)">
                            </div>
                            <div class="infor-bill-flex">
                                <span>Phí Vận Chuyển</span>
                                <input type="text" name="shipping_fee" placeholder="Nhập giá trị phí vận chuyển"
                                    onblur="addCurrencySymbol(this)">
                            </div>

                            <script>
                            function addCurrencySymbol(input) {
                                // Lấy giá trị đã nhập
                                var value = input.value;

                                // Kiểm tra nếu giá trị đã nhập không rỗng
                                if (value !== '') {
                                    // Xóa ký tự ',' nếu có
                                    value = value.replace(',', '');

                                    // Chuyển đổi giá trị thành số và kiểm tra nếu là một số hợp lệ
                                    var numberValue = parseFloat(value);
                                    if (!isNaN(numberValue)) {
                                        // Định dạng số thành kiểu hàng nghìn
                                        var formattedValue = numberValue.toFixed(0).replace(/(\d)(?=(\d{3})+$)/g,
                                            '$1.');

                                        // Thêm '.000' vào cuối giá trị đã định dạng
                                        formattedValue += '.000';

                                        // Thêm 'đ' vào cuối giá trị đã định dạng
                                        formattedValue += 'đ';

                                        // Gán giá trị đã thêm định dạng vào lại vào ô input
                                        input.value = formattedValue;
                                    }
                                }
                            }
                            </script>
                        </div>
                        <div class="infor-bill-flex infor-bill-item total-price-bill">
                            <span>Thành Tiền</span>
                            <span>400.000 đ</span>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

            </div>
            <div class="btn-order">
                <a href="" data-toggle="modal" data-target="#confirmOrder">Đặt Mua</a>
            </div>
        </div>





    </main>
    <?php
    // Gọi tệp footer.php
    include('footer.php');
    ?>
</body>

</html>