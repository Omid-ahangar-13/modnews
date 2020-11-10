<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-09 09:16:07
  from 'C:\Users\omid_ahangar\Desktop\smarty\template\weather.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa908d7dc6c00_23272687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef7c5d0aad30cda9f7dc3a6832aa42f39c7a87e4' => 
    array (
      0 => 'C:\\Users\\omid_ahangar\\Desktop\\smarty\\template\\weather.tpl',
      1 => 1604913365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa908d7dc6c00_23272687 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="/css/style-contacts.css">
    <style>
        .red{
            background-colorcolor: rebeccapurple;
        }
    </style>
    <title>آب و هوا</title>
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
    <div class="col-xs-33 col-ms-36 col-sm-23"><h3>آب وهوا</h3>
        <div style="width: 100%;height: 1px;background-color: black;">
            <span style="background-color: #029d04;; width: 70px; height: 2.5px;position: absolute;"></span>
        </div>
        <section class="col-xs-36 weather">
            <div id="demo_select"></div>
            <div class="col-xs-20">
                <select size="1" class="col-xs-10 weather-continent" id="continent" onchange="countriesOfContinent(this)">
                    <option selected="" value="1">آسیا</option>
                    <option value="4">استرالیا</option><option value="2">اروپا</option>
                    <option value="3">آفریقا</option>
                    <option value="6">آمریکای جنوبی</option>
                    <option value="5">آمریکای شمالی</option>
                </select>
            </div>

            <div class="col-xs-16">
                <select size="1" class="col-xs-13 weather-Country" onchange="citiesOfCountry(this)">
                    <option value="1">افغانستان</option>
                    <option value="11">ارمنستان</option>
                    <option value="15">آذربایجان</option>
                    <option value="4">بحرین</option>
                    <option value="5">بنگلادش</option>
                    <option value="6">کامبوج</option>
                    <option value="7">کشور چین</option>
                    <option value="8">گرجستان</option>
                    <option value="9">هنگ کنگ</option>
                    <option value="10">هندوستان</option>
                    <option selected="select" value="11">ایران</option>
                    <option value="12">اندونزی</option>
                    <option value="13">عراق</option>
                    <option value="14">ژاپن</option>
                    <option value="15">قزاقستان</option>
                    <option value="16">کویت</option>
                    <option value="17">قرقیزستان</option>
                    <option value="18">لائوس</option>
                    <option value="19">لبنان</option>
                    <option value="20">مالزی</option>
                    <option value="21">مالدیو</option>
                    <option value="22">مغولستان</option>
                    <option value="23">نپال</option>
                    <option value="24">کره شمالی</option>
                    <option value="25">عمان</option>
                    <option value="26">پاکستان</option>
                    <option value="27">فلسطین</option>
                    <option value="28">فیلیپین</option>
                    <option value="29">قطر</option>
                    <option value="30">عربستان سعودی</option>
                    <option value="31">سنگاپور</option>
                    <option value="32">کره جنوبی</option>
                    <option value="33">سریلانکا</option>
                    <option value="34">سوریه</option>
                    <option value="35">تایوان</option>
                    <option value="36">تاجیکستان</option>
                    <option value="37">تایلند</option>
                    <option value="38">ترکیه</option>
                    <option value="39">ترکمنستان</option>
                    <option value="40">امارات متحده عربی</option>
                    <option value="41">ازبکستان</option>
                    <option value="42">ویتنام</option>
                    <option value="43">یمن</option>
                </select>
            </div>
        </section>
        <section class="col-xs-36 weather-city">
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2254271');return false;">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2354333');return false;">اراک</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2242302');return false;">ارومیه</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2254572');return false">اصفهان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2254294');return false;">اهواز</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2218125');return false;">بابل</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2218126');return false;">بابل سر</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2220377');return false;">بجنود</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2220881');return false;">بناب</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2226283');return false;">بندرانزلی</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2218961');return false;">بندر عباس</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2219010');return false;">قشم</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2254463');return false;">بوشهر</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36" onclick="showWeather('2254447');return false;">بیرجند</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
            <section class="weather-city-child col-xs-18 col-ms-12 col-sm-7 col-lg-5">
                <span class="col-xs-36">آبادان</span>
            </section>
        </section>
        <div id="wDiv">
            <div class="weather_container col-lg-24 col-md-24 col-sm-36 col-xs-36 col-lg-pull-6 col-md-pull-6 col-sm-pull-2">
                <div class="weather_header">وضعيت آب و هواي شهر&nbsp;<span class="weather_current_city">تهران</span><span class="weather_updated_time" dir="ltr">(۰۹:۳۰ pm)</span></div>
                <div class="weather_body">
                    <div class="weather_r_sec col-xs-17">
                        <div class="weather_list">
                            <span class="weather_dt">آخرين بروز رساني:</span><span class="weather_dd" dir="ltr">۱۳۹۹/۰۸/۱۸</span>
                        </div>

                        <div class="weather_list"><span class="weather_dt">وضعيت:</span><span class="weather_dd">نيمه ابري</span></div>
                        <div class="weather_list"><span class="weather_dt">سرعت باد:</span><span class="weather_dd" dir="ltr">۵ km/h</span></div>
                        <div class="weather_list"><span class="weather_dt">رطوبت:</span><span class="weather_dd" dir="ltr">۵۴%</span></div>
                        <div class="weather_list"><span class="weather_dt">طلوع آفتاب:</span><span class="weather_dd" dir="ltr">۶:۳۵ am</span></div>
                        <div class="weather_list"><span class="weather_dt">غروب آفتاب:</span><span class="weather_dd" dir="ltr">۵:۰۱ pm</span></div>
                    </div>
                    <div class="weather_l_sec col-xs-18" style="background:url(/client/themes/fa/main/img/weather/b/30.png) no-repeat center top;">
                        <div class="weather_t_l_sec">
                            <div class="weather_tmp">۱۲°</div>
                            <div class="weather_info">كمينه: <span dir="ltr" class="weather_dd2">۱۲°</span>&nbsp;&nbsp;&nbsp;بیشینه: <span dir="ltr" class="weather_dd2">۱۹°</span>
                            </div>
                        </div>
                        <div class="weather_b_l_sec col-xs-36">
                            <div style="background-image:url(/client/themes/fa/main/img/weather/s/34.png);" class="weather_title">فردا</div>
                            <div class="weather_info2">
                                <div class="weather_list"><span class="weather_dt">وضعيت:</span><span class="weather_dd">صاف</span></div>
                                <div class="weather_list"><span class="weather_dt">كمينه:</span><span class="weather_dd" dir="ltr">۹°</span></div>
                                <div class="weather_list"><span class="weather_dt">بیشینه:</span><span class="weather_dd" dir="ltr">۱۷°</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper"></div>
                </div>  </div>                 </div>

        
    </div>




    <section class="test-slidbar col-xs-36 col-sm-13 col-md-10">
        <div class="col-xs-36 col-ms-36 col-sm-36 col-md-36" >
            <img class=" col-xs-36" src="media/01.PNG" alt="" style="height: 120px;">
        </div>
        <div class="visit col-xs-36" style="margin-top: 15px;">
            <h3 id="visited" onclick="visitshow()">پربازدیدها</h3>
            <h3 id="discu" onclick="discushow()">پربحث ها</h3>
            <div style="width: 100%;height: 1px;background-color: black;">
                <span id="span" style="background-color: red; width: 95px; height: 2.5px;position: absolute;"></span>
            </div>
        </div>
    </section>
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
 src="/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/script_ajax.js"><?php echo '</script'; ?>
>




</body>
</html>

<?php }
}
