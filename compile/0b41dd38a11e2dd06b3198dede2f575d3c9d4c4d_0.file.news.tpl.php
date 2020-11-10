<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-07 18:50:16
  from 'C:\Users\omid_ahangar\Desktop\smarty\template\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa6ec681ac398_21616262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b41dd38a11e2dd06b3198dede2f575d3c9d4c4d' => 
    array (
      0 => 'C:\\Users\\omid_ahangar\\Desktop\\smarty\\template\\news.tpl',
      1 => 1604775013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa6ec681ac398_21616262 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
    <link rel="stylesheet" href="/css/style_political.css">
    <title>صفحه خبر</title>
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
<div class="container">
    <div class="test-slider col-xs-36 col-ms-36 col-sm-36 col-md-36 col-lg-36" style="height: 135px;">
        <div class="swiper-container rm-margin-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../../media/593_261-1.jpg" alt="">
                    <h3>
                        مردان به‌نسبت زنان بیشتر به انجام مراقبت‌های پیشگیرانه و سلامتی نیاز دارند
                    </h3>
                </div>
                <div class="swiper-slide">
                    <img src="../../media/594_503-2.jpg" alt="">
                    <h3>
                        مادران شیرده بخوانند؛ ر‌اهکار‌هایی ساده برای افزایش شیر که از آن بی‌خبرید
                    </h3>
                </div>
                <div class="swiper-slide">
                    <img class="col-xs-15" class="imges" src="../../media/595_592-3.jpg" alt="">
                    <h3>
                        فاکتورهای پرخطر ابتلا به زوال عقل را بشناسیم
                    </h3>
                </div>
                <div class="swiper-slide">
                    <img src="../../media/591_376-4.jpg" alt="">
                    <h3>
                        دلایل گرایش به زیبایی صورت / آموزش همگانی ضعیف است
                    </h3>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
    <?php echo '<script'; ?>
 src="/js/swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
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
            },
            breakpoints:{
                640: {
                    slidesPerView : 1,
                    spaceBetween : 10,
                },
                768: {
                    slidesPerView : 2,
                    spaceBetween : 10,
                },
                1024: {
                    slidesPerView : 3,
                    spaceBetween : 10,
                },
            }
        });
    <?php echo '</script'; ?>
