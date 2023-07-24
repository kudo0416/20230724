<?php get_header(); ?>
<main>
<!-- ページ上部に自動で戻るボタン -->
<div class="scroll-to-top">
            <!-- <i class="fa-solid fa-square-chevron-up" style="color: #ff0000;"></i> -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        </div>
        
                    <!-- 交通のご案内 -->
        <div class="access_banner">
            <a href="<?php echo esc_url(home_url('/access')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/access_banner.png" alt="交通のご案内"></a>
        </div>

        <div class="tour-media-main-visual">
            <h1>観光バス・取材のお問い合わせ</h1>
        </div>

        <div class="tour-media-wrapper">
                <div class="tour-media-txt">
                    <!-- 椿のロゴ -->
                    <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                    <p>
                       旅行会社・各種団体の皆様へ
                    </p>
                </div>

                <div class="parking">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/parking.jpg" alt="駐車場">
                    <h2>観光バス専用駐車場</h2>
                    <ol>
                        <li>大型バス専用駐車場5台完備</li>
                        <li>大型バス最大駐車数15台</li>
                    </ol>
                </div>

                <div class="toilet">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sakatsura_web_buss.png" alt="御手洗・大型駐車場">
                    <p>駐車場隣接お手洗いがございます。<br>
                       詳細やご不明な点がございましたら社務所までお問い合わせください。<br>
                       資料請求も承っております。
                    </p>
                </div>

                <div class="inquiry">
                    <h4>お問い合わせ先</h4>
                    <p>酒列磯前神社&nbsp;社務所<br>
                    〒311-1202&nbsp;:&nbsp;茨城県ひたちなか市磯崎町4607-2<br>
                    TEL.029-265-8220&emsp;FAX.029-265-9290<br>
                    E-mail&nbsp;sakatsuraisosaki@air.ocn.ne.jp<br>
                    URL&emsp;https://sakatura.org/
                    </p>
                </div>
                
            </div>

            
            <div class="shrine-guidance">
                <p><a href="<?php echo esc_url(home_url('/keidai')); ?>">境内のご案内</a></p>
                <p>刻まれた歴史<br>という趣が<br>時を忘れさせる</p>
            </div>
        
            <div class="footer-nav">
            <nav>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/jyuyo')); ?>">授与品</a></li>
                    <li><a href="<?php echo esc_url(home_url('/keidai')); ?>">境内のご案内</a></li>
                    <li><a href="<?php echo esc_url(home_url('/event')); ?>">年中行事</a></li>
                    <li><a href="<?php echo esc_url(home_url('/sanpai')); ?>">参拝・お祓い・御祈祷</a></li>
                    <li><a href="<?php echo esc_url(home_url('/goyuisyo')); ?>">ご由緒</a></li>
                </ul>
            </nav>
        </div>
        <a href="<?php echo esc_url(home_url()); ?>">
            <div class="footer-visual"></div>
        </a>
</main>
<?php get_footer(); ?>