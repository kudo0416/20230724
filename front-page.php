<?php get_header(); ?>
<main>
        <!-- ページ上部に自動で戻るボタン -->
        <div class="scroll-to-top">
            <i class="fa-solid fa-square-chevron-up" style="color: #ff0000;"></i>
            <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"> -->
        </div>
        
                    <!-- 交通のご案内 -->
        <div class="access_banner">
            <a href="<?php echo esc_url(home_url('/access'))?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/access_banner.png" alt="交通のご案内"></a>
        </div>

             <!-- スライドの画像 -->
        <div class="index-main-visual">
                    <!-- 宝くじ当選祈願ロゴ -->
                <div class="main-visual-img"><a href="<?php echo esc_url(home_url('/lottery'))?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/top02.jpg" alt="酒列磯前神社"></a></div>
        </div>
     <!-- スマホ版のトップ画像 -->
     <div class="res-main-visual-img"><a href="<?php echo esc_url(home_url())?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_top_01_01.png" alt="酒列磯前神社"></a></div>
                <div class="res-main-visual-backimg"></div>
<div class="main-wrapper">
                <div class="main-about-txt">
                    <h2>ようこそ、常陸国の古社へ</h2>
                    <p>
                        酒列磯前神社、その歴史は古く<br>
                        平安時代からと云われています。<br>
                        病気平癒・健康長寿・醸造発展<br>
                        温泉の神に深く関わっており<br>
                        古来より地元のみなさまに<br>
                        愛されてまいりました。<br>
                        四季のうつろいとともに<br>
                        歴史を感じながら<br>
                        ただただ、その身をゆだね<br>
                        ゆるやかに過ぎていく刻を感じる。
                    </p>
                </div>
                <p class="goyuisyo"><a href="<?php echo esc_url(home_url('/goyuisyo')); ?>">ご由緒</a></p>
            </div>

            <div class="sanpai">
                    <p><a href="<?php echo esc_url(home_url('/sanpai')); ?>">参拝・お祓い・御祈祷</a></p>
                    <p>神々を敬い<br>畏怖の念を抱く</p>
            </div>

            <div class="contents-wrapper">
                <div class="news">
                    <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="酒列椿のロゴ"></div>
                    <h2>お知らせ</h2>
                    <div class="news-wrapper">
                        <?php $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            );
                        $new_query = new WP_Query($args);
                        if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>
                        
                        
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
                       
                        <?php endwhile; wp_reset_postdata(); else: ?>
                        <?php endif; ?>
                    </div>
                    <p class="all-news"><a href="<?php echo esc_url(get_category_link(2)); ?>">お知らせ一覧</a></p>
                </div>
        
                <div class="info-item">
                    <div class="logo-tsubaki-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="酒列椿のロゴ"></div>
                    <div class="item-wrapper">
                        <div class="item">
                            <div class="item1">
                                <a href="<?php echo esc_url(home_url('/initiation')); ?>">
                                    <h3>人生儀礼のご案内</h3>
                                    <p>日本古来からの尊い風習</p>
                                </a>
                            </div>  
                        </div>
                        <div class="item">
                            <div class="item2">
                                <a href="<?php echo esc_url(home_url('/corporation')); ?>">
                                    <h3>法人祈願のご案内</h3>
                                    <p>法人・団体様の御祈願</p>
                                </a>
                            </div>  
                        </div>
                        <div class="item">
                            <div class="item3">
                                <a href="<?php echo esc_url(home_url('/lottery')); ?>">
                                    <h3>幸運の亀さん</h3>
                                    <p>宝くじ開運祈願</p>
                                </a>
                            </div>  
                        </div>
                        <div class="item">
                            <div class="item4">
                                <a href="<?php echo esc_url(home_url('/goyuisyo'))?>">
                                    <h3>病気平癒・健康長寿</h3>
                                    <p>皆様の健康を祈って</p>
                                </a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="res-takarakuji">
                <div class="logo-tsubaki-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="酒列椿のロゴ"></div>
                <a href="<?php echo esc_url(home_url('/lottery')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sp_top_02.png" alt="宝くじ当選祈願幸運の亀さん"></a>
            </div>
        
            <div class="ooaraiisosakijinja-wrapper">
                <div class="ooaraiisosakijinja">
                    <div class="ooaraiisosakijinja-img1"></div>
                    <div class="ooaraiisosakijinja-txt">
                        <h3>『対の宮』</h3>
                        <h2>大洗磯前神社</h2>
                        <p>当社の兄弟神社です。<br>大己貴命・少彦名命をお祀りしております。<br>海の中にある神磯の鳥居は神秘的で大人気です。</p>
                        <p><a href="https://www.oarai-isosakijinja.net/">大洗磯前神社へ</a></p>
                    </div>
                    <div class="ooaraiisosakijinja-img2"></div>
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