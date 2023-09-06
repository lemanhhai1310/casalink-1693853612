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
        <div class="uk-margin-medium-top" uk-slider="finite: true; sets: true">

            <div class="uk-position-relative">

                <div class="baiviet__slider-container-offset uk-slider-container-offset uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-20-m" uk-grid>
                        <?php for ($i=1;$i<=5;$i++): ?>
                            <li>
                                <div class="baiviet__card uk-card uk-padding-small uk-card-default uk-card-body">
                                    <div class="uk-flex uk-flex-column row-gap-24">
                                        <div class="uk-flex uk-flex-column row-gap-16">
                                            <div class="baiviet__card__coverImg uk-cover-container">
                                                <img src="images/noimage.jpg" alt="" uk-cover="">
                                                <canvas width="389" height="260"></canvas>
                                            </div>
                                            <h4 class="baiviet__card__title uk-margin-remove"><a href="">Những lưu ý khi học bảng phiên âm quốc tế IPA có thể bạn chưa biết?</a></h4>
                                            <div class="baiviet__card__time" style="--icon-datetime: url(images/calendar-interface-symbol-tool_1.png)">26/06/2023</div>
                                        </div>
                                        <div style="--icon-more: url(images/arrow-right_5_1.png)">
                                            <a class="baiviet__card__linkMore uk-button uk-button-text" href="#">Chi tiết bài viết</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a uk-icon="icon: arrow-left; ratio: 1.3" class="baiviet__icon baiviet__icon--previous uk-position-center-left uk-position-small" href="#" uk-slidenav-previous1 uk-slider-item="previous"></a>
                    <a uk-icon="icon: arrow-right; ratio: 1.3" class="baiviet__icon baiviet__icon--next uk-position-center-right uk-position-small" href="#" uk-slidenav-next1 uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a uk-icon="icon: arrow-left; ratio: 1.3" class="baiviet__icon baiviet__icon--previous uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous1 uk-slider-item="previous"></a>
                    <a uk-icon="icon: arrow-right; ratio: 1.3" class="baiviet__icon baiviet__icon--next uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next1 uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-hidden@s uk-dotnav uk-flex-center uk-margin uk-position-relative"></ul>

        </div>
    </div>
</div>
<!--/Tin tức và sự kiện-->
<?php require "template-parts/layouts/footer.php"; ?>