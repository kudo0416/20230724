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

        <div class="sanpai-main-visual">
            <h1>参拝・お祓い・御祈祷</h1>
        </div>

        <div class="sanpai-link">
            <div class="sanpai-method">
                    <div class="link-1">
                            <a href="<?php echo esc_url(home_url('/sanpai')); ?>">参拝方法</a>
                    </div>
                    <div class="link-2">
                            <a href="<?php echo esc_url(home_url('/gokitou'))?>">御祈祷のご案内</a>
                    </div>
                    <div class="link-3">
                            <a href="<?php echo esc_url(home_url('/initiation')); ?>">人生儀礼</a>
                    </div>
            </div> 
        </div>
                   
                    <!-- 本殿・拝殿を後ろから移した画像と「ご由緒」 -->
        <div class="sahou">
                <!-- 椿のロゴ -->
                <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿ロゴ"></div>
                <div class="sahou-txt">
                    <p>参拝の作法は、心身を清め、心静かに神前に向かっていただくための所作として受け継がれてきました。礼節を重んじることで、神様との結びつきも深まることでしょう。参拝の際は、ぜひ心がけてください。</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_sanpaihouhou.jpg" alt="">
                </div>
                <div class="temizu-sahou">
                    <h2>手水の作法</h2>
                    <p>神社には必ず手水舎（てみずや）があります。その水で身を清めてから神前に向かいます。</p>
                </div>
                <div class="sandou-sahou">
                    <h2>参道を歩く作法</h2>
                    <p>参道の中央は、神様の道とされています。<br>
                        参道の中央を避けて歩み、神前に向かってください。</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai00.jpg" alt="">
                </div>
                <div class="sanpai-sahou">
                    <h2>参拝の作法</h2>
                    <p>お賽銭を入れ、拝礼を行います。<br>拝礼は二拝二拍手一拝（二礼二拍手一礼）が基本作法です。</p>
                    <div class="sanpai-sahou-wrapper">
                            <!-- 二拝 -->
                    <div class="sahou-detail">
                        <div class="sahou-number-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai_num1-1.png" alt="1"></div>
                        <div class="sahou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai01.jpg" alt="二拝"></div>
                        <p>【二拝】<br>深いお辞儀を二回繰り返します。 </p>
                    </div>
                    <!-- 二拍手-1 -->
                    <div class="sahou-detail">
                        <div class="sahou-number-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai_num2-1.png" alt="1"></div>
                        <div class="sahou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai02.jpg" alt="二拍手"></div>
                        <p>【二拍手】<br>両手を胸の高さで合わせ、右手を少し手前に引いてずらし、拍手を二回します。 </p>
                    </div>
                     <!-- 二拍手-2 -->
                     <div class="sahou-detail">
                        <div class="sahou-number-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai_num3-1.png" alt="1"></div>
                        <div class="sahou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai03.jpg" alt="二拍手"></div>
                        <p>両手を合わせながら心を込めてお祈りを行います。 </p>
                    </div>
                     <!-- 一拝 -->
                     <div class="sahou-detail">
                        <div class="sahou-number-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai_num4-1.png" alt="1"></div>
                        <div class="sahou-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai01.jpg" alt="一拝"></div>
                        <p>【一拝】<br>最後にもう一度深いお辞儀をします。 </p>
                    </div>
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