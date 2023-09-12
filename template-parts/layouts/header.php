<?php $projectName = "Casalink"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Paytone+One&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="" style="background:<?= (isset($isLogin) && $isLogin) ? '#FFF' : '#FFFCF3' ?>">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<?php if (isset($isLogin) && $isLogin): ?>
    <div class="login uk-height-viewport uk-grid-collapse uk-grid-match" uk-grid>
        <div class="uk-width-expand uk-background-norepeat uk-background-top-left" data-src="images/Group-45445.png" uk-img>
            <div class="login__section uk-section-small">
                <div class="uk-container">
                    <div class="uk-grid uk-child-width-auto" uk-grid>
                        <div>
                            <div class="login__w522 uk-flex uk-flex-column row-gap-30 row-gap-60-m">
                                <div>
                                    <a href="." class="login__btnBackhome uk-button uk-button-large uk-button-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21.9998 11H4.41379L9.70679 5.70696C9.8023 5.61471 9.87848 5.50437 9.93089 5.38236C9.9833 5.26036 10.0109 5.12914 10.012 4.99636C10.0132 4.86358 9.98789 4.7319 9.93761 4.60901C9.88733 4.48611 9.81308 4.37446 9.71918 4.28056C9.62529 4.18667 9.51364 4.11242 9.39074 4.06214C9.26785 4.01186 9.13617 3.98655 9.00339 3.98771C8.87061 3.98886 8.73939 4.01645 8.61738 4.06886C8.49538 4.12127 8.38503 4.19745 8.29279 4.29296L1.29279 11.293C1.10532 11.4805 1 11.7348 1 12C1 12.2651 1.10532 12.5194 1.29279 12.707L8.29279 19.707C8.48139 19.8891 8.73399 19.9899 8.99619 19.9876C9.25838 19.9854 9.5092 19.8802 9.69461 19.6948C9.88001 19.5094 9.98518 19.2586 9.98746 18.9964C9.98974 18.7342 9.88895 18.4816 9.70679 18.293L4.41379 13H21.9998C22.265 13 22.5194 12.8946 22.7069 12.7071C22.8944 12.5195 22.9998 12.2652 22.9998 12C22.9998 11.7347 22.8944 11.4804 22.7069 11.2929C22.5194 11.1053 22.265 11 21.9998 11Z" fill="#14375F"/>
                                        </svg>
                                    </a>
                                </div>
                                <div>
<?php else: ?>
    <header class="header" uk-sticky>
        <div
            style="
                --header-top-left: url(images/Group-272.png);
                --header-top-right: url(images/Group-271.png);
            "
            class="header__top uk-navbar-container uk-visible@m">
            <div class="uk-container">
                <div uk-navbar>

                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav uk-visible@l">
                            <li class="phone"><a href="#">Hotline: (+84) 989 816 066</a></li>
                            <li class="email"><a href="#">Email: casalink.edu.vn</a></li>
                        </ul>

                    </div>

                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item">
                            <a href="login.php" class="header__top__btnLogin uk-button uk-button-primary uk-border-rounded">Đăng nhập</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <nav class="uk-navbar-container header__bottom">
            <div class="uk-container">
                <div uk-navbar>

                    <div class="uk-navbar-left">

                        <a class="uk-navbar-item uk-logo" href="."><img src="images/logo.png" alt=""></a>

                    </div>

                    <div class="uk-navbar-right">

                        <ul class="uk-navbar-nav uk-visible@m">
                            <li class="uk-active"><a href=".">Trang chủ</a></li>
                            <li>
                                <a href="about.php">Về Casalink <span uk-navbar-parent-icon></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="about.php">Về Casalink</a></li>
                                        <li><a href="tai_sao_chon.php">Tại sao nên chọn Casalink</a></li>
                                        <li><a href="quy_trinh_dang_ky.php">Quy trình đăng ký lớp học tại Casalink</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Khoá học <span uk-navbar-parent-icon></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="lich_khai_giang.php">Lịch khai giảng</a></li>
                                        <li><a href="khoa_hoc_con.php">Khoá học mầm non</a></li>
                                        <li><a href="khoa_hoc_con.php">Khoá học tiểu học</a></li>
                                        <li><a href="khoa_hoc_con.php">Khoá học trung học</a></li>
                                        <li><a href="khoa_hoc_online.php">Khoá học online</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Sản phẩm <span uk-navbar-parent-icon></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">Tủ sách Casalink</a></li>
                                        <li><a href="flash_card.php">Flashcard</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="test_online.php">test online</a></li>
                            <li><a href="tin_tuc_su_kien.php">Tin tức - Sự kiện</a></li>
                            <li>
                                <a href="#">Thư viện <span uk-navbar-parent-icon></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="tai_lieu.php">Tài liệu</a></li>
                                        <li><a href="#">Vinh danh học viên</a></li>
                                        <li><a href="#">Chia sẻ kiến thức</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </nav>
    </header>
    <main>
<?php endif; ?>
