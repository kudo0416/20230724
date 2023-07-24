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
                   
                    <!-- 本殿・拝殿を後ろから移した画像と「ご由緒」 -->
        <div class="about-main-visual">
            <p>年中行事</p>
        </div>
        <div class="event-wrapper">
                <div class="event-txt">
                    <div class="logo-tsubaki-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tsubaki.png" alt="椿のロゴ"></div>
                    <h2>催事・行事</h2>
                </div>
                <div class="month-event">
                    <h2>1月</h2>
                    <ul>
                        <li>歳旦祭（初詣）</li>
                        <li>大漁祈願祭</li>
                    </ul>
                </div>
                <div class="month-event">
                    <h2>2月</h2>
                    <ul>
                        <li>節分祭</li>
                        <li>建国祭</li>
                        <li>祈年祭</li>
                        <li>天長祭</li>
                    </ul>
                </div>
                <div class="month-event">
                    <h2>3月</h2>
                    <ul>
                        <li>酒列鎮霊社春季慰霊祭</li>
                        <li>さかつら椿開花時期</li>
                    </ul>
                </div>
                <div class="month-event">
                    <h2>4月</h2>
                    <ul>
                        <li>太太神楽祭</li>
                        <li>昭和祭</li>
                    </ul>
                </div>
                <div class="month-event">
                    <h2>5月</h2>
                </div>
                <div class="month-event">
                    <h2>6月</h2>
                    <ul>
                        <li>夏越の大祓</li>
                    </ul>
                </div>
                <div class="month-event">
                    <h2>7月</h2>
                </div>
                <div class="month-event">
                    <h2>8月</h2>
                    <ul>
                        <li>酒列磯前神社例祭</li>
                        <li>平磯三社祭※三年に一度の斎行です</li>
                    </ul>
                </div>
                <div class="month-event">
                    <h2>9月</h2>
                    <ul>
                        <li>酒列鎮霊社みたま祭</li>
                    </ul>
                </div>
                <div class="month-event">
                    <h2>10月</h2>
                    <ul>
                        <li>神嘗祭奉祝祭</li>
                        <li>酒列磯前祭</li>
                    </ul>
                </div>
                <div class="month-event">
                    <h2>11月</h2>
                    <ul>
                        <li>明治祭</li>
                        <li>新嘗祭</li>
                        <li>七五三</li>
                    </ul>
                </div>
                <div class="month-event">
                    <h2>12月</h2>
                    <ul>
                        <li>年越しの大祓</li>
                        <li>大晦日</li>
                    </ul>
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