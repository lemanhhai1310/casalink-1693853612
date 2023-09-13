<?php $data["title"] = "Test online"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Banner-->
<div
    style="
    --testonline-color: #B51618;
    --testonline-bgurl: url(images/testoln/Frame_427322587.png);
    "
    class="testoln__banner uk-flex uk-flex-middle uk-background-image@m uk-light">
    <div class="uk-section uk-width">
        <div class="uk-container">
            <h1 class="tintuc__banner__title">Thi thử tiếng anh <br> miễn phí</h1>
        </div>
    </div>
</div>
<!--/Banner-->

<div class="testoln__section uk-section uk-background-image@m">
    <div class="uk-container">
        <h2 class="uk-text-center testoln__title1"><span>Lựa chọn bài test</span></h2>
        <div class="uk-child-width-auto uk-flex-center uk-grid-80-m uk-grid-match uk-margin-large-top" uk-grid>
            <?php
            $data = array(
                array(
                    'img' => 'images/testoln/1.png',
                    'txt' => 'Tiếng anh <br/> mầm non',
                ),
                array(
                    'img' => 'images/testoln/2.png',
                    'txt' => 'Tiếng anh <br/> tiểu học',
                ),
                array(
                    'img' => 'images/testoln/3.png',
                    'txt' => 'Tiếng anh <br/> thi chất <br/> lượng cao',
                ),
                array(
                    'img' => 'images/testoln/4.png',
                    'txt' => 'Tiếng anh <br/> trung học',
                ),
            );
            foreach ($data as $v): ?>
            <div>
                <a href="#" class="uk-position-relative testoln__item uk-light">
                    <img class="testoln__item__img" src="<?= $v['img'] ?>" alt="">
                    <div class="uk-position-cover testoln__item__box">
                        <h3 class="testoln__item__title"><?= $v['txt'] ?></h3>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!--ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->
<?php require "template-parts/layouts/block_dangkyhocthu.php"; ?>
<!--/ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->

<!--Hệ sinh thái sản phẩm tại Casalink-->
<?php require "template-parts/layouts/block_hesinhthai.php"; ?>
<!--/Hệ sinh thái sản phẩm tại Casalink-->

<!--Danh sách khoá học-->
<?php require "template-parts/layouts/block_dskhoahoc.php"; ?>
<!--/Danh sách khoá học-->

<?php require "template-parts/layouts/footer.php"; ?>