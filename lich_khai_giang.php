<?php $data["title"] = "Lịch khai giảng"; ?>
<?php $bodyClass = '' ?>
<?php $isLichkhaigiang = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Danh sách khoá học-->
<?php require "template-parts/layouts/block_dskhoahoc.php"; ?>
<!--/Danh sách khoá học-->

<!--ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->
<?php require "template-parts/layouts/block_dangkyhocthu.php"; ?>
<!--/ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->

<!--Hệ sinh thái sản phẩm tại Casalink-->
<?php require "template-parts/layouts/block_hesinhthai.php"; ?>
<!--/Hệ sinh thái sản phẩm tại Casalink-->

<!--block1-->
<?php require "template-parts/layouts/block1.php"; ?>
<!--/block1-->
<?php require "template-parts/layouts/footer.php"; ?>