<?php $data["title"] = "Lịch khai giảng"; ?>
<?php $bodyClass = '' ?>
<?php $isLichkhaigiang = '' ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="lichkhaigiang__banner uk-light uk-flex uk-flex-middle uk-background-image@m uk-background-norepeat uk-background-center-center" data-src="images/lichkhaigiang/Group45445-4.png" uk-img>
    <div class="uk-section uk-width">
        <div class="uk-container">
            <div class="uk-flex-center uk-flex-left@m" uk-grid>
                <div class="uk-width-auto uk-text-center">
                    <h1 class="lichkhaigiang__banner__title ">Lịch khai giảng</h1>
                    <div class="lichkhaigiang__banner__txt">
                        <div class="uk-cover-container uk-background-norepeat uk-background-center-center uk-flex-inline uk-background-contain" data-src="images/lichkhaigiang/Group45446-4.png" uk-img>
                            <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                <span class="txt">Lớp học Casalink</span>
                            </div>
                            <canvas width="390" height="93"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <ul class="uk-child-width-expand lichkhaigiang__tab" uk-tab>
        <li class="uk-active"><a href="#">Cơ sở HQV</a></li>
        <li><a href="#">Cơ sở THANH XUÂN</a></li>
    </ul>
    <div class="uk-container">
        <div class="uk-overflow-auto">
            <table class="lichkhaigiang__table uk-table uk-text-center uk-table-middle uk-table-small uk-table-divider">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>CƠ SỞ</th>
                    <th>KHOÁ HỌC</th>
                    <th>LEVEL</th>
                    <th>LỚP</th>
                    <th>LỊCH HỌC</th>
                    <th>SĨ SỐ</th>
                    <th>ĐĂNG KÝ</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i=1;$i<=6;$i++): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td>HQV</td>
                        <td>Mầm non</td>
                        <td>Level 1</td>
                        <td>Little stara</td>
                        <td>Tối thứ 2 (Ca 18h00 - 19h30)</td>
                        <td>15</td>
                        <td><a href="" class="lichkhaigiang__table__btn uk-button uk-button-danger">Đăng ký ngay</a></td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--Danh sách khoá học-->
<?php require "template-parts/layouts/block_dskhoahoc.php"; ?>
<!--/Danh sách khoá học-->

<!--ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->
<?php require "template-parts/layouts/block_dangkyhocthu.php"; ?>
<!--/ĐĂNG KÝ TRẢI NGHIỆM HỌC THỬ MIỄN PHÍ-->

<!--Hệ sinh thái sản phẩm tại Casalink-->
<?php require "template-parts/layouts/block_hesinhthai.php"; ?>
<!--/Hệ sinh thái sản phẩm tại Casalink-->

<!--block1-->
<?php require "template-parts/layouts/block1.php"; ?>
<!--/block1-->
<?php require "template-parts/layouts/footer.php"; ?>