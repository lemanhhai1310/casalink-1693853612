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

<!--Trung tâm anh ngữ Casalink-->
<div class="home__video uk-light">
    <div class="uk-position-relative">
        <div class="uk-container uk-container-expand-left uk-padding-remove-left">
            <div class="uk-grid-collapse uk-flex-middle" uk-grid>
                <div class="uk-width-auto@m">
                    <div class="uk-position-relative">
                        <img src="images/video/Group45444-3.png" alt="">
                        <a href="#modal-media-youtube" uk-toggle class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                <circle cx="30" cy="30" r="30" fill="white" fill-opacity="0.2"/>
                                <circle cx="30" cy="30" r="25" fill="white" fill-opacity="0.8"/>
                                <path d="M38.75 27.8349C40.4167 28.7972 40.4167 31.2028 38.75 32.1651L27.5 38.6603C25.8333 39.6225 23.75 38.4197 23.75 36.4952L23.75 23.5048C23.75 21.5803 25.8333 20.3775 27.5 21.3397L38.75 27.8349Z" fill="#273E8A"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-card uk-card-body">
                        <h2
                                class="uk-text-left baiviet__title"
                                style="--icon-title-bottom: url(images/tailieu/Frame_427322377-2.png); align-items: flex-start">
                            Trung tâm anh ngữ Casalink
                        </h2>
                        <p class="uk-margin-medium home__video__txt">CASALINK - là chuỗi hệ thống đào tạo Anh Ngữ cho trẻ em từ 4đến 14 tuổi, với triết lý giáo dục bắt nguồn từ tình yêu thương sâusắc dành cho trẻ nhỏ và phương pháp giảng dạy bắt nguồn từ sựtận tâm của những người thầy, những người làm giáo dục thực sự.Với tất cả tâm huyết ấy, CASALINK hy vọng sẽ trở thành nơi thứ 3,sau gia đình và trường học, nuôi dưỡng tâm hồn và phát triển tàinăng của con trẻ</p>
                        <div>
                            <a href="" class="home__sugia__btn uk-button uk-button-danger uk-button-large">Tìm hiểu thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-media-youtube" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA" width="1920" height="1080" uk-video uk-responsive></iframe>
    </div>
</div>
<!--/Trung tâm anh ngữ Casalink-->

<!--Hệ sinh thái sản phẩm tại Casalink-->
<?php require "template-parts/layouts/block_hesinhthai.php"; ?>
<!--/Hệ sinh thái sản phẩm tại Casalink-->

<!--ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->
<?php require "template-parts/layouts/block_dangkyhocthu.php"; ?>
<!--/ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->

<!--Tại sao? ba mẹ nên chọn Casalink-->
<?php require "template-parts/layouts/block_taisao.php"; ?>
<!--/Tại sao? ba mẹ nên chọn Casalink-->

<!--Những sứ giả truyền cảm hứng tại Casalink-->
<div class="uk-section-large home__sugia">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
            <div>
                <h2
                class="uk-text-left baiviet__title"
                style="--icon-title-bottom: url(images/Frame_427322377.png); align-items: flex-start">
                    <div>Những sứ giả truyền cảm hứng tại <span style="color: #E92629;">Casalink</span></div>
                </h2>
                <div class="uk-margin-medium home__sugia__txt">
                    Đội ngũ giáo viên là một thế mạnh của Casalink khi quy tụ những Giáo viên có năng lực và nhiều kinh nghiệm giảng dạy tốt nghiệp tại các trường đại học hàng đầu về giảng dạy tiếng Anh tại Việt Nam. Như một người lái đò thầm lặng, các thầy cô tại CASALink luôn sống hết mình và sống trọn đam mê với nghề giáo. Giá trị cốt lõi mà chúng tôi hướng đến trong công cuộc giáo dục, xây dựng con người đó chính là
                    <div>GIÁO VIÊN TÂM SÁNG – DẠY HỌC BẰNG TÌNH YÊU THƯƠNG.</div>
                </div>
                <div>
                    <a href="" class="home__sugia__btn uk-button uk-button-danger uk-button-large">Tìm hiểu thêm</a>
                </div>
            </div>
            <div>
                <img src="images/sugia/Group_45443-5.png" alt="">
            </div>
        </div>
    </div>
</div>
<!--/Những sứ giả truyền cảm hứng tại Casalink-->

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