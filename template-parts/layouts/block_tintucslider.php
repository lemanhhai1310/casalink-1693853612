<div class="" uk-slider="finite: false; sets: false">

    <div class="uk-position-relative">

        <div class="baiviet__slider-container-offset uk-slider-container-offset uk-slider-container">
            <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-20-m" uk-grid>
                <?php for ($i=1;$i<=5;$i++): ?>
                    <li>
                        <?php require "template-parts/layouts/tintuc_card.php"; ?>
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