<?php $data["title"] = "Quên mật khẩu"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = true ?>
<?php require "template-parts/layouts/header.php"; ?>
    <form>
        <fieldset class="uk-fieldset">

            <div class="uk-margin-medium-bottom">
                <legend class="uk-legend login__title">Quên mật khẩu !</legend>
                <p class="login__desc">Nhập số điện thoại hoặc email đăng ký của bạn.</p>
            </div>

            <div class="uk-margin">
                <input class="uk-input login__input" type="email" placeholder="Email / Số điện thoại" aria-label="Email / Số điện thoại">
            </div>

            <div class="uk-margin-medium-top">
                <button class="uk-button login__btnSubmit uk-button-primary uk-width">Xác nhận</button>
            </div>

        </fieldset>
    </form>
    <div class="uk-margin-top uk-flex uk-flex-column row-gap-16">
        <div class="uk-text-center login__txt1">
            Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a>
        </div>
<?php require "template-parts/layouts/footer.php"; ?>