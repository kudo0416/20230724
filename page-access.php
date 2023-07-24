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

        <div class="access-main-visual">
            <h1>交通と周辺観光のご案内</h1>
        </div>

        <div class="access-wrapper">
                <div class="access-txt">
                    <!-- 椿のロゴ -->
                    <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿のロゴ"></div>
                    <h2>鎮座地</h2>
                    <p>〒311-1202&emsp;茨城県ひたちなか市磯崎町4607-2<br>
                    TEL029-265-8220&emsp;FAX029-265-9290</p>
                </div>

                <div class="access-map">
                    <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿のロゴ"></div>
                    <h2>アクセスマップ</h2>
                    <!-- Google Map埋め込み -->
                </div>

                <div class="car-access">
                    <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿のロゴ"></div>
                    <h2>車でお越しの方</h2>
                    <p>北関東自動車道ひたちなかインターより10分（上野より約1時間50分、水戸より約30分）<br>
                        北関東自動車道ひたち海浜公園インターより10分<br>
                        無料駐車場、約60台駐車可能／大型観光バス15台駐車可能</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access01-768x168.png" alt="有料道路図">
                </div>

                <div class="train-access">
                    <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿のロゴ"></div>
                    <h2>電車でお越しの方</h2>
                    <p>JR常磐線各駅から乗車後、JR勝田駅にて降車。ひたちなか海浜鉄道湊線に乗り換え磯崎駅にて降車。<br>
                        磯崎駅より徒歩約10分で酒列磯前神社に到着いたします。</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access02-768x475.png" alt="電車の路線図">
                </div>

                <div class="sightseeing">
                    <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿のロゴ"></div>
                    <h2>周辺観光のご案内</h2>
                    <div class="sightseeing-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access_area01.jpg" alt="国営ひたち海浜公園">
                        <h3>国営ひたち海浜公園</h3>
                        <p>四季を通して季節の花の絶景を観賞できます。特に４月から５月にかけてのネモフィラ・９月から１０月にかけての紅葉コキアの美しさは圧巻で、毎年多くの観光客で賑わっております。</p>
                    </div>
                    <div class="sightseeing-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access_area02.jpg" alt="那珂湊おさかな市場">
                        <h3>那珂湊おさかな市場</h3>
                        <p>那珂湊漁港隣接の魚市場で、新鮮な魚介・加工品が買え、また海鮮丼やお寿司も味わえます。リーズナブルな価格も魅力的です。</p>
                    </div>
                    <div class="sightseeing-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access_area03.jpg" alt="磯崎漁業協同組合">
                        <h3>磯崎漁業協同組合</h3>
                        <p>国内トップクラスの衛生管理市場を保有し、「獲れない魚はない」ほど多様な魚を漁獲しています。特産品として一口アワビがあり、絶品です。</p>
                    </div>
                    <div class="sightseeing-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access_area04.jpg" alt="阿字ヶ浦海岸">
                        <h3>阿字ヶ浦海岸</h3>
                        <p>約1.2キロメートルの弧を描く海岸で、美しい景観が楽しめます。</p>
                    </div>
                    <div class="sightseeing-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access_area05.jpg" alt="ファッションクルーズ・ジョイフル本田">
                        <h3>ファッションクルーズ・ジョイフル本田</h3>
                        <p>巨大複合ショッピングモールです。ジョイフル本田に入っている宝くじ売り場にて、毎年当社が当選祈願を行っております。</p>
                    </div>
                    <div class="sightseeing-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access_area06.jpg" alt="偕楽園">
                        <h3>偕楽園</h3>
                        <p>金沢の兼六園、岡山の後楽園とならぶ「日本三名園」のひとつ。天保13年(1842)に水戸藩第九代藩主徳川斉昭公によって造園されました。２月から３月にかけての梅まつりが有名です。</p>
                    </div>
                    <div class="sightseeing-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access_area07.jpg" alt="アクアワールド茨城県大洗水族館">
                        <h3>アクアワールド茨城県大洗水族館</h3>
                        <p>大洗町にある日本でもトップクラスの大型水族館。世界中の水の生き物を紹介しており、なかでもサメの飼育種類は日本一を誇ります。</p>
                    </div>
                    <div class="sightseeing-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access_area08.jpg" alt="かねふくめんたいパーク大洗">
                        <h3>かねふくめんたいパーク大洗</h3>
                        <p>明太子専門のテーマパーク。明太子の工場を無料で見学できます。フードコーナーでは大きな明太子おにぎりを味わえます。</p>
                    </div>
                    <div class="sightseeing-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_access_area09.jpg" alt="ホテルニュー白亜紀">
                        <h3>ホテルニュー白亜紀</h3>
                        <p>天然温泉が湧いている当社のお隣にあるホテルです。露天風呂からは海も見えるオーシャンビューの温泉です。日帰り入浴もできます。</p>
                    </div>
                </div>  
            </div>
            <div class="sanpai">
                <p><a href="<?php echo esc_url(home_url('/sanpai')); ?>">参拝・お祓い・御祈祷</a></p>
                <p>神々を敬い<br>畏怖の念を抱く</p>
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