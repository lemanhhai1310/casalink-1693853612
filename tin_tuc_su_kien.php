<?php $data["title"] = "Tin tức sự kiện"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>

<div
    style="
    --tintuc-1: url(images/tintucsukien/Frame_55.png);
    --tintuc-2: url(images/tintucsukien/pattern_1.png);
    --tintuc-3: url(images/tintucsukien/Frame_23.png);
    --tintuc-4: url(images/tintucsukien/image_1-3.png);
    --tintuc-5: url(images/tintucsukien/pngegg_1_2.png);
    --tintuc-6: url(images/tintucsukien/Frame_30.png);
    --tintuc-7: url(images/tintucsukien/0601_4_1_1.png);
    "
    class="tintuc__banner uk-background-image@m uk-light uk-flex uk-flex-middle">
    <div class="uk-section uk-width">
        <div class="uk-container">
            <h1 class="tintuc__banner__title">Thư viện tài liệu <br> Casalink</h1>
        </div>
    </div>
</div>

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <h2 class="uk-text-center baiviet__title" style="--icon-title-bottom: url(images/Frame_427322377.png); align-items: flex-start;">Tin tức và sự kiện</h2>
            </div>
            <div class="uk-width-auto@m">
                <div class="uk-grid-small uk-grid-40-m" uk-grid>
                    <div class="uk-width-expand">
                        <?php require "template-parts/layouts/blockSearch.php"; ?>
                    </div>
                    <div class="uk-width-auto">
                        <div class="uk-inline">
                            <span class="tintuc__formSearch__icon uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                            <input id = "datepicker-13" class="uk-input tintuc__formSearch__datetime" type="text" value="Bây giờ" aria-label="Not clickable icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="tintuc__accordion uk-margin-large-top" uk-accordion>
            <?php for ($i=1;$i<=4;$i++): ?>
            <li class="tintuc__accordion__li <?= ($i==1)? 'uk-open' : '' ?>">
                <a class="uk-accordion-title tintuc__accordion__title" href="#">Tháng <?= 8 - $i ?>, 2023</a>
                <div class="uk-accordion-content tintuc__accordion__content">
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-20-m" uk-grid>
                        <div>
                            <?php require "template-parts/layouts/tintuc_card.php"; ?>
                        </div>
                        <div>
                            <?php require "template-parts/layouts/tintuc_card.php"; ?>
                        </div>
                        <div>
                            <?php require "template-parts/layouts/tintuc_card.php"; ?>
                        </div>
                    </div>
                </div>
            </li>
            <?php endfor; ?>
        </ul>
    </div>
</div>

<!--ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->
<?php require "template-parts/layouts/block_dangkyhocthu.php"; ?>
<!--/ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->

<?php require "template-parts/layouts/footer.php"; ?>