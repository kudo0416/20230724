<?php get_header(); ?>
<main>
    <!-- ページ上部に自動で戻るボタン -->
    <div class="scroll-to-top">
            <!-- <i class="fa-solid fa-square-chevron-up" style="color: #ff0000;"></i> -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        </div>
        
                    <!-- 交通のご案内 -->
        <div class="access_banner">
            <a href="<?php esc_url('/access'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/access_banner.png" alt="交通のご案内"></a>
        </div>
                   
                    <!-- 本殿・拝殿を後ろから移した画像と「ご由緒」 -->
        <div class="news-main-visual">
            <h1>お知らせ</h1>
        </div>

        <div class="news-container">
        <div class="news-wrapper">
            <div class="logo-tsubaki-1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿ロゴ">
                <h2>当社をご参拝の前に</h2>
            </div>
   
            <?php if(have_posts()): while(have_posts()): the_post(); ?>

            <div class="news-topics">
                            <a href="<?php the_permalink(); ?>">
                                <div class="news-img"> 
                                    <?php 
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail();
                                        } else {
                                            echo '<img src="'.get_stylesheet_directory_uri().'/images/r5maygatugosyuin.jpeg" alt="四月御朱印のお知らせ">';
                                        }
                                    ?>
                                </div>   
                                <p><?php the_title(); ?></p>
                            </a>
                        </div>
        
                <?php endwhile; else: ?>

            <?php endif; ?>
        </div>
        </div>
        
</main>
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
<?php get_footer(); ?>