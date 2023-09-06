<div class="uk-section">
    <div class="uk-container">
        <h2 class="uk-text-center baiviet__title" style="--icon-title-bottom: url(images/Frame_427322377.png)">Danh sách khoá học</h2>
        <div class="uk-margin-medium-top" uk-slider="finite: false; sets: false">

            <div class="uk-position-relative">

                <div class="baiviet__slider-container-offset uk-slider-container-offset uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small uk-grid-20-m" uk-grid>
                        <?php for ($i=1;$i<=5;$i++): ?>
                            <li>
                                <div class="baiviet__card baiviet__card--hv uk-card uk-padding-small uk-card-default uk-card-body">
                                    <div class="baiviet__card__coverImg uk-cover-container">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="289" height="184"></canvas>
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