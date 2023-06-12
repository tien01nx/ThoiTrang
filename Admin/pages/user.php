<?php
session_start();
include('../../Men-Shop/control.php');
$getdata = new Data();
$select_account = $getdata->user();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./icofont/icofont.min.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../../Men-Shop/img/logoshop.png" />
    <link rel="icon" type="image/png" href="../../Men-Shop/img/logoshop.png" />
    <title>Quản lí người dùng</title>
    <!-- Material Icons quan trọng -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <!-- CSS Files quan trợn -->
    <link id="pagestyle" href="../css/material-dashboard.css?v=3.0.5" rel="stylesheet" />


    <link rel="stylesheet" type="text/css" href="../css/user.css">

</head>

<body>
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark">
        <div class="sidenav-header">
            <a class="navbar-brand m-0" href="">
                <img src="../../Men-Shop/img/logoshopnentrang.png" class="navbar-brand-img h-100" alt="main_logo" />
                <span class="ms-1 font-weight-bold text-white">Men's Shop</span>
            </a>
        </div>

        <hr class="horizontal light mt-0 mb-2" />
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="../pages/dashboard.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="../pages/user.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../pages/product.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Product</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="../pages/sign-in.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">login</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign In</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../pages/sign-up.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                            User
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">User</h6>
                </nav>
        </nav>
        <div class="user-table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên người dùng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Vai trò</th>
                        <th>Thao tác</th>

                    </tr>
                </thead>
                <?php
                foreach ($select_account as $se) {
                    ?>
                <tr>
                    <td>
                        <?php echo $se['id'] ?>
                    </td>
                    <td>
                        <?php echo $se['hoten'] ?>
                    </td>
                    <td>
                        <?php echo $se['sdt'] ?>
                    </td>
                    <td>
                        <?php echo $se['email'] ?>
                    </td>
                    <td>
                        <?php echo $se['password'] ?>
                    </td>
                    <td>
                        <?php
                            // Kiểm tra vai trò và hiển thị tên tương ứng
                            if ($se['role'] == 1) {
                                echo "Quản trị viên";
                            } else {
                                echo "Người dùng";
                            }
                            ?>
                    </td>
                    <td><a style="text-decoration: none; color: #000;"
                            href="../../Men-Shop/update_user.php?update=<?php echo $se['id'] ?>"> <button
                                class="btn-edit">Chỉnh
                                sửa</button></a>

                        <a style="text-decoration: none; color: #000;"
                            href="../../Men-Shop/delete_user.php?delete=<?php echo $se['id'] ?>"> <button
                                class="btn-delete">Xóa</button></a>
                    </td>
                </tr>
                <?php
                }
                ?>
                <a href="../../Men-Shop/register.php" style="float: right;   margin-right: 10px;" class="btn-add">Thêm
                    tài khoản</a>

            </table>
        </div>
    </main>

</body