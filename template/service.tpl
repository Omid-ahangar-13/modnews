<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap_rtl.css">
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/responsiv-screen-down-768.css">
    <link rel="stylesheet" href="/css/responsiv-screen-up-768.css">
    <link rel="stylesheet" href="/css/fontawsome/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/service.css">
    <title>صفحه سرویس</title>
</head>
<body>
<header class="navbar-header">
    <div class="menu-icon">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <section class="container">
        <nav class="navbar col-36">
            <ul class="navbar-child col-36">
                <div class="nc-text-child">
                    <li class="nc-child" id="mobile">صفحه نخست
                        <ul class="home col-sm-8 col-md-6 col-lg-5" id="1234">
                            <li>عناوین اصلی اخبار</li>
                            <li>پیشخوان</li>
                        </ul>

                    </li>
                    <li class="nc-child" >سلامت</li>
                    <li class="nc-child">اجتماعی</li>
                    <li class="nc-child">علمی</li>
                    <li class="nc-child">اقتصادی</li>
                </div>
                <div class="icon">
                    <li class="nc-child ">
                        <i class="fa fa-search search"></i>
                    </li>
                    <li class="nc-child">
                        <i class="fa fa-wifi wifi" aria-hidden="true"></i>
                    </li>
                </div>
            </ul>
        </nav>
    </section>
</header>




