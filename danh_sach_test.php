<?php $data["title"] = "Danh sách test"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div
    style="
    --dstest-bg1: url(images/dstest/Vector-2.png);
    --dstest-bg2: url(images/dstest/OBJECTS-2.png);
    --dstest-bg3: url(images/dstest/pngegg_1_3-2.png);
    --dstest-bg: url(images/dstest/P.png);
    "
    class="uk-section dstest__banner uk-background-image@m"></div>
<div class="uk-section">
    <div class="uk-container">
        <h1 class="dstest__title"><span>test Tiếng anh tiểu học</span></h1>
        <div class="uk-margin-large uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-40-m" uk-grid>
            <?php for ($i=1;$i<=8;$i++): ?>
            <div>
                <div class="dstest__card uk-card uk-card-body uk-card-default">
                    <h3 class="dstest__card__title">Bài test Casalink - Số 1</h3>
                    <div class="uk-margin dstest__card__txt">Vocabulary + Grammar</div>
                    <div class="uk-margin dstest__card__box">
                        <div class="uk-flex-between uk-child-width-expand uk-grid-collapse" uk-grid>
                            <div>
                                <div class="dstest__card__box__txt dstest__card__box__txt--check">50 câu</div>
                            </div>
                            <div>
                                <div class="dstest__card__box__txt dstest__card__box__txt--time">60 phút</div>
                            </div>
                            <div>
                                <div class="dstest__card__box__txt dstest__card__box__txt--user">80 lượt thi</div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="uk-flex-between" uk-grid>
                        <div>
                            <a href="" class="uk-button uk-button-primary dstest__card__btn dstest__card__btn--left"><span>Miễn phí</span></a>
                        </div>
                        <div>
                            <a href="" class="uk-button uk-button-primary dstest__card__btn dstest__card__btn--right"><span>làm bài</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        <ul class="pagination uk-pagination uk-flex-center uk-flex-middle uk-margin-large" uk-margin>
            <li><a href="#"><span uk-pagination-previous></span></a></li>
            <li><a href="#">1</a></li>
            <li class="uk-disabled"><span>…</span></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li class="uk-active"><span>7</span></li>
            <li><a href="#">8</a></li>
            <li><a href="#"><span uk-pagination-next></span></a></li>
        </ul>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>