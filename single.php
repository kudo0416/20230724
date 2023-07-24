<?php get_header(); ?>
<main>
     <!-- ページ上部に自動で戻るボタン -->
     <div class="scroll-to-top">
         <!-- <i class="fa-solid fa-square-chevron-up" style="color: #ff0000;"></i> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    </div>
        
    <!-- 交通のご案内 -->
    <div class="access_banner">
        <a href="access.html"><img src="<?php echo get_stylesheet_directory_uri();?>/images/access_banner.png" alt="交通のご案内"></a>
    </div>

    <div class="news-detail">
        <div class="logo-tsubaki-1">
            <img src="<?php echo get_stylesheet_directory_uri();?>/images/tsubaki.png" alt="椿ロゴ">
        </div>
        <h2><?php the_title(); ?></h2>

        <?php 
         $gosyuin_syubetu = get_post_meta(get_the_ID(), '御朱印種別',true);
         ?>
        </div>
        <div class="news-box">
            <div class="red-line"></div>
            <div class="news-img">
                <?php
                $image_id = get_post_meta( get_the_ID(), 'image_id', true );
                if($image_id) {
                echo wp_get_attachment_image( $image_id, 'full' );
                }?>
            </div>
            <?php   
            $gosyuin_name = get_post_meta(get_the_ID(), '御朱印名',true);
            ?>
            <h2><?php echo $gosyuin_name; ?></h2>
            <?php 
            $gosyuin_period = get_post_meta(get_the_ID(), '期間',true);
            ?>
             <?php 
            $gosyuin_price = get_post_meta(get_the_ID(), '初穂料',true);
            ?>
            <p>期&emsp;間：<?php echo $gosyuin_period; ?></p>
            <p>初穂料：<?php echo $gosyuin_price?></p>
        </div>
    </div> 
</main>
<p class="all-news"><a href="<?php echo esc_url(get_category_link(2)); ?>">お知らせ一覧</a></p>
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