<section>
    <div class="container">
        <div class="row">
            <article class="test-article col-xs-36 col-sm-36 col-md-35 col-lg-24">
                <div class="col-xs-36 col-ms-36">
                    <div class="ta-news col-xs-36 col-sm-23 col-md-12 col-xs-offset-1">
                            <span class="news-child col-xs-36 col-ms-36 ">
                                <h3>{$section4.header}</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 120px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    {foreach $section4.links as $news}
                                        <p class="col-xs-36">{$news.title}</p>
                                    {/foreach}
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style="height: 190px; margin-top: 5px;">
                                <h3>بهداشت</h3>
                                <span class="dot active dot_1" id="dot_1"> </span>
                                <span class="dot dot_1" id="dot_2" style="margin-left: 13px;"></span>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 60px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div id="slider_1">
                                    <div class="text_child_caption col-xs-36">
                                        {foreach $section5.links as $i}
                                            {if $i@index <= 2}
                                                <p class="col-xs-36">{$i.title}</p>
                                            {/if}
                                        {/foreach}
                                    </div>
                                    <div class="text_child_caption col-xs-36">
                                        {foreach $section5.links as $i}
                                            {if $i@index > 2 and $i@index < 6}
                                                <p class="col-xs-36">{$i.title}</p>
                                            {/if}
                                        {/foreach}
                                    </div>
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style="margin-top: 5px;">
                                <h3>درمان</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 30px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    {foreach $section6.links as $news}
                                        <p class="col-xs-36">{$news.title}</p>
                                    {/foreach}
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 5px;">
                                <h3>طب</h3>
                                <span class="dot active dot_2" id="dot_3"> </span>
                                <span class="dot dot_2" id="dot_4" style="margin-left: 13px;"></span>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 30px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div id="slider_2">
                                    <div class="text_child_caption col-xs-36">
                                        {foreach $section7.links as $i}
                                            {if $i@index <= 2}
                                                <p class="col-xs-36">{$i.title}</p>
                                            {/if}
                                        {/foreach}
                                    </div>
                                    <div class="text_child_caption col-xs-36">
                                        {foreach $section7.links as $i}
                                            {if $i@index > 2 and $i@index < 6}
                                                <p class="col-xs-36">{$i.title}</p>
                                            {/if}
                                        {/foreach}
                                    </div>
                                </div>


                            </span>


                    </div>
                   <div class="col-xs-35 col-ms-36 col-sm-30 col-md-22">
                       <div class="test-slider col-xs-36" style="height: 600px">
                           <div class="swiper-container" style="height: 600px">
                               <div class="swiper-wrapper">
                                   {foreach $section1 as $slider}
                                       <div class="swiper-slide col-xs-36">
                                           <a href="{$slider.link}"><img src="http://www.mednews.ir{$slider.img}" alt=""></a>
                                           <div class="text-swiper">
                                               <p>{$slider.rutitr}</p>
                                               <h3>{$slider.titr}</h3>
                                               <p>{$slider.subtitle}</p>
                                           </div>
                                       </div>
                                   {/foreach}
                               </div>
                               <!-- Add Arrows -->
                               <div class="swiper-pagination"></div>

                           </div>

                       </div>
                       <script src="/js/swiper.min.js"></script>
                       <script>
                           // sweper
                           var swiper = new Swiper('.swiper-container', {
                               slidesPerView: 1,
                               spaceBetween: 10,
                               pagination: {
                                   el: '.swiper-pagination',
                                   clickable: true,
                               },
                               autoplay: {
                                   delay: 3000,
                               },
                               navigation: {
                                   nextEl: '.swiper-button-next',
                                   prevEl: '.swiper-button-prev',
                               }
                           });
                       </script>


                       <div class="row">
                           <div class="test-gallery col-ms-36">
                               {foreach $section2 as $news}
                                   <span class="col-xs-16 col-ms-16 col-sm-8">
                                <figure>
                                    <img class="col-xs-36" src="http://www.mednews.ir{$news.img}" alt="">
                                    <figcaption>
                                            {$news.titr}
                                    </figcaption>
                                </figure>
                            </span>
                               {/foreach}
                           </div>
                       </div>
                       <div class="ta-news-2">
                           {foreach $section3 as $news}
                               <span class="col-xs-36 col-ms-36" style="margin-top: 8px">
                                <img class="col-xs-13 col-xs-offset-1" src="http://www.mednews.ir{$news.img}" alt="" style="height: 120px">
                                <p>{$news.rutitr}</p>
                                <h3 class="col-xs-22">{$news.titr}</h3>
                                <p>{$news.subtitle}</p>
                            </span>
                           {/foreach}
                       </div>
                   </div>
                </div>

            </article>
            <section class="test-slidbar col-xs-36 col-ms-36 col-sm-23 col-md-14 col-lg-10">
                <div class="test-slidbar-child col-xs-36 col-ms-36" style="margin-top: 15px;">
                    <h3 id="best" onclick="bestshow()">برگزیده ها</h3>
                    <h3 id="news" onclick="newsshow()">اخرین اخبار</h3>
                    <div style="width: 100%;height: 1px;background-color: black;">
                        <span id="span1" style="background-color: red; width: 85px; height: 2.5px;position: absolute;"></span>
                    </div>

                    <div id="text_best">
                        {foreach $section14 as $best}
                            <a href="{$best.link}"><p>{$best.titr}</p></a>
                        {/foreach}
                    </div>
                    <div id="text_news" style="display: none;">
                        <p>تست اخرین اخباار</p>
                        <p>1 سکته های قلبی در کمین بیماران کمبود خاب</p>
                        <p> 2 ایا دسکاه های لیزر خانگی مورز مقیدن</p>
                        <p>3 برای کنترل فشار خون به دکتر نیازی نیست</p>
                        <p>4 درمان بواسیر با طب سنتی</p>
                        <p>5 سکته های قلبی در کمین بیماران کمبود خاب</p>
                        <p> 6ایا دسکاه های لیزر خانگی مورز مقیدن</p>
                        <p>7 برای کنترل فشار خون به دکتر نیازی نیست</p>
                        <p>8 درمان بواسیر با طب سنتی</p>
                    </div>
                </div>
                <div class="col-xs-36 col-ms-36 col-sm-36 col-md-36" >
                    <img class=" col-xs-36" src="/media/01.PNG" alt="" style="height: 150px;">
                </div>
                <div class="lables col-xs-36 col-ms-36" style="height: 100px;margin-top: 15px;">
                    <h3>برچسب های منتخب</h3>
                    <div style="width: 100%;height: 1px;background-color: black;">
                        <span style="background-color: red; width: 150px; height: 2.5px;position: absolute;right: 0;"></span>
                    </div>
                    <span class="col-xs-36">
                                <p class="col-xs-11">اقتصاد معیشتی</p>
                                <p class="col-xs-11">سکته قلبی</p>
                                <p class="col-xs-11">جراحی پلاستیک</p>
                              </span>
                </div>
                <div class="press col-xs-36 col-ms-36" style=" margin-top: 15px;">
                    <h3>مطبوعات</h3>
                    <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: red; width: 90px; height: 2.5px;position: absolute;
                                right: 0;"></span>
                    </div>
                    <figure>
                        <a href="{$section15.link}"><img class="col-xs-36" src="http://www.mednews.ir{$section15.img}" alt="" style="margin-top: 12px;"></a>
                        <figcaption>
                            {$section15.titr}
                        </figcaption>
                    </figure>

                </div>
                <div class="visit col-xs-36 col-ms-36" style="margin-top: 15px;">
                    <h3 id="visited" onclick="visitshow()">پربازدیدها</h3>
                    <h3 id="discu" onclick="discushow()">پربحث ها</h3>
                    <div style="width: 100%;height: 1px;background-color: black;">
                        <span id="span" style="background-color: red; width: 85px; height: 2.5px;position: absolute;"></span>
                    </div>

                    <div id="text_visited">
                        {foreach $section16 as $visited}
                            <a href="{$visited.link}"><p>{$visited.titr}</p></a>
                        {/foreach}
                    </div>
                    <div id="text_discu" style="display: none;">
                        <p>1 سکته های قلبی در کمین بیماران کمبود خاب</p>
                        <p>2 ایا دسکاه های لیزر خانگی مورز مقیدن</p>
                        <p>3 برای کنترل فشار خون به دکتر نیازی نیست</p>
                        <p>4 درمان بواسیر با طب سنتی</p>
                    </div>


                </div>
            </section>

        </div>
    </div>
























