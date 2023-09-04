<?php $data["title"] = "Giảng viên"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div uk-slideshow="animation: push; min-height: 300; max-height: 569">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slideshow-items">
            <li>
                <img src="images/0601_5_2.png" alt="" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-position-bottom-center uk-position-medium"></ul>

    </div>

</div>
<div class="uk-section">
    <div class="uk-container">
        <h1 class="uk-text-center giangvien__title uk-background-center-center uk-background-norepeat" data-src="images/Group_45445-2.png" uk-img>Đội ngũ giảng viên</h1>
        <p class="uk-margin-medium-top giangvien__desc">Như một người lái đò thầm lặng, các thầy cô tại <strong>CASALINK</strong> luôn sống hết mình và sống trọn đam mê với nghề giáo. Giá trị cốt lõi mà chúng tôi
            hướng đến trong công cuộc giáo dục, xây dựng con người đó chính là <span>GIÁO VIÊN TÂM SÁNG – DẠY HỌC BẰNG TÌNH YÊU THƯƠNG.</span></p>
        <div class="uk-child-width-1-3@m uk-grid-40-m uk-grid-small uk-margin-medium-top" uk-grid>
            <?php for ($i=1;$i<=5;$i++): ?>
            <div>
                <div class="giangvien__cover uk-cover-container">
                    <img src="images/noimage.jpg" alt="" uk-cover="">
                    <canvas width="400" height="300"></canvas>
                    <div class="giangvien__box uk-position-bottom-left uk-position-small" style="width: 281px;height: 71px;" data-src="images/Group.png" uk-img>
                        <div>Cô Mai Anh</div>
                        <div>Giảng viên Casalink</div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>