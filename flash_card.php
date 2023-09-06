<?php $data["title"] = "Flash card"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->
<?php require "template-parts/layouts/block_dangkyhocthu.php"; ?>
<!--/ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->

<!--Câu hỏi thường gặp-->
<div class="uk-section flash_card__cauhoi">
    <div class="uk-container">
        <div class="uk-flex uk-flex-column row-gap-30 row-gap-60-m">
            <div class="uk-text-center">
                <h2 class="flash_card__cauhoi__title">Câu hỏi thường gặp</h2>
                <p class="flash_card__cauhoi__desc">Những câu hỏi và thắc mắc sẽ được chúng tôi giải đáp dưới đây!</p>
            </div>
            <ul class="flash_card__cauhoi__accordion" uk-accordion>
                <li class="flash_card__cauhoi__accordion__li uk-open">
                    <a class="uk-accordion-title flash_card__cauhoi__accordion__title" href="#">1. It has survived not only five centuries?</a>
                    <div class="uk-accordion-content flash_card__cauhoi__accordion__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </li>
                <li class="flash_card__cauhoi__accordion__li">
                    <a class="uk-accordion-title flash_card__cauhoi__accordion__title" href="#">2. It was popularised in the 1960s with the release of Letraset?</a>
                    <div class="uk-accordion-content flash_card__cauhoi__accordion__content">
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                    </div>
                </li>
                <li class="flash_card__cauhoi__accordion__li">
                    <a class="uk-accordion-title flash_card__cauhoi__accordion__title" href="#">3. Various versions have evolved over the years?</a>
                    <div class="uk-accordion-content flash_card__cauhoi__accordion__content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                    </div>
                </li>
                <li class="flash_card__cauhoi__accordion__li">
                    <a class="uk-accordion-title flash_card__cauhoi__accordion__title" href="#">4. There are many variations of passages of Lorem Ipsum available?</a>
                    <div class="uk-accordion-content flash_card__cauhoi__accordion__content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                    </div>
                </li>
                <li class="flash_card__cauhoi__accordion__li">
                    <a class="uk-accordion-title flash_card__cauhoi__accordion__title" href="#">5. The standard chunk of Lorem Ipsum used since the 1500s?</a>
                    <div class="uk-accordion-content flash_card__cauhoi__accordion__content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                    </div>
                </li>
                <li class="flash_card__cauhoi__accordion__li">
                    <a class="uk-accordion-title flash_card__cauhoi__accordion__title" href="#">6. The generated Lorem Ipsum is therefore?</a>
                    <div class="uk-accordion-content flash_card__cauhoi__accordion__content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/Câu hỏi thường gặp-->

<!--PHẢN HỒI TỪ CHÍNH HỌC VIÊN-->
<div class="uk-section">
    <div class="uk-container">
        <h2 class="uk-text-center baiviet__title" style="--icon-title-bottom: url(images/Frame_427322377.png)">Phản hồi từ chính học viên</h2>
        <?php require "template-parts/layouts/galery.php"; ?>
    </div>
</div>
<!--PHẢN HỒI TỪ CHÍNH HỌC VIÊN-->
<?php require "template-parts/layouts/footer.php"; ?>