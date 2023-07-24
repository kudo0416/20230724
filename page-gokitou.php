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
                <div class="purification-guidance">
                        <div class="link-1">
                                <a href="<?php echo esc_url(home_url('/sanpai')); ?>">参拝方法</a>
                        </div>
                        <div class="link-2">
                                <a href="<?php echo esc_url(home_url('/gokitou')); ?>">御祈祷のご案内</a>
                        </div>
                        <div class="link-3">
                                <a href="<?php echo esc_url(home_url('/initiation')); ?>">人生儀礼</a>
                        </div>
                </div> 
            </div>
        
            <div class="purification-wrapper">
                <!-- 椿のロゴ -->
                <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                <div class="pray-txt">
                    <h2>御祈祷のご案内</h2>
                    <p>ご祈祷とは、一般的なお賽銭を入れて拝礼する一般参拝とは異なり、より神様に丁寧に祈りを捧げる拝礼の方法です。皆様のお願い事が神様へ届くように、また心の平穏を導くように、神職が心をこめて御祈祷を致します。 また、七五三や厄祓など人生の節目節目での御祈祷も承っております。</p>
                </div>
                <div class="purification-container">
                <div class="purification-introduction">
                    <h2>お祓いとは</h2>
                    <p>
                        お祓いとは、心身を祓い清めるものです。<br>
                        御祈祷の中で、まず最初に行う儀式であり修祓(しゅばつ)といいます。<br>
                        神様の前に出る際は清らかになることが重要であるという神道の考え方に基づいています。
                    </p>
                </div>
                <div class="pray-introduction">
                    <h2>御祈祷とは</h2>
                    <p>
                        ご祈祷とは、皆様のお願い事を神様へお伝えするものです。<br>
                        まず皆様をお祓いをして、その後 神職が御神前で祝詞を 奏上いたします。<br>
                        お参りの作法などは神職が丁寧にお教えいたしますので ご安心ください。
                    </p>
                </div>
                </div>
                <div class="haidenn-img"></div>
            </div>

            <div class="sanpai-info">
                <div class="logo-tsubaki-1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿ロゴ">
                </div>
                <h2>参拝・御祈祷時間</h2>
                <div class="sanpai-time">
                     <p><span>【参拝時間】</span><br>閉門はございませんので終日ご参拝いただけます。</p>
                </div>
                <div class="sanpai-time">
                    <p><span>【授与所時間】</span><br>８：００～１６：００<br>授与所はお守りや御朱印などをお授けしているところです。</p>
                </div>
                <div class="sanpai-time">
                    <p><span>【御祈願受付時間】</span><br>各種御祈願の受付時間は９：００～１５：００までです。</p>
                </div>
                <div class="sanpai-supple">
                    <p>御祈願は随時お受けしておりますので当日お越しの方も御祈願をお受けいただけます。<br>
                        ※神様のお近くでの御祈願となりますので、神様に失礼にならない服装でお越しください。<br>
                        ※裸足やタンクトップ、肌が過度に露出するような服装の場合は受付出来かねますのでご注意ください。</p>
                </div>
            </div>

            <div class="purification-wrapper">
                <div class="gokitou-kinds">
                    <div class="logo-tsubaki-1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿ロゴ">
                    </div>
                    <h2>御祈祷料</h2>
                    <div class="kinds-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gokitousp.png" alt="祈願意表">
                    </div>
                    <p>ひとつの願意につき10,000円からお受けしております。<br>※神前結婚式は80,000円より承っております。<br>※神葬祭・年祭も承っております。詳しくは社務所までお問い合わせください。</p>
                    <div class="yakudoshi-table">
                        <a href="<?php echo esc_url(home_url('/yakudoshi')); ?>">厄年表はこちらから</a>
                    </div>
                </div>

                <div class="gokigan-flow">
                    <div class="logo-tsubaki-1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿ロゴ">
                    </div>
                    <h2>お祓い・御祈祷の流れ</h2>
                    <div class="flow-wrapper">
                    <div class="flow">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gokitou_num1.png" alt="１、申し込み">
                        <p>授与所窓口へお声がけください。</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai_img_juyojo.jpg" alt="酒列会館">
                    </div>
                    <div class="flow">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gokitou_num2.png" alt="２、ご記入">
                        <p>申込用紙をご記入いただいます。</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai_moushikomi.jpg" alt="申込用紙">
                    </div>
                    <div class="flow">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gokitou_num3.png" alt="３、準備">
                        <p>御祈祷準備の間、酒列会館待合所でお待ちいただきます。</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai_machiai_img.jpg" alt="酒列会館内">
                    </div>
                    <div class="flow">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gokitou_num4.png" alt="御祈祷">
                        <p>ご社殿へご案内いたします。御祈祷の所要時間はおおよそ15分～20分程度です。</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sanpai_gokitou_img.jpg" alt="祈願イメージ">
                    </div>
                    </div>
                </div>
            </div>

            <div class="purification-corporation">
                <div class="item">
                    <div class="item2">
                        <a href="<?php echo esc_url(home_url('/corporation')); ?>">
                            <h3>法人祈願のご案内</h3>
                            <p>法人・団体様の御祈願</p>
                        </a>
                    </div>  
                </div>
            </div>

            <div class="shrine-guidance">
                <p><a href="<?php echo esc_url(home_url('/keidai')); ?>">境内のご案内</a></p>
                <p>刻まれた歴史<br>という趣が<br>時を忘れさせる</p>
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