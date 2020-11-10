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
    <title>صفحه نخست</title>
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
            <article class="test-article col-xs-36 col-ms-36 col-sm-32  col-md-21 col-lg-21">
                <div class="test-slider col-xs-36 col-ms-36 col-sm-35 col-md-35 col-lg-35 bg-info" style="height: 250px;">
                    <div class="swiper-container rm-margin-top">
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
                    <div class="test-gallery col-ms-36 col-sm-35 col-md-35 col-lg-35">
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

                <div class="col-xs-36 col-ms-36">
                    <div class="ta-news col-xs-36 col-ms-12 col-xs-offset-1">
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
                                <h3>{$section5.header}</h3>
                                <span class="dot active dot_1" id="dot_1"> </span>
                                <span class="dot dot_1" id="dot_2" style="margin-left: 13px;"></span>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 120px; height: 3px;position: absolute;right: 0;"></span>
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
                                <h3>{$section6.header}</h3>
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
                                <h3>{$section7.header}</h3>
                                <span class="dot active dot_2" id="dot_3"> </span>
                                <span class="dot dot_2" id="dot_4" style="margin-left: 13px;"></span>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 155px; height: 3px;position: absolute;right: 0;"></span>
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
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 5px;">
                                <h3>{$section8.header}</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 90px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    {foreach $section8.links as $news}
                                        <p class="col-xs-36">{$news.title}</p>
                                    {/foreach}
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 5px;">
                                <h3>{$section9.header}</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 35px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    {foreach $section9.links as $news}
                                        <p class="col-xs-36">{$news.title}</p>
                                    {/foreach}
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 5px;">
                                <h3>{$section10.header}</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 120px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    {foreach $section10.links as $news}
                                        <p class="col-xs-36">{$news.title}</p>
                                    {/foreach}
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 10px;">
                                <h3>{$section11.header}</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 70px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    {foreach $section11.links as $news}
                                        <p class="col-xs-36">{$news.title}</p>
                                    {/foreach}
                                </div>

                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 10px;">
                                <h3>{$section12.header}</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 210px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                {foreach $section12.links as $i}
                                    {if $i@index <= 2}
                                        <div class="text_child_caption col-xs-36">
                                            <p class="col-xs-36">{$i.title}</p>
                                        </div>
                                    {/if}
                                {/foreach}

                            </span>
                        <span class="col-xs-36 col-ms-36 "style="margin-top: 8px;">
                                <img class="col-xs-36" src="/media/20.PNG" alt="">
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 10px;">

                                    <h3>{$section13.header}</h3>
                                    <span class="dot active"> </span>
                                    <span class="dot" style="left: 12px;"> </span>

                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 55px; height: 3px;position: absolute;right: 0;"></span>
                                </div>

                                <div id="slider_2">
                                    {foreach $section13.links as $i}
                                        {if $i@index < 3}
                                            <div class="text_child_caption col-xs-36">
                                                <p class="col-xs-36">{$i.title}</p>
                                            </div>
                                        {else}
                                            <div class="text_child_caption col-xs-36"  style="display: none;">
                                                <p class="col-xs-36">{$i.title}</p>
                                            </div>
                                        {/if}
                                    {/foreach}
                                </div>
                            </span>
                    </div>
                    <div class="ta-news-2 col-xs-35 col-ms-23 col-sm-22">
                        {foreach $section3 as $news}
                            <span class="col-xs-36 col-ms-36 ">
                                <img class="col-xs-13 col-xs-offset-1" src="http://www.mednews.ir{$news.img}" alt="">
                                <p>{$news.rutitr}</p>
                                <h3 class="col-xs-22">{$news.titr}</h3>
                                <p>{$news.subtitle}</p>
                            </span>
                        {/foreach}
                    </div>
                </div>

            </article>
            <section class="test-slidbar col-xs-36 col-ms-36 col-sm-23 col-md-14 col-lg-14">
                <div class="col-xs-36 col-ms-36 col-sm-36 col-md-36" >
                    <img class=" col-xs-36 col-md-24 col-md-offset-1" src="/media/01.PNG" alt="" style="height: 150px;">
                    <img class="col-xs-17 col-xs-offset-2 col-ms-17 col-sm-17 col-md-11 col-md-offset-0" src="/media/02.PNG" alt="">
                    <img class="col-xs-17 col-md-11" src="/media/02.PNG" alt="">
                </div>
                <div class="test-slidbar-child col-xs-36 col-ms-36 col-md-24" style="margin-top: 15px;">
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
                <div class="lables col-xs-36 col-ms-36 col-md-24" style="height: 100px;margin-top: 15px;">
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
                <div class="press col-xs-36 col-ms-36 col-md-24" style=" margin-top: 15px;">
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
                <div class="visit col-xs-36 col-ms-36 col-md-24" style="margin-top: 15px;">
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
        <div class="row col-xs-36 col-ms-36 col-sm-36 col-md-36 col-lg-36">
            <div class="test-slider-footer-1">
                    <span class="text-slider col-xs-35 col-ms-28 col-sm-16 col-md-9 col-lg-9">
                        <span class="col-xs-36 col-ms-36">
                            <h3>{$section20.header}</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: #c50103; width: 45px; height: 2.5px;position: absolute;
                                right: 0;"></span>
                            </div>
                        </span>
                        {foreach $section20.links $news}
                            <span class="text-span col-xs-36 col-ms-36" style="margin-top: 3px;">
                                <h4 class="col-xs-20">{$news.title}</h4>
                                <a href="{$news.link}"><img class="col-xs-36" src="http://www.mednews.ir{$news.img}" alt=""></a>
                            </span>
                        {/foreach}
                    </span>
                <span class="text-slider col-xs-35 col-ms-28 col-sm-16 col-md-9 col-lg-9">
                        <span class="col-xs-36 col-ms-36">
                            <h3>{$section19.header}</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: #c50103; width: 60px; height: 2.5px;position: absolute;
                                right: 0;"></span>
                            </div>
                        </span>
                        {foreach $section19.links $news}
                            <span class="text-span col-xs-36 col-ms-36" style="margin-top: 3px;">
                                <h4 class="col-xs-20">{$news.title}</h4>
                                <a href="{$news.link}"><img src="http://www.mednews.ir{$news.img}" alt=""></a>
                            </span>
                        {/foreach}
                    </span>
                <span class="text-slider col-xs-35 col-ms-28 col-sm-16 col-md-9 col-lg-9">
                        <span class="col-xs-36 col-ms-36">
                            <h3>{$section18.header}</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: #c50103; width: 46px; height: 2.5px;position: absolute;
                                right: 0;"></span>
                            </div>
                        </span>
                        {foreach $section18.links $news}
                            <span class="text-span col-xs-36 col-ms-36" style="margin-top: 3px;">
                                <h4 class="col-xs-20">{$news.title}</h4>
                                <a href="{$news.link}"><img class="col-xs-30" src="http://www.mednews.ir{$news.img}" alt=""></a>
                            </span>
                        {/foreach}
                    </span>
                <span class="text-slider col-xs-35 col-ms-28 col-sm-16 col-md-9 col-lg-9">
                        <span class="col-xs-36 col-ms-36">
                            <h3>{$section17.header}</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: #c50103; width: 58px; height: 2.5px;position: absolute;
                                right: 0;"></span>
                            </div>
                        </span>

                        {foreach $section17.links $news}
                            <span class="text-span col-xs-36 col-ms-36" style="margin-top: 3px;">
                                <h4 class="col-xs-20">{$news.title}</h4>
                                <a href="{$news.link}"><img src="http://www.mednews.ir{$news.img}" alt=""></a>
                            </span>
                        {/foreach}
                    </span>
            </div>

            <div class="row col-xs-36 col-ms-36 col-sm-36 col-md-36 col-lg-36">
                <div class="test-slider-footer-2">
                        <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36">
                                <h3>{$section24.header}</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;margin-bottom: 5px;">
                                    <span style="background-color: #c50103; width: 58px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            {foreach $section24.links as $i}
                                {if $i@index eq 0}
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir{$i.img}" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        {$i.title}
                                    </span>
                                {else}
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36">{$i.title}</p>
                                    </div>
                                {/if}
                            {/foreach}
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                <h3>{$section23.header}</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 75px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            {foreach $section23.links as $i}
                                {if $i@index eq 0}
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir{$i.img}" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        {$i.title}
                                    </span>
                                {else}
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36">{$i.title}</p>
                                    </div>
                                {/if}
                            {/foreach}
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                <h3>{$section22.header}</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 65px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            {foreach $section22.links as $i}
                                {if $i@index eq 0}
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir{$i.img}" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        {$i.title}
                                    </span>
                                {else}
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36">{$i.title}</p>
                                    </div>
                                {/if}
                            {/foreach}
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                <h3>{$section21.header}</h3>
                                 <div style="width: 100%;height: 1px;background-color: rgb(0, 0, 0);">
                                    <span style="background-color: #c50103; width: 58px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            {foreach $section21.links as $i}
                                {if $i@index eq 0}
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir{$i.img}" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        {$i.title}
                                    </span>
                                {else}
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36">{$i.title}</p>
                                    </div>
                                {/if}
                            {/foreach}
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                <h3>{$section28.header}</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 55px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            {foreach $section28.links as $i}
                                {if $i@first}
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir{$i.img}" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        {$i.title}
                                    </span>
                                {else}
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36">{$i.title}</p>
                                    </div>
                                {/if}
                            {/foreach}
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                <h3>{$section27.header}</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 58px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            {foreach $section27.links as $i}
                                {if $i@index eq 0}
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir{$i.img}" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        {$i.title}
                                    </span>
                                {else}
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36">{$i.title}</p>
                                    </div>
                                {/if}
                            {/foreach}
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36">
                                <h3>{$section26.header}</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 65px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            {foreach $section26.links as $i}
                                {if $i@index eq 0}
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir{$i.img}" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        {$i.title}
                                    </span>
                                {else}
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36">{$i.title}</p>
                                    </div>
                                {/if}
                            {/foreach}
                    </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                 <h3>{$section25.header}</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 70px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            {foreach $section25.links as $i}
                                {if $i@first}
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir{$i.img}" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        {$i.title}
                                    </span>
                                {else}
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36">{$i.title}</p>
                                    </div>
                                {/if}
                            {/foreach}
                        </span>
                </div>
            </div>
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



</section>
<script src="/js/jquery.js"></script>
<script src="/js/fontawsome/all.min.js"></script>
<script src="/js/scipt.js"></script>
</body>

</html>

