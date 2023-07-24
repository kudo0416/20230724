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

        <div class="jyuyo-main-visual">
            <h1>授与品のご案内</h1>
        </div>
        
        <main>
            <div class="jyuyo-wrapper">
                <div class="jyuyo-txt">
                    <!-- 椿のロゴ -->
                    <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                    <!-- 由緒説明 -->
                    <h2>授与品</h2>
                    <p>
                       酒列磯前神社で授与しているお神札やお守りなどのご案内です。
                    </p>
                </div>
            </div>

            <div class="jyuyo-item-wrapper">
                <!-- お神札 -->
                <div class="jyuyo-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jyuyo01.jpg" alt="神社お神札">
                    <div class="jyuyo-item-txt">
                        <h3>お神札</h3>
                        <p>初穂料1,000円</p>
                    </div>
                </div>
                <div class="jyuyo-border"></div>
                <!-- 病気平癒守り -->
                <div class="jyuyo-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jyuyo02.jpg" alt="神社お神札">
                    <div class="jyuyo-item-txt">
                        <h3>病気平癒守</h3>
                        <p>初穂料1,000円</p>
                    </div>
                </div>
                <div class="jyuyo-border"></div>
                <!-- 健康守り -->
                <div class="jyuyo-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jyuyo03.jpg" alt="神社お神札">
                    <div class="jyuyo-item-txt">
                        <h3>健康長寿守</h3>
                        <p>初穂料1,000円</p>
                    </div>
                </div>
                <div class="jyuyo-border"></div>
                <!-- 金運守り -->
                <div class="jyuyo-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jyuyo04.jpg" alt="神社お神札">
                    <div class="jyuyo-item-txt">
                        <h3>金運守</h3>
                        <p>初穂料1,000円</p>
                    </div>
                </div>
                <div class="jyuyo-border"></div>
                <!-- 願い貝守り -->
                <div class="jyuyo-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jyuyo05.jpg" alt="神社お神札">
                    <div class="jyuyo-item-txt">
                        <h3>願い貝金運守</h3>
                        <p>初穂料1,000円</p>
                    </div>
                </div>
                <div class="jyuyo-border"></div>
                <!-- 開運厄除守り -->
                <div class="jyuyo-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jyuyo06.jpg" alt="神社お神札">
                    <div class="jyuyo-item-txt">
                        <h3>開運厄除守</h3>
                        <p>初穂料1,000円</p>
                    </div>
                </div>
                <div class="jyuyo-border"></div>
                <!-- 開運絵馬 -->
                <div class="jyuyo-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jyuyo07.jpg" alt="神社お神札">
                    <div class="jyuyo-item-txt">
                        <h3>開運絵馬</h3>
                        <p>初穂料1,000円</p>
                    </div>
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