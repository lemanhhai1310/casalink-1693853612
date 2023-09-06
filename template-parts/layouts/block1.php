<div class="uk-section block1__bg <?= (isset($isHome)) ? 'block1__bg--home' : 'block1__bg--nothome' ?>">
    <div class="uk-container">
        <h2 class="block1__title" style="--txt-after:'tiêu biểu';--bg-block1-line:url(images/Group_45446.png)">Học viên đạt thành tích cao</h2>
        <div class="uk-margin-large-top" uk-slider="finite: false; sets: false">

            <div class="uk-position-relative">

                <div class="baiviet__slider-container-offset uk-slider-container-offset uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small uk-grid-20-m" uk-grid>
                        <?php for ($i=1;$i<=6;$i++): ?>
                            <li>
                                <div class="baiviet__card baiviet__card--hv uk-card uk-padding-small uk-card-default uk-card-body">
                                    <div class="baiviet__card__coverImg uk-cover-container">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="289" height="220"></canvas>
                                    </div>
                                    <h4 class="uk-margin block1__card__title">Nguyễn Gia Hùng</h4>
                                    <p class="block1__card__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    <ul class="uk-list uk-list-bullet block1__card__list">
                                        <li>It is a long established fact that a reader</li>
                                        <li>It is a long established fact that a reader</li>
                                        <li>It is a long established fact that a reader</li>
                                    </ul>
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
    <?php if (isset($isHome) || isset($isLichkhaigiang)): ?>
        <div class="uk-container uk-container-small uk-margin-large-top">
            <div class="uk-grid-small uk-flex-middle uk-flex-center" uk-grid>
                <div class="uk-width-auto">
                    <img src="images/P2_Vui_3.png" alt="">
                </div>
                <div class="uk-width-auto">
                    <h2 class="uk-text-center baiviet__title" style="--icon-title-bottom: url(images/Frame_427322377.png); align-items: flex-start">Phản hồi của học viên</h2>
                </div>
            </div>
            <div class="uk-margin-large-top" uk-slider="finite: false; sets: false">

                <div class="uk-position-relative">

                    <div class="baiviet__slider-container-offset uk-slider-container-offset uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-grid-small uk-grid-20-m" uk-grid>
                            <?php for ($i=1;$i<=6;$i++): ?>
                                <li class="uk-text-center">
                                    <div class="block1__phanhoi__avatar uk-cover-container uk-flex-inline uk-border-circle">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="120" height="120"></canvas>
                                    </div>
                                    <div class="block1__phanhoi__card uk-card uk-card-body" data-src="images/image_1-2.png" uk-img>
                                        <p class="block1__phanhoi__card__desc">Trong buổi học hôm nay con thấy cô Mai Anh rất tuyệt vời, cô dạy rất hay và truyền cảm. Cô vẽ đẹp như 1 ngừoi hoạ sĩ chỉ trong mấy phút. Cô còn rất hài hước nữa. Con cảm ơn cô về buổi học này</p>
                                        <div class="block1__phanhoi__card__txt">Nguyễn Thị Thục Uyên, lớp 5 định hướng thi UMS 2023 - Trường tiểu học Hồ Tùng Mậu</div>
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
    <?php endif; ?>
</div>