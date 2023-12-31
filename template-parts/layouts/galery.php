<div class="home__hinhanh__grid1 uk-margin-medium-top uk-background-default uk-height-min-large">
    <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-12" uk-grid="masonry: true" uk-lightbox="animation: slide">
        <?php
        $data = array(
            array(
                'w' => 320,
                'h' => 286,
                'img' => 'images/hinhanh/4.jpeg',
            ),
            array(
                'w' => 320,
                'h' => 394,
                'img' => 'images/hinhanh/9.jpeg',
            ),
            array(
                'w' => 320,
                'h' => 286,
                'img' => 'images/hinhanh/13.JPG',
            ),
            array(
                'w' => 320,
                'h' => 366,
                'img' => 'images/hinhanh/14.JPG',
            ),
            array(
                'w' => 320,
                'h' => 394,
                'img' => 'images/hinhanh/15.jpeg',
            ),
            array(
                'w' => 320,
                'h' => 286,
                'img' => 'images/hinhanh/16.JPG',
            ),
            array(
                'w' => 320,
                'h' => 394,
                'img' => 'images/hinhanh/17.JPG',
            ),
            array(
                'w' => 320,
                'h' => 314,
                'img' => 'images/hinhanh/18.JPG',
            ),
        );
        foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-cover-container uk-inline-clip uk-transition-toggle">
                    <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                    <canvas width="<?= $v['w'] ?>" height="<?= $v['h'] ?>"></canvas>
                    <a href="<?= $v['img'] ?>"  data-caption="Caption <?= $k ?>" class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.8" cx="22.4407" cy="22.4409" r="20" transform="rotate(-7.50411 22.4407 22.4409)" fill="#FC9905"/>
                            <path d="M31.8729 21.6111C31.6942 21.3667 27.4371 15.6265 21.9999 15.6265C16.5627 15.6265 12.3054 21.3667 12.1269 21.6109C11.9577 21.8427 11.9577 22.1572 12.1269 22.3891C12.3054 22.6335 16.5627 28.3737 21.9999 28.3737C27.4371 28.3737 31.6942 22.6335 31.8729 22.3893C32.0423 22.1575 32.0423 21.8427 31.8729 21.6111ZM21.9999 27.055C17.9949 27.055 14.5261 23.2452 13.4992 21.9996C14.5247 20.753 17.9863 16.9451 21.9999 16.9451C26.0048 16.9451 29.4733 20.7544 30.5006 22.0005C29.4751 23.2471 26.0135 27.055 21.9999 27.055Z" fill="white"/>
                            <path d="M22 18.0439C19.8187 18.0439 18.0439 19.8187 18.0439 22C18.0439 24.1813 19.8187 25.9561 22 25.9561C24.1813 25.9561 25.9561 24.1813 25.9561 22C25.9561 19.8187 24.1813 18.0439 22 18.0439ZM22 24.6374C20.5457 24.6374 19.3627 23.4543 19.3627 22C19.3627 20.5457 20.5457 19.3627 22 19.3627C23.4543 19.3627 24.6374 20.5457 24.6374 22C24.6374 23.4543 23.4543 24.6374 22 24.6374Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>