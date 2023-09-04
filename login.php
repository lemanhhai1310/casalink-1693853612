<?php $data["title"] = "Login"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = true ?>
<?php require "template-parts/layouts/header.php"; ?>
<form>
    <fieldset class="uk-fieldset">

        <div class="uk-margin-medium-bottom">
            <legend class="uk-legend login__title">Chào mừng bạn trở lại !</legend>
            <p class="login__desc">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything</p>
        </div>

        <div class="uk-margin">
            <input class="uk-input login__input" type="email" placeholder="Email / Số điện thoại" aria-label="Email / Số điện thoại">
        </div>
        <div class="uk-margin">
            <input class="uk-input login__input" type="password" placeholder="Mật khẩu" aria-label="Mật khẩu">
        </div>
        <div class="uk-margin uk-text-right">
            <a href="quen_mat_khau.php" class="login__forgotLink">Quên mật khẩu?</a>
        </div>
        <div class="uk-margin-medium-top">
            <button class="uk-button login__btnSubmit uk-button-primary uk-width">Đăng nhập</button>
        </div>

    </fieldset>
</form>
<div class="uk-margin-top uk-flex uk-flex-column row-gap-16">
    <div class="uk-text-center login__txt1">
        Bạn chưa có tài khoản? <a href="register.php">Đăng ký</a>
    </div>
<?php require "template-parts/layouts/footer.php"; ?>