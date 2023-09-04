<?php $data["title"] = "Register"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = true ?>
<?php require "template-parts/layouts/header.php"; ?>
    <form>
        <fieldset class="uk-fieldset">

            <div class="uk-margin-medium-bottom">
                <legend class="uk-legend login__title">Bạn cần một tài khoản mới !</legend>
                <p class="login__desc">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything</p>
            </div>

            <div class="uk-margin">
                <input class="uk-input login__input" type="text" placeholder="Họ và tên" aria-label="Họ và tên">
            </div>
            <div class="uk-margin">
                <input class="uk-input login__input" type="email" placeholder="Email / Số điện thoại" aria-label="Email / Số điện thoại">
            </div>
            <div class="uk-margin">
                <input class="uk-input login__input" type="password" placeholder="Mật khẩu" aria-label="Mật khẩu">
            </div>
            <div class="uk-margin">
                <input class="uk-input login__input" type="password" placeholder="Nhập lại mật khẩu" aria-label="Nhập lại mật khẩu">
            </div>

            <div class="uk-margin-medium-top">
                <button class="uk-button login__btnSubmit uk-button-primary uk-width">Đăng ký</button>
            </div>

        </fieldset>
    </form>
    <div class="uk-margin-top uk-flex uk-flex-column row-gap-16">
        <div class="uk-text-center login__txt1">
            Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a>
        </div>
<?php require "template-parts/layouts/footer.php"; ?>