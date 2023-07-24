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
            <div class="initiation-link">
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
        </div>
                   
        <div class="initiation-txt">
                <!-- 椿のロゴ -->
                <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                <h2>人生儀礼</h2>
                <p>いまここの感謝と未来への希望をご祈願いたします。</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_jinseigirei.jpg" alt="人生儀礼">
            </div>

            <div class="initiation-list-wrapper">
                <!-- 安産祈願 -->
                <div class="initiation-list">
                    <div class="initiation-tsubaki"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                    <h2><span>安産祈願</span></h2>
                    <h2>出会えることを願って</h2>
                    <p>無事赤ちゃんが生まれることは元より、お母様の心身の無事も合わせて神様に御祈願いたします 。</p>
                    <div class="initiation-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/baby.png" alt="安産祈願・赤ちゃん"></div>
                </div>
                <!-- 初宮詣 -->
                <div class="initiation-list">
                    <div class="initiation-tsubaki"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                    <h2><span>初宮詣</span></h2>
                    <h2>はじめましてのごあいさつ</h2>
                    <p>神様に赤ちゃんが無事に生まれたことのご報告と、今後の健やかな ご成長を祈願する大切な神事です 。</p>
                </div>
                <!-- 七五三 -->
                <div class="initiation-list">
                    <div class="initiation-tsubaki"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                    <h2><span>七五三</span></h2>
                    <h2>成長に幸せを感じる</h2>
                    <p>お子様が無事に育っていることへの感謝を伝え、これからのご成長を願う神事です。</p>
                </div>
                <!-- 合格祈願 -->
                <div class="initiation-list">
                    <div class="initiation-left_image">
                        <div class="pass_girl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pass_girl.png" alt="合格祈願イメージ画像"></div>
                        <div class="initiation-tsubaki"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                    </div>
                    <h2><span>合格祈願</span></h2>
                    <h2>御祭神を味方に</h2>
                    <p>少彦名命は学業の神様である菅原道真公が生前に学問の神として崇敬されておりました。そのため知の神様としても考えられることから受験や就職等の合格祈願を承っております。</p>
                </div>
                <!-- 成人祭 -->
                <div class="initiation-list">
                    <div class="initiation-tsubaki"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                    <h2><span>成人祭</span></h2>
                    <h2>育ててくれた感謝と輝く未来</h2>
                    <p>成人は人生で重要な節目です。冠婚葬祭の「冠」は、成人式をあらわしており、古くから重要な行事とされてきました。
                        大切な節目が良いスタートとなるように御祈願致します。</p>
                </div>
                <!-- 厄祓 -->
                <div class="initiation-list">
                    <div class="initiation-left_image">
                        <div class="oonusa"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/oonusa.png" alt="合格祈願イメージ画像"></div>
                        <div class="initiation-tsubaki"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                    </div>
                    <h2><span>厄祓</span></h2>
                    <h2>人生の平穏を祈る</h2>
                    <p>人生の節目である厄年には人に起こりうる病気・事故・怪我などの厄(やく)を祓い、厄年に当たる期間を無事健康に過ごせますようにと神様に御祈願するものです。</p>
                </div>
                <!-- 結婚式 -->
                <div class="initiation-list">
                    <div class="initiation-right_image">
                        <div class="marry"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/marry.png" alt="結婚式イメージ画像"></div>
                        <div class="initiation-tsubaki"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                    </div>
                    <h2><span>結婚式</span></h2>
                    <h2>これからも幸せが続きますように</h2>
                    <p>平安時代御創建の当社で心に残る神前結婚式を承っております。お二人の末永い幸せとご両家の繁栄を願って式を執り行います。ものです。</p>
                </div>
                <!-- 年祝い -->
                <div class="initiation-list">
                    <div class="initiation-right_image">
                        <div class="toshiiwai"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/toshiiwai.png" alt="年祝いイメージ画像"></div>
                        <div class="initiation-tsubaki"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                    </div>
                    <h2><span>年祝い</span></h2>
                    <h2>歩んできた人生に感謝</h2>
                    <p>還暦をはじめとして70歳の古希、77歳の喜寿など、節目で行う長寿祝いです。</p>
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