<footer class="test-footer col-xs-36 col-ms-36 col-sm-36 col-md-36 col-lg-36">
            <span class="text-footer col-xs-36 col-ms-21 col-sm-15 col-md-13">
                <a class="col-xs-8 col-ms-9">
                    صفحه نخست
                </a>
                <span class="col-xs-7 col-ms-7">
                    سلامتی
                </span>
                <span class="col-xs-7 col-ms-7">
                    اجتماعی
                </span>
                <span class="col-xs-7 col-ms-7">
                    علمی
                </span>
                <span class="col-xs-7 col-ms-7">
                اقتصادی</span>
            </span>
    <span class="text-footer-2 col-xs-36 col-ms-36 col-sm-28 col-md-23 col-lg-22">
                <a href="#" class="col-xs-6 col-ms-4">
                    درباره ما
                </a>
                <span class="col-xs-6 col-ms-4">
                    تماس باما
                </span>
                <span class="col-xs-4 col-ms-3">
                    آرشیو
                </span>
                <span class="col-xs-6 col-ms-3">
                    پیوندها
                </span>
                <span class="col-xs-4 col-ms-3">
                    جستجو
                </span>
                <span class="col-xs-6 col-ms-4">
                    نظرسنجی
                </span>
                <span class="col-xs-4 col-ms-3">
                    خبرنامه
                </span>
                <span class="col-xs-5 col-ms-4">
                    آب و هوا
                </span>
                <span class="col-xs-7 col-ms-5">
                    اوقات شرعی
                </span>
                <span class="col-xs-4 col-ms-3">
                    RSS
                </span>
            </span>
    <span class="text-footer-3 col-xs-36 col-ms-36 col-sm-26 col-md-20">
                تمام حقوق مادی و معنوی این سایت متعلق به ایران سامانه می باشدواستفاده ازمطالب ان بازکرمنبع بلامانه است
            </span>
    <span class="text-footer-4 col-xs-36 col-ms-12 col-sm-8 col-md-6">
                طراحی و تولید "ایران سامانه"
            </span>
    <span class="icon-footer col-xs-16 col-ms-8 col-sm-6 col-md-5">
                <span class="col-xs-7 col-ms-7">
                    <img class="col-xs-36 col-ms-36" src="media/aparat-icon.png" alt="aparat">
                </span>
                <span class="col-xs-8 col-ms-8">
                    <i class="fab fa-telegram wifi" style="font-size:24px"></i>
                </span>
                <span class=" col-xs-8 col-ms-8">
                    <i class="fab fa-instagram wifi" style="font-size:24px"></i>
                </span>
                <span class="col-xs-8 col-ms-8">
                    <i class="fa fa-rss wifi" aria-hidden="true"></i>
                </span>
            </span>
</footer>
<script src="/js/fontawsome/all.min.js"></script>
<script src="/js/jquery.js"></script>
<script src="/js/scipt.js"></script>
</body>
</html>