>
    <div class="row">
        <article class="test-article col-xs-36 col-ms-36 col-sm-36  col-md-27 col-lg-27" style="margin: 20px 0px">
            <div class="col-xs-36 col-ms-36" style="display: flex;flex-wrap: wrap">
                <div class="ta-news col-xs-36 col-ms-36 col-sm-36 col-md-9 col-lg-9">
                        <span class="news col-xs-36 col-ms-36 col-sm-18 col-md-36">
                            <h3>تجهیزات پزشکی</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: green; width: 120px; height: 3px;position: absolute;right: 0;"></span>
                            </div>
                            <div class="text_child_caption col-xs-36">
                                <p class="col-xs-36">برای کنترل فشار خون به دکتر نیازی نیست!</p>
                                <p class="col-xs-36">لزام شرکت های تجهیزات پزشکی ارایه مستندات خدمات پس از فروش</p>
                                <p class="col-xs-36">وجود600کارخونه نجهیزات پزشکی درایران</p>
                            </div>
                        </span>
                    <span class="news col-xs-36 col-ms-36 col-sm-18 col-md-36"style="height: 190px; margin-top: 5px;">
                            <h3>بهداشت و درمان</h3>
                            <span class="dot active dot_1" id="dot_1"> </span>
                            <span class="dot dot_1" id="dot_2" style="margin-left: 13px;"></span>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: green; width: 120px; height: 3px;position: absolute;right: 0;"></span>
                            </div>
                            <div id="slider_1">
                                <div class="text_child_caption col-xs-36">
                                    <p class="col-xs-36">تاثیر غذا های کنسرو شده در بار داری در سلامت باروری کودک</p>
                                    <p class="col-xs-36">روغن ماهی به  پیش گیری از سقط جنین کمک می کند</p>
                                    <p class="col-xs-36">دریاچه ارومیه ماندگار می شود؟</p>
                                </div>
                                <div class="text_child_caption col-xs-36"  style="display: none;">
                                    <p class="col-xs-36">1تاثیر غذا های کنسرو شده در بار داری در سلامت باروری کودک</p>
                                    <p class="col-xs-36">1روغن ماهی به  پیش گیری از سقط جنین کمک می کند</p>
                                    <p class="col-xs-36">1دریاچه ارومیه ماندگار می شود؟</p>
                                </div>
                            </div>
                        </span>
                    <span class="news col-xs-36 col-ms-36 col-sm-18 col-md-36"style="margin-top: 5px;">
                            <h3>طب</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: green; width: 30px; height: 3px;position: absolute;right: 0;"></span>
                            </div>
                            <div class="text_child_caption col-xs-36">
                                <p class="col-xs-36">تاثیر غذا های کنسرو شده در بار داری در سلامت باروری کودک</p>
                                <p class="col-xs-36">روغن ماهی به  پیش گیری از سقط جنین کمک می کند</p>
                                <p class="col-xs-36">پله نوردی سریع ترین راه برای کاهش وزنحفظ سلامت قلب و عروق ا</p>
                            </div>
                        </span>
                    <span class="news col-xs-36 col-ms-36 col-sm-18 col-md-36"style=" margin-top: 5px;">
                            <h3>اورژانس وهلال احمر</h3>
                            <span class="dot active dot_2" id="dot_3"> </span>
                            <span class="dot dot_2" id="dot_4" style="margin-left: 13px;"></span>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: green; width: 155px; height: 3px;position: absolute;right: 0;"></span>
                            </div>
                            <div id="slider_2">
                                <div class="text_child_caption col-xs-36">
                                    <p class="col-xs-36">تاثیر غذا های کنسرو شده در بار داری در سلامت باروری کودک</p>
                                    <p class="col-xs-36">روغن ماهی به  پیش گیری از سقط جنین کمک می کند</p>
                                    <p class="col-xs-36">دریاچه ارومیه ماندگار می شود؟</p>
                                </div>
                                <div class="text_child_caption col-xs-36"  style="display: none;">
                                    <p class="col-xs-36">1تاثیر غذا های کنسرو شده در بار داری در سلامت باروری کودک</p>
                                    <p class="col-xs-36">1روغن ماهی به  پیش گیری از سقط جنین کمک می کند</p>
                                    <p class="col-xs-36">1دریاچه ارومیه ماندگار می شود؟</p>
                                </div>
                            </div>


                        </span>
                    <span class="news col-xs-36 col-ms-36 col-sm-18 col-md-36"style=" margin-top: 5px;">
                            <h3>محیط زیست</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: green; width: 90px; height: 3px;position: absolute;right: 0;"></span>
                            </div>
                            <div class="text_child_caption col-xs-36">
                                <p class="col-xs-36">تاثیر غذا های کنسرو شده در بار داری در سلامت باروری کودک</p>
                                <p class="col-xs-36">روغن ماهی به  پیش گیری از سقط جنین کمک می کند</p>
                                <p class="col-xs-36">دریاچه ارومیه ماندگار می شود؟</p>
                            </div>
                        </span>
                    <span class="news col-xs-36 col-ms-36 col-sm-18 col-md-36"style=" margin-top: 5px;">
                            <h3>بیمه</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: green; width: 35px; height: 3px;position: absolute;right: 0;"></span>
                            </div>
                            <div class="text_child_caption col-xs-36">
                                <p class="col-xs-36">تاثیر غذا های کنسرو شده در بار داری در سلامت باروری کودک</p>
                                <p class="col-xs-36">روغن ماهی به  پیش گیری از سقط جنین کمک می کند</p>
                                <p class="col-xs-36">دریاچه ارومیه ماندگار می شود؟</p>
                            </div>
                        </span>
                    <span class="news col-xs-36 col-ms-36 col-sm-18 col-md-36"style=" margin-top: 5px;">
                            <h3>تازه های پزشکی</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: green; width: 120px; height: 3px;position: absolute;right: 0;"></span>
                            </div>
                            <div class="text_child_caption col-xs-36">
                                <p class="col-xs-36">تاثیر غذا های کنسرو شده در بار داری در سلامت باروری کودک</p>
                                <p class="col-xs-36">روغن ماهی به  پیش گیری از سقط جنین کمک می کند</p>
                                <p class="col-xs-36">دریاچه ارومیه ماندگار می شود؟</p>
                            </div>
                        </span>
                    <span class="news col-xs-36 col-ms-36 col-sm-18 col-md-36"style=" margin-top: 10px;">
                            <h3>کنگره ها</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: green; width: 70px; height: 3px;position: absolute;right: 0;"></span>
                            </div>
                            <div class="text_child_caption col-xs-36">
                                <p class="col-xs-36">تاثیر غذا های کنسرو شده در بار داری در سلامت باروری کودک</p>
                                <p class="col-xs-36">روغن ماهی به  پیش گیری از سقط جنین کمک می کند</p>
                                <p class="col-xs-36">دریاچه ارومیه ماندگار می شود؟</p>
                            </div>

                        </span>
                    <span class="news col-xs-36 col-ms-36 col-sm-18 col-md-36"style=" margin-top: 10px;">
                            <h3>امزش وپرورش ودانشگاه</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: green; width: 185px; height: 3px;position: absolute;right: 0;"></span>
                            </div>

                        </span>
                </div>
                <div class="news_tool col-xs-36 col-ms-36 col-sm-36 col-md-27">
                    <div class="news_tools col-xs-36 bg-success" >
                        <div class="row">
                            <div class="service col-xs-36 col-sm-25 col-md-36 col-lg-25">
                                <div>
                                        <span>
                                            <a href="#">۱۱:۴۶ - ۲۹ آبان ۱۳۹۷</a>
                                        </span>
                                </div>
                                <div>
                                    <a href="#">سلامت</a>
                                    <span> / </span>
                                    <a href="#">بهداشت</a>
                                </div>
                            </div>
                            <div class="soctial col-xs-36 col-sm-11 col-md-36 col-lg-11">
                                <a href="#"><i class="fa fa-print" ></i></a>
                                <a href="#"><i class="fa fa-envelope" ></i></a>
                                <a href="#"><i class="fa fa-save" ></i></a>
                                <span>
                                        <a href="#"><i class="fa fa-minus" ></i></a>
                                    </span>
                                <a href="#">
                                    پ
                                </a>
                                <span>
                                        <a href="#"><i class="fa fa-plus" ></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <section class="political col-xs-36">
                        <a href="#" class="rutitr col-xs-36">رئیس مرکز مدیریت شبکه وزارت بهداشت مطرح کرد؛</a>
                        <h1 class="title">
                            مردان به‌نسبت زنان بیشتر به انجام مراقبت‌های پیشگیرانه و سلامتی نیاز دارند
                        </h1>
                        <figure>
                            <img class="col-xs-25 col-sm-16 col-md-36" src="../../media/593_261-1.jpg" alt="">
                            <figcaption>
                                شریعتی گفت: مردان حتی نسبت به زنان نیاز بیشتری به انجام مراقبت های پیشگیرانه و سلامتی مانند اندازه گیری فشار خون و وزن دارند.
                            </figcaption>
                        </figure>
                        <p>
                            به گزارش مدنیوز، محمد شریعتی قائم مقام معاون بهداشت وزارت‌بهداشت در اجلاس سراسری معاونان فنی و اجرایی و مدیران گروه توسعه معاونت های بهداشت دانشگاه‌های علوم‌پزشکی کشور که در اصفهان برگزار شد، افزود: براساس آخرین آمار، روزانه حدود 700 هزار نفر در کشور با مراجعه به پایگاه‌ها و مراکز جامع سلامت شهری و روستایی از خدمات مراقبتی و پیشگیرانه برخوردار می‌شوند، اما آنچه برای ما اهمیت دارد، نتیجه‌گرا بودن این خدمات است.
                        </p>
                        <p>
                            وی با تاکید بر اینکه باید آموزش‌ها و توصیه‌های ارائه شده به مردم توسط پزشکان و کارشناسان مراکز بهداشتی در زندگی روزمره کاربردی شود، تصریح کرد: اگر مادری باردار به مرکز بهداشتی مراجعه کرد و اقدامات انجام شده برای وی در سامانه‌های الکترونیکی نیز ثبت شد، اما هنوز نمی‌داند که چه نوع خوراکی برای فرزند وی مناسب است، یعنی همه خدمات و مراقبت‌های انجام شده بی فایده بوده است.
                        </p>
                        <p>
                            قائم مقام معاون بهداشت وزارت بهداشت، پایش و ارزشیابی خدمات ارائه شده برای بررسی نتیجه‌گرا بودن آن را مهم دانست و گفت: بر این اساس، نظام ارزشیابی خدمات بهداشتی روز به روز کامل شده و تخصیص منابع به مراکز بهداشت براساس نتایج این پایش و راستی آزمایی صورت می‌گیرد.
                        </p>
                        <p>
                            رئیس مرکز مدیریت شبکه وزارت بهداشت با اشاره به راه اندازی سامانه ارسال پیامک نظرسنجی از مراجعه کنندگان به مراکز بهداشتی از اسفند سال گذشته، گفت: پیش بینی اولیه ما برای پاسخ دهی مردم به این پیامک ها 10 درصد بود، اما اکنون بیش از 17 درصد کاربران به پیامک‌ها پاسخ می دهند.
                        </p>
                        <p>
                            شریعتی با بیان اینکه طرح تشکیل پرونده الکترونیک سلامت برای همه مردم هنوز در ابتدای راه قرار دارد، افزود : این طرح بزرگ مبتنی بر فناوری اطلاعات و برای ارتقای سلامت ملت ایران است.
                        </p>
                        <p>
                            وی افزود: از حدود 55 میلیون و 300 هزار پرونده تشکیل شده در بخش بهداشت کشور، 26 میلیون و 500 هزار متعلق به مردان و 28 میلیون و 800 هزار متعلق به بانوان است.
                        </p>
                        <p>
                            شریعتی با تاکید بر اینکه خانه‌ها و پایگاه‌های بهداشت آماده هرگونه خدمت رسانی به مراجعه کنندگان زن و مرد هستند، تصریح کرد: این باور در جامعه ما به نادرستی ایجاد شده است که خدمات کمتری برای مردان در مراکز بهداشت کشور ارائه می شود.
                        </p>
                        <p>
                            رئیس مرکز مدیریت شبکه وزارت بهداشت با اشاره به اینکه مردان حتی نسبت به زنان نیاز بیشتری به انجام مراقبت های پیشگیرانه و سلامتی مانند اندازه گیری فشار خون و وزن دارند، گفت: ما از همه مردم به ویژه مردان دعوت می کنیم برای دریافت خدمات بهداشت به خانه‌ها و پایگاه‌های بهداشت شهرها و روستاها مراجعه کنند.
                        </p>
                        <p>
                            شریعتی با اشاره به نقش پیشگیری معاونت بهداشت، اضافه کرد: برخی مواقع مردم منتظر یک درد یا بیماری هستند تا پس از آن به بخش سلامت مراجعه کنند در حالی که در عصر حاضر مردم باید برای حفظ و ارتقای سلامتی خود در زمان حال و آینده و ارتقای کیفیت زندگی به مراکز بهداشت مراجعه کنند.
                        </p>
                        <div class="row lables-2">
                            <h4 class="col-xs-9 col-sm-6 col-md-8 col-lg-6"> <i class="fa fa-tag" style="font-size: 15px;margin-left: 5px"></i>برچسب ها:</h4>
                            <p class="col-xs-9 col-sm-5 col-md-8 col-lg-5">وزیربهداشت</p>
                            <p class="col-xs-8 col-sm-4 col-md-7 col-lg-4">پزشک</p>
                            <p class="col-xs-8 col-sm-4 col-md-7 col-lg-4">سیاسی</p>
                        </div>
                        <span class="col-xs-36 icon-menu">
                                    <a href="#"class="col-xs-14 col-ms-12 col-sm-8 col-md-12 col-lg-8"><i class="fa fa-home"></i>بازدید از صفحه اول</a>
                                    <a href="#" class="col-xs-13 col-ms-11 col-sm-7 col-md-11 col-lg-7"><i class="fa fa-envelope-open"></i>ارسال به  دوستان</a>
                                    <a href="#" class="col-xs-10 col-ms-8 col-sm-5 col-md-8 col-lg-5"><i class="fa fa-print"></i>نسخه چاپی</a>
                                    <a href="#" class="col-xs-9 col-ms-7 col-sm-5 col-md-7 col-lg-5"><i class="fa fa-envelope"></i>خبر نامه</a>
                                    <a href="#" class="col-xs-10 col-ms-8 col-sm-6 col-md-8 col-lg-6"><i class="fa fa-exclamation-triangle error-news" aria-hidden="true"></i>گزارش خظا</a>
                                  </span>
                        <div class="row">
                                    <span class="icon-media col-xs-36 col-sm-16">
                                        <a href="#"><i class="fas fa-paper-plane"></i></a>
                                        <a href="#"><i class="fab fa-google-plus"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                    </span>
                            <span class="row col-xs-36 col-sm-19 link-medNews col-sm-pull-1">
                                        <h3 class="col-xs-17">لینک کوتاه:</h3>
                                           <a href="#" class="col-xs-17"> mednews.ir/00001a</a>
                                    </span>
                        </div>
                        <form action="" class="form-inline forms col-xs-36">
                            <h4>ارسال نظر</h4>
                            <div class="form-grop">
                                <div class="form-grop col-sm-18">
                                    <label for="name" style="margin-left: 15px;">نام :     </label>
                                    <input id="name" type="text" class="form-control">
                                    <br>
                                    <label for="email"  style="margin-left: 5px;">ایمیل :   </label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <label for="textarea">*نظر  :</label>
                                <textarea id="textarea" class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                <input type="submit" value="ارسال" class="col-xs-36 col-ms-36  col-sm-14 btn">
                            </div>
                        </form>
                    </section>
                </div>
            </div>

        </article>
        <section class="test-slidbar col-xs-36 col-ms-36 col-sm-36 col-md-9 col-lg-9" style="margin: 20px 0;padding: 10px">
            <div class="col-xs-36 col-ms-36 col-sm-18 col-md-36" >
                <img class="col-xs-36 col-md-36" src="/media/01.PNG" alt="" style="height: 120px;">
            </div>
            <div class="row col-xs-36 col-ms-36 col-sm-18 col-md-36" style="padding: 10px">
                <div class="lables-1 col-xs-36">
                    <h3 id="lable-items" class="lable-items col-xs-5" style="color: #1b1b1b">طلا</h3>
                    <h3 id="lable-items-1" class="lable-items col-xs-5">ارز</h3>
                    <h3 id="lable-items-2" class="lable-items col-xs-6 col-md-9 col-lg-9">بورس</h3>
                    <h3 id="lable-items-3" class="lable-items col-xs-6 col-md-9 col-lg-9">خودرو</h3>
                    <h3 id="lable-items-4" class="lable-items col-xs-5 col-xs-5">سکه</h3>

                </div>
                <div class="col-xs-36" style="height: 1px;background-color: black;z-index: 1;">
                    <span id="lables-1" style="background-color: red; width: 40px; height: 3px;position: absolute;right: 0;"></span>
                </div>

            </div>
            <div class="lables col-xs-36 col-ms-36 col-sm-18 col-md-36" style="height: 100px;margin-top: 15px;">
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
            <div class="press col-xs-36 col-ms-36 col-sm-18 col-md-36" style=" margin-top: 15px;">
                <h3>مطبوعات</h3>
                <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: red; width: 90px; height: 2.5px;position: absolute;
                                right: 0;"></span>
                </div>
                <figure>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['section15']->value['link'];?>
