<?php $data["title"] = "Tài liệu"; ?>
<?php $bodyClass = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div
    style="--tailieu-bg: url(images/tailieu/Group_45452.png)"
    class="tailieu__banner uk-light uk-flex uk-flex-middle uk-background-image@m">
    <div class="uk-section uk-width">
        <div class="uk-container">
            <h2 class="uk-text-center baiviet__title" style="--icon-title-bottom: url(images/tailieu/Frame_427322377-2.png)">Thư viện tài liệu</h2>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-flex-middle" uk-grid>
                    <div>
                        <h2 class="tailieu__title">Danh mục:</h2>
                    </div>
                    <div>
                        <ul class="tailieu__tab uk-subnav uk-subnav-pill" uk-switcher>
                            <li><a href="#">Lớp 1</a></li>
                            <li><a href="#">Lớp 2</a></li>
                            <li><a href="#">Lớp 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-auto@m">
                <?php require "template-parts/layouts/blockSearch.php"; ?>
            </div>
        </div>
        <hr>
        <div class="uk-child-width-1-4@m uk-grid-small uk-grid-20-m uk-margin-medium" uk-grid>
            <?php for ($i=1;$i<=6;$i++): ?>
            <div>
                <div class="tailieu__card uk-card uk-card-default uk-card-body uk-box-shadow-hover-medium">
                    <div class="uk-cover-container tailieu__card__img">
                        <img src="images/noimage.jpg" alt="" uk-cover="">
                        <canvas width="562" height="320"></canvas>
                    </div>
                    <div class="item__12">
                        <h4 class="tailieu__card__title"><a href="">Cẩm nang học tiếng Anh cho trẻ từ 4 – 8 tuổi của CASALINK</a></h4>
                        <div class="uk-flex-middle uk-flex-between uk-grid-10" uk-grid>
                            <div>
                                <?php for ($j=1;$j<=5;$j++): ?>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_1_134548)">
                                            <path d="M15.5754 5.72278L10.6568 4.97145L8.4521 0.275451C8.28743 -0.0752155 7.7121 -0.0752155 7.54743 0.275451L5.34343 4.97145L0.424766 5.72278C0.0207661 5.78478 -0.140567 6.27612 0.142766 6.56612L3.7161 10.2288L2.87143 15.4068C2.8041 15.8181 3.24343 16.1268 3.60677 15.9248L8.0001 13.4968L12.3934 15.9255C12.7534 16.1255 13.1968 15.8228 13.1288 15.4075L12.2841 10.2295L15.8574 6.56679C16.1408 6.27612 15.9788 5.78478 15.5754 5.72278Z" fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1_134548">
                                                <rect width="16" height="16" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <?php endfor; ?>
                            </div>
                            <div>
                                <a href="#modal-download" uk-toggle class="tailieu__card__download">Free download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div id="modal-download" class="tailieu__modal uk-flex-top" uk-modal>
    <div class="uk-modal-dialog tailieu__modal__dialog uk-margin-auto-vertical">
        <button class="uk-modal-close-default uk-icon uk-close tailieu__modal__close" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <g clip-path="url(#clip0_1_134779)">
                    <path d="M17.0742 2.926C13.1724 -0.975008 6.82694 -0.975008 2.92511 2.926C-0.975037 6.82701 -0.975037 13.1741 2.92511 17.0751C4.87603 19.0252 7.43805 19.9998 10.0001 19.9998C12.5622 19.9998 15.1233 19.0252 17.0742 17.0751C20.9753 13.1742 20.9753 6.82701 17.0742 2.926ZM14.1262 12.9482C14.4522 13.2742 14.4522 13.8011 14.1262 14.1271C13.9636 14.2896 13.7502 14.3714 13.5367 14.3714C13.3233 14.3714 13.1098 14.2896 12.9473 14.1271L10.0001 11.179L7.05369 14.1262C6.89029 14.2888 6.67683 14.3705 6.46423 14.3705C6.25081 14.3705 6.03735 14.2888 5.87478 14.1262C5.5488 13.8002 5.5488 13.2725 5.87478 12.9473L8.82116 10.0001L5.87395 7.05293C5.54798 6.72696 5.54798 6.19921 5.87395 5.87406C6.19911 5.54809 6.72685 5.54809 7.05283 5.87406L10 8.82126L12.9472 5.87406C13.2732 5.54809 13.8001 5.54809 14.1261 5.87406C14.4521 6.19921 14.4521 6.72696 14.1261 7.05293L11.1789 10.0001L14.1262 12.9482Z" fill="#E4E4E4"/>
                </g>
                <defs>
                    <clipPath id="clip0_1_134779">
                        <rect width="20" height="20" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </button>
        <div class="tailieu__modal__header uk-modal-header uk-text-center uk-light">
            <div class="tailieu__modal__imgCover uk-cover-container uk-border-circle uk-flex-inline">
                <img src="images/noimage.jpg" alt="" uk-cover="">
                <canvas width="90" height="90"></canvas>
            </div>
            <div class="tailieu__modal__w366 uk-margin-auto">
                <h2 class="uk-modal-title tailieu__modal__title">Điền thông tin dể tải xuống miễn phí</h2>
            </div>
        </div>
        <div class="tailieu__modal__body uk-modal-body">
            <form class="uk-grid-20" uk-grid>
                <div class="uk-width-1-1">
                    <input class="uk-input tailieu__modal__input" type="text" placeholder="Họ và tên" aria-label="Họ và tên">
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input tailieu__modal__input" type="text" placeholder="Số điện thoại" aria-label="Số điện thoại">
                </div>
                <div class="uk-width-1-2@s">
                    <input class="uk-input tailieu__modal__input" type="text" placeholder="Email" aria-label="Email">
                </div>
                <div class="uk-width-1-1 uk-margin-medium-top uk-text-center">
                    <button class="uk-button uk-button-primary tailieu__modal__btnSend">Download</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // UIkit.modal('#modal-download').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>