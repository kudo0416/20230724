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

        <div class="corporation-main-visual">
                <h1>法人祈願のご案内</h1>
            </div>
        
            <div class="corporation-wrapper">
                <!-- 椿のロゴ -->
                <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿ロゴ"></div>
                <div class="corporation-txt">
                    <h2>法人・団体様向けの御祈願</h2>
                    <p>国土経営をつかさどる御祭神へ、御社のご繁栄を祈願いたします</p>
                </div>    
                
                <div class="kiganni-kinds">
                    <h2>安全祈願</h2>
                    <div class="border-div"></div>
                    <p>事業にまつわるあらゆるシーンにおいて安全祈願を承ります。工事安全祈願・職場安全祈願・従業員の交通安全祈願など、多様なご要望にお応えいたします。</p>
                </div>
                <div class="kiganni-kinds">
                    <h2>商売繁盛祈願</h2>
                    <div class="border-div"></div>
                    <p>御社のさらなる繁栄を御祈願いたします。<br>
                        新規事業の開始など、事業の節目などにも商売繫盛祈願をおすすめいたします。</p>
                </div>
                <div class="gaisai">
                    <div class="logo-tsubaki-1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿ロゴ">
                    </div>
                    <h2>出張祭典のご案内</h2>
                    <p>御社ご依頼地へ神職が出張し祭典を執り行います。</p>
                    <div class="kiganni-kinds">
                        <h2>地鎮祭</h2>
                        <div class="border-div"></div>
                        <p>建物などの建設前にはその土地の神様にご挨拶をして、工事が無事に進み、その土地を使う方々の繁栄を祈るためのおまつりです。</p>
                    </div>
                    <div class="kiganni-kinds">
                        <h2>安全祈願祭</h2>
                        <div class="border-div"></div>
                        <div class="kiganni-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_kigyousanpai01.png" alt="外祭種類"></div>
                        <p>上記以外でも、ご希望の場所にて安全祈願祭を執り行います。</p>
                    </div>
                </div>
            </div>
            <div class="kiganni-sonota">
                <h2>その他のおまつり</h2>
                <p>上棟祭・竣工祭・井戸の清め祓い・家屋のお祓い・事務所移転のお祓い等、上記の内容以外もご要望、ご相談承ります。お気軽にお問い合わせください。</p>
            </div>
            <div class="moushikomi">
                <div class="logo-tsubaki-1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿ロゴ">
                </div>
                <h2>法人・団体祈願の申し込み</h2>
                <div class="dantaikigann-flow">
                    <div class="flow-num"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kigyou_num1.png" alt="ご予約・ご相談"></div>
                    <p>お電話またはご来社いただきご予約またはご相談ください。</p>
                </div>
                <div class="juyosyo-info">
                     <h2>TEL&nbsp;029-265-8220</h2>
                        <p>【御祈願受付時間】<br>
                            各種御祈願の受付時間は９：００～１５：００までです。</p>
                </div>
                <div class="dantaikigann-flow">
                    <div class="flow-num"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kigyou_num2.png" alt="御祈願日程の確定"></div>
                    <p>ご来社または出張の日程を確定いたします。</p>
                </div>
                <div class="dantaikigann-flow">
                    <div class="flow-num"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kigyou_num3.png" alt="御祈願"></div>
                    <p>ご予約いただいた日取りにて御祈願を行います。</p>
                </div>
                <div class="sanpai-supple">
                    <p>※神様のお近くでの御祈願となりますので、神様に失礼にならない服装でお願いいたします。<br>
                       ※裸足やタンクトップ、肌が過度に露出するような服装の場合は受付出来かねますのでご注意ください。</p>
                </div>
            </div>
         <div class="corporation-backimg"></div>
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