"><img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['section15']->value['img'];?>
" alt="" style="margin-top: 12px;"></a>
                    <figcaption>
                        <?php echo $_smarty_tpl->tpl_vars['section15']->value['titr'];?>

                    </figcaption>
                </figure>

            </div>
            <div class="test-slidbar-child col-xs-36 col-ms-36 col-sm-18 col-md-36" style="margin-top: 15px;">
                <h3 id="best" onclick="bestshow()">برگزیده ها</h3>
                <h3 id="news" onclick="newsshow()">اخرین اخبار</h3>
                <div style="width: 100%;height: 1px;background-color: black;">
                    <span id="span1" style="background-color: red; width: 85px; height: 2.5px;position: absolute;"></span>
                </div>

                <div id="text_best">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section14']->value, 'best');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['best']->value) {
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['link'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['best']->value['titr'];?>
</p></a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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



            <div class="visit col-xs-36 col-ms-36 col-sm-18 col-md-36" style="margin-top: 15px;">
                <h3 id="visited" onclick="visitshow()">پربازدیدها</h3>
                <h3 id="discu" onclick="discushow()">پربحث ها</h3>
                <div style="width: 100%;height: 1px;background-color: black;">
                    <span id="span" style="background-color: red; width: 85px; height: 2.5px;position: absolute;"></span>
                </div>

                <div id="text_visited">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section16']->value, 'visited');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['visited']->value) {
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['visited']->value['link'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['visited']->value['titr'];?>
</p></a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php echo '<script'; ?>
 src="/js/fontawsome/all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/scipt.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
