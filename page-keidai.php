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

        <div class="keidai-main-visual">
            <h1>境内案内</h1>
        </div>
                   
        <div class="logo-wrapper">
                <!-- 椿のロゴ -->
                <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt=""></div>
                <!-- 由緒説明 -->
                <h2>時を忘れ、受け継がれた歴史を感じる</h2>
            </div>

            <div class="keidai-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/keidaizu.png" alt="">
            </div>
            <div class="keidai-detail">
                <ul>
                    
                    <li class="red-list"><span>&nbsp;1&nbsp;</span>本殿（ほんでん）</li>
                    <li class="red-list"><span>&nbsp;2&nbsp;</span>拝殿（はいでん）</li>
                    <li class="red-list"><span>&nbsp;3&nbsp;</span>リスとぶどうの彫刻</li>
                    <li class="gray-list"><span>&nbsp;4&nbsp;</span>酒列会館（さかつらかいかん）</li>
                    <li class="gray-list"><span>&nbsp;5&nbsp;</span>斎館（さいかん）</li>
                    <li class="red-list"><span>&nbsp;6&nbsp;</span>鎮霊社（ちんれいしゃ）</li>
                    <li class="gold-list"><span>&nbsp;7&nbsp;</span>幸運の亀</li>
                    <li class="gold-list"><span>&nbsp;8&nbsp;</span>斉昭公（なりあきこう）お腰かけ石</li>
                    <li class="red-list"><span>&nbsp;9&nbsp;</span>境内社</li>
                    <li class="gold-list"><span>10</span>狛犬（こまいぬ）</li>
                    <li class="gold-list"><span>11</span>海の見える鳥居</li>
                    <li class="gold-list"><span>12</span>酒列磯前神社の樹叢</li>
                    <li class="red-list"><span>13</span>御神輿（おみこし）</li>
                    <li class="red-list"><span>14</span>神楽殿（かぐらでん）</li>
                    <li class="red-list"><span>15</span>神馬舎（しんめしゃ）</li>
                    <li class="gray-list"><span>16</span>休憩所</li>
                    <li class="gold-list"><span>17</span>関東一の大灯籠跡地</li>
                    <li class="gold-list"><span>18</span>比観亭跡（ひかんていあと）</li>
                    <li class="gold-list"><span>19</span>磯﨑種吉（いそざきたねきち）翁銅像</li>
                    <li class="gray-list"><span>20</span>手水舎（ちょうずや）</li>

                </ul>
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