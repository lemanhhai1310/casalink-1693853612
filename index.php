<?php $data["title"] = "Home page 2"; ?>
<?php $bodyClass = '' ?>
<?php $isHome = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div uk-slideshow="animation: push; min-height: 300; max-height: 736">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slideshow-items">
            <li>
                <img src="images/Rectangle-140528.png" alt="" uk-cover>
            </li>
            <li>
                <img src="images/dark.jpg" alt="" uk-cover>
            </li>
            <li>
                <img src="images/light.jpg" alt="" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-position-bottom-center uk-position-medium"></ul>

    </div>

</div>

<!--Danh sách khoá học-->
<?php require "template-parts/layouts/block_dskhoahoc.php"; ?>
<!--/Danh sách khoá học-->

<!--Hệ sinh thái sản phẩm tại Casalink-->
<?php require "template-parts/layouts/block_hesinhthai.php"; ?>
<!--/Hệ sinh thái sản phẩm tại Casalink-->

<!--ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->
<?php require "template-parts/layouts/block_dangkyhocthu.php"; ?>
<!--/ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->

<!--Tại sao? ba mẹ nên chọn Casalink-->
<?php require "template-parts/layouts/block_taisao.php"; ?>
<!--/Tại sao? ba mẹ nên chọn Casalink-->

<!--block1-->
<?php require "template-parts/layouts/block1.php"; ?>
<!--/block1-->

<!--Môi trường học tập tràn đầy tình yêu thương tại Casalink-->
<div class="uk-section home__hinhanh" style="--bg-hinhanh: url(images/Rectangle_140604.png)">
    <div class="uk-position-relative">
        <div class="uk-container">
            <h2 class="uk-text-center baiviet__title" style="--icon-title-bottom: url(images/Frame_427322377.png)">Môi trường học tập tràn đầy tình yêu thương tại Casalink</h2>
            <?php require "template-parts/layouts/galery.php"; ?>
        </div>
    </div>
</div>
<!--/Môi trường học tập tràn đầy tình yêu thương tại Casalink-->

<!--Tin tức và sự kiện-->
<div class="uk-section">
    <div class="uk-container">
        <h2 class="uk-text-center baiviet__title" style="--icon-title-bottom: url(images/Frame_427322377.png)">Tin tức và sự kiện</h2>
        <div class="uk-margin-medium-top">
            <?php require "template-parts/layouts/block_tintucslider.php"; ?>
        </div>
    </div>
</div>
<!--/Tin tức và sự kiện-->
<?php require "template-parts/layouts/footer.php"; ?>