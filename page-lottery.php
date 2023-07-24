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

        <div class="kamesan-main-wrapper">
                <div class="kamesan-logo-tsubaki"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="幸運の亀さん"></div>
                <h3>幸運の亀さん</h3>
                <p>
                    ジョイフル本田ニューポートひたちなか店内の宝くじ売り場ジョイフル本田チャンスセンターでの、年末ジャンボ発売日に以後一年間の高額当選券発売と多くの方々が当選しますようにと、当社神職と巫女が売り場で祈願祭を依頼により執行しております。<br>
                    高額当選された方が当神社に縁起の良い亀石象を奉納されました。神社にお参りして、亀石象に触ると御利益があると評判になり、 大安日には大にぎわいになっています。当選を祈念いたします。
                </p>
                <div class="tousenkigan"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_kamesan01new.jpg" alt="宝くじ高額当選祈願祭について"></div>
                <div class="sanpai-method-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/kameinst.png" alt="幸運の亀さんの御利益を授かるには"></div>
            </div>

            <div class="sanpai-method-wrapper">
                <div class="sanpai-block">
                    <h2>①参道を通る</h2>
                    <p>
                        鳥居をくぐる際には、軽く一礼します。参道を進むときは参道の中央を進んではいけません。<br>
                        参道の中央は「正中」といいまして、神様が通る道なので、我々が通るところではないのです。
                    </p>
                </div>
                <div class="sanpai-block">
                    <h2>②手水舎で身を清める</h2>
                    <p>
                        一、右手で柄杓を取って、水を汲み、それをかけて左手を清めます。<br>
                        二、次に、左手に柄杓を持ちかえて、右手を清めます。<br>
                        三、再びひしゃくを右手に持ちかえて、左の手のひらに水を受け、その水を口にいれてすすぎます。<br>
                        四、すすぎ終わったら、水をもう一度左手にかけて清めます。<br>
                        五、使った柄杓を立てて、柄の部分に水を伝わらせるようにして清め、柄杓を元の位置に戻します。
                    </p>
                </div>
                <div class="sanpai-block">
                    <h2>③参拝をする</h2>
                    <p>
                        お賽銭を静かに入れましょう。 そして、「二礼二拍手一礼（二拝二拍手一拝）」を行います。
                    </p>
                    <div class="omairi-back-img"></div>
                </div>
                <div class="sanpai-block">
                    <h2>④ご所望の方には金運守の<br>
                        ご用意が御座います</h2>
                    <p>
                        授与所にて金運守のご用意が御座いますので ご所望の方はお受けいただけます。
                    </p>
                    <div class="amulet-back-img"></div>
                </div>
                <div class="sanpai-block2">
                    <h2>⑤幸運の亀さんをなでる</h2>
                    <p>
                        片手あるいは両手でしっかりと、なでてあげてください。<br>
                        御利益がありますように。
                    </p>
                    <div class="kamesan-back-img"></div>
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