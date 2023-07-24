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

        <div class="yakudoshihyou">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sakatsura_web_sanpai_yakudoshi_r5r6-scaled.jpg" alt="厄年早見表">
            </div>
        </main>
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