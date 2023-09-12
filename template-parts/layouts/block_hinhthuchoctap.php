<div class="uk-section">
    <div class="uk-container uk-container-small">
        <h2 class="uk-text-center">Đa dạng hình thức học tập</h2>
        <div class="uk-child-width-1-2 uk-grid-match" uk-grid>
            <?php
            $data = array(
                array(
                    'img' => 'images/Group_45449.png',
                    'title1' => 'Lớp Offline',
                    'title2' => 'KH online qua Zoom',
                    'desc1' => array(
                        array(
                            'txt1' => 'Quy mô lớp học',
                            'txt2' => '10 - 25 học viên',
                        ),
                        array(
                            'txt1' => 'Đội ngũ giáo viên',
                            'txt2' => '25% giáo viên nước ngoài và 75% giáo viên Việt Nam',
                        ),
                        array(
                            'txt1' => 'Thời gian học',
                            'txt2' => '90 phút/1 buổi 2 buổi/ tuần',
                        ),
                    ),
                    'desc2' => array(
                        array(
                            'txt1' => 'MÔ hình lớp học:',
                            'txt2' => 'Lớp học qua Zoom',
                        ),
                        array(
                            'txt1' => 'Đội ngũ giáo viên',
                            'txt2' => '100% giáo viên Việt Nam',
                        ),
                    ),
                ),
                array(
                    'img' => 'images/Group_247.png',
                    'title1' => 'Lớp Online',
                    'title2' => 'KH online qua video',
                    'desc1' => array(
                        array(
                            'txt1' => 'Quy mô lớp học',
                            'txt2' => 'Bài giảng video ở các cấp độ Có đội ngũ GV hỗ trợ Online khi bạn gặp khó khăn Học mọi lúc, mọi nơi trên mọi nền tảng',
                        ),
                        array(
                            'txt1' => 'Đội ngũ giáo viên',
                            'txt2' => '100% giáo viên Việt Nam',
                        ),
                    ),
                    'desc2' => array(
                        array(
                            'txt1' => 'Khoá học video',
                            'txt2' => 'Bài giảng video ở các cấp độ Có đội ngũ GV hỗ trợ Online khi bạn gặp khó khăn Học mọi lúc, mọi nơi trên mọi nền tảng',
                        ),
                    ),
                ),
            );
            foreach ($data as $k=>$v): ?>
            <div>
                <div class="uk-card uk-text-center">
                    <div class="">
                        <img src="<?= $v['img'] ?>" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3><?= $v['title'] ?></h3>
                        <?php foreach ($v['desc'] as $v1): ?>
                        <div class="uk-margin-small">
                            <h5><?= $v1['txt1'] ?></h5>
                            <p><?= $v1['txt2'] ?></p>
                        </div>
                        <?php endforeach; ?>
                        <a href="" class="uk-button uk-button-primary">Khám phá</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>