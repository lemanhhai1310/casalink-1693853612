<?php if (isset($isLogin) && $isLogin): ?>
                                        <div class="login__line">
                                            <span>Hoặc</span>
                                        </div>
                                        <div class="uk-grid-small uk-child-width-1-2@s" uk-grid>
                                            <div>
                                                <a href="" style="--social-url: url(images/google-1.png)" class="uk-button login__btnSocial login__btnSocial--google uk-button-secondary uk-width">Đăng nhập với google</a>
                                            </div>
                                            <div>
                                                <a href="" style="--social-url: url(images/facebook-61.png)" class="uk-button login__btnSocial login__btnSocial--fb uk-button-secondary uk-width">Đăng nhập với facebook</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-auto uk-visible@m">
            <div class="uk-cover-container">
                <img src="images/Frame-427322699.png" alt="" uk-cover="">
                <canvas width="710" height="1024"></canvas>
            </div>
        </div>
    </div>
<?php else: ?>
    </main>
    <?php require "template-parts/layouts/blockForm.php"; ?>
    <footer id="footer" class="footer uk-light uk-background-norepeat uk-background-top-center" data-src="images/ bg_footer.png" uk-img="">
        <div class="uk-section footer__top">
            <div class="uk-container">
                <div class="uk-grid uk-child-width-auto uk-grid-88-l" uk-grid>
                    <div>
                        <div class="footer__w413">
                            <figure><a href="."><img src="images/logo_f.png" alt=""></a></figure>
                            <address class="footer__top__address uk-flex uk-flex-column row-gap-12">
                                <div>
                                    <div class="footer__top__address__name">Địa chỉ:</div>
                                    <div>Cơ sở 1: 39 Tôn Quang Phiệt (ngõ 234 Hoàng Quốc Việt), Bắc Từ Liêm, Hà Nội</div>
                                    <div>Cơ sở 2: Liền Kề 13, 96 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội</div>
                                </div>
                                <div>
                                    <div><span class="footer__top__address__name">Hotline:</span> (+84) 989 816 066</div>
                                </div>
                                <div>
                                    <div><span class="footer__top__address__name">Email:</span> casalink.edu.vn</div>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div>
                        <h3 class="footer__top__title">DANH MỤC</h3>
                        <ul class="footer__top__navLink uk-nav uk-nav-default">
                            <li><a href="about.php">Về Casalink</a></li>
                            <li><a href="lich_khai_giang.php">Lịch khai giảng</a></li>
                            <li><a href="tin_tuc_su_kien.php">Tin tức - Sự kiện</a></li>
                            <li><a href="tin_tuc_su_kien.php">Blog</a></li>
                            <li><a href="#">Góc cảm nhận</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__top__title">CÁC KHOÁ HỌC</h3>
                        <ul class="footer__top__navLink uk-nav uk-nav-default">
                            <li><a href="khoa_hoc_con.php">Khoá học mầm non</a></li>
                            <li><a href="khoa_hoc_con.php">Khoá học tiểu học</a></li>
                            <li><a href="khoa_hoc_con.php">Khoá học trung học</a></li>
                            <li><a href="khoa_hoc_online.php">Khoá học online</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-expand@m">
                        <h3 class="footer__top__title">ĐĂNG KÝ TƯ VẤN</h3>
                        <div class="uk-flex uk-flex-column row-gap-16">
                            <div>
                                <form class="" style="--width-form: 80px;">
                                    <div class="uk-position-relative">
                                        <input class="footer__form__input uk-input uk-form-large" type="text" placeholder="Số điện thoại / Email" aria-label="Số điện thoại / Email">
                                        <button class="footer__form__btn uk-position-center-right uk-button uk-button-danger uk-button-large">Gửi</button>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <h4 class="footer__top__title footer__top__title--c1">Theo dõi chúng tôi</h4>
                                <div class="uk-flex column-gap-20 footer__top__social">
                                    <div>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M8.08738 11.0333C8.02458 11.0333 6.70718 11.0337 6.09958 11.0331C5.78678 11.0329 5.67518 10.9205 5.67518 10.6057C5.67478 9.79712 5.67458 8.98852 5.67518 8.17992C5.67538 7.86912 5.79338 7.75052 6.10218 7.75032C6.70978 7.74992 8.01998 7.75012 8.08738 7.75012C8.08738 7.69472 8.08718 6.52732 8.08738 5.98972C8.08778 5.19492 8.22958 4.43412 8.63338 3.73752C9.04678 3.02452 9.64838 2.53612 10.4194 2.25372C10.9132 2.07272 11.4258 2.00052 11.9498 2.00012C12.6054 1.99972 13.261 2.00032 13.9168 2.00152C14.1986 2.00192 14.3236 2.12652 14.3242 2.41032C14.3254 3.17092 14.3254 3.93152 14.3242 4.69192C14.3238 4.97872 14.204 5.09392 13.9158 5.09712C13.3784 5.10292 12.8406 5.09932 12.3038 5.12092C11.7616 5.12092 11.4764 5.38572 11.4764 5.94692C11.4634 6.54052 11.471 7.13472 11.471 7.74992C11.5218 7.74992 13.0648 7.74972 13.786 7.74992C14.1136 7.74992 14.2256 7.86252 14.2256 8.19192C14.2256 8.99612 14.2254 9.80052 14.2248 10.6047C14.2246 10.9293 14.1194 11.0329 13.7898 11.0331C13.0686 11.0335 11.5316 11.0333 11.4644 11.0333V17.5423C11.4644 17.8893 11.3552 17.9999 11.0128 17.9999C10.178 17.9999 9.34298 18.0001 8.50818 17.9999C8.20558 17.9999 8.08758 17.8823 8.08758 17.5797C8.08738 15.4599 8.08738 11.1077 8.08738 11.0333Z" fill="#3D6AD6"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <g clip-path="url(#clip0_34_209)">
                                                    <path d="M20 3.79875C19.2563 4.125 18.4637 4.34125 17.6375 4.44625C18.4875 3.93875 19.1363 3.14125 19.4412 2.18C18.6488 2.6525 17.7738 2.98625 16.8412 3.1725C16.0887 2.37125 15.0162 1.875 13.8462 1.875C11.5763 1.875 9.74875 3.7175 9.74875 5.97625C9.74875 6.30125 9.77625 6.61375 9.84375 6.91125C6.435 6.745 3.41875 5.11125 1.3925 2.6225C1.03875 3.23625 0.83125 3.93875 0.83125 4.695C0.83125 6.115 1.5625 7.37375 2.6525 8.1025C1.99375 8.09 1.3475 7.89875 0.8 7.5975C0.8 7.61 0.8 7.62625 0.8 7.6425C0.8 9.635 2.22125 11.29 4.085 11.6712C3.75125 11.7625 3.3875 11.8062 3.01 11.8062C2.7475 11.8062 2.4825 11.7913 2.23375 11.7362C2.765 13.36 4.2725 14.5538 6.065 14.5925C4.67 15.6838 2.89875 16.3412 0.98125 16.3412C0.645 16.3412 0.3225 16.3263 0 16.285C1.81625 17.4563 3.96875 18.125 6.29 18.125C13.835 18.125 17.96 11.875 17.96 6.4575C17.96 6.27625 17.9538 6.10125 17.945 5.9275C18.7588 5.35 19.4425 4.62875 20 3.79875Z" fill="#03A9F4"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_34_209">
                                                        <rect width="20" height="20" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M15.8463 2.92383H4.15374C1.85969 2.92383 0 4.78352 0 7.07757V12.9226C0 15.2166 1.85969 17.0763 4.15374 17.0763H15.8463C18.1403 17.0763 20 15.2166 20 12.9226V7.07757C20 4.78352 18.1403 2.92383 15.8463 2.92383ZM13.0371 10.2845L7.56814 12.8928C7.42241 12.9623 7.25408 12.8561 7.25408 12.6947V7.31488C7.25408 7.15115 7.42684 7.04503 7.57287 7.11905L13.0418 9.89045C13.2044 9.97284 13.2016 10.206 13.0371 10.2845Z" fill="#F61C0D"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom uk-text-center uk-section-xsmall">
            <div class="uk-container">
                <span class="footer__bottom__txt">Copyright © 2023 Casalink</span>
            </div>
        </div>
    </footer>
<?php endif; ?>
</div>
<!--/app-->
</body>
</html>