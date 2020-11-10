<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-07 11:45:23
  from 'C:\Users\omid_ahangar\Desktop\smarty\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa688d39fcc11_77086315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f8e5a3b969892491deb42eff9e5d3742c17b4d4' => 
    array (
      0 => 'C:\\Users\\omid_ahangar\\Desktop\\smarty\\template\\home.tpl',
      1 => 1604732450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa688d39fcc11_77086315 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section1']->value, 'slider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
?>
                                <div class="swiper-slide col-xs-36">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['slider']->value['link'];?>
"><img src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['slider']->value['img'];?>
" alt=""></a>
                                    <div class="text-swiper">
                                        <p><?php echo $_smarty_tpl->tpl_vars['slider']->value['rutitr'];?>
</p>
                                        <h3><?php echo $_smarty_tpl->tpl_vars['slider']->value['titr'];?>
</h3>
                                        <p><?php echo $_smarty_tpl->tpl_vars['slider']->value['subtitle'];?>
</p>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-pagination"></div>

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
                        }
                    });
                <?php echo '</script'; ?>
>







                <div class="row">
                    <div class="test-gallery col-ms-36 col-sm-35 col-md-35 col-lg-35">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section2']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                            <span class="col-xs-16 col-ms-16 col-sm-8">
                                <figure>
                                    <img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt="">
                                    <figcaption>
                                            <?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>

                                    </figcaption>
                                </figure>
                            </span>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>

                <div class="col-xs-36 col-ms-36">
                    <div class="ta-news col-xs-36 col-ms-12 col-xs-offset-1">
                            <span class="news-child col-xs-36 col-ms-36 ">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section4']->value['header'];?>
</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 120px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section4']->value['links'], 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style="height: 190px; margin-top: 5px;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section5']->value['header'];?>
</h3>
                                <span class="dot active dot_1" id="dot_1"> </span>
                                <span class="dot dot_1" id="dot_2" style="margin-left: 13px;"></span>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 120px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div id="slider_1">
                                    <div class="text_child_caption col-xs-36">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section5']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_3_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                            <?php if ($_smarty_tpl->tpl_vars['i']->index <= 2) {?>
                                                <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                            <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                    <div class="text_child_caption col-xs-36">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section5']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_4_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                            <?php if ($_smarty_tpl->tpl_vars['i']->index > 2 && $_smarty_tpl->tpl_vars['i']->index < 6) {?>
                                                <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                            <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style="margin-top: 5px;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section6']->value['header'];?>
</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 30px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section6']->value['links'], 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 5px;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section7']->value['header'];?>
</h3>
                                <span class="dot active dot_2" id="dot_3"> </span>
                                <span class="dot dot_2" id="dot_4" style="margin-left: 13px;"></span>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 155px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div id="slider_2">
                                    <div class="text_child_caption col-xs-36">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section7']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_6_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                            <?php if ($_smarty_tpl->tpl_vars['i']->index <= 2) {?>
                                                    <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                            <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                    <div class="text_child_caption col-xs-36">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section7']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_7_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                            <?php if ($_smarty_tpl->tpl_vars['i']->index > 2 && $_smarty_tpl->tpl_vars['i']->index < 6) {?>
                                                <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                            <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_7_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>


                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 5px;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section8']->value['header'];?>
</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 90px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section8']->value['links'], 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 5px;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section9']->value['header'];?>
</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 35px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section9']->value['links'], 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 5px;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section10']->value['header'];?>
</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 120px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section10']->value['links'], 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 10px;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section11']->value['header'];?>
</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 70px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <div class="text_child_caption col-xs-36">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section11']->value['links'], 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>

                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 10px;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section12']->value['header'];?>
</h3>
                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 210px; height: 3px;position: absolute;right: 0;"></span>
                                </div>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section12']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_12_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['i']->index <= 2) {?>
                                        <div class="text_child_caption col-xs-36">
                                            <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                        </div>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_12_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </span>
                        <span class="col-xs-36 col-ms-36 "style="margin-top: 8px;">
                                <img class="col-xs-36" src="/media/20.PNG" alt="">
                            </span>
                        <span class="news-child col-xs-36 col-ms-36 "style=" margin-top: 10px;">

                                    <h3><?php echo $_smarty_tpl->tpl_vars['section13']->value['header'];?>
</h3>
                                    <span class="dot active"> </span>
                                    <span class="dot" style="left: 12px;"> </span>

                                <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: green; width: 55px; height: 3px;position: absolute;right: 0;"></span>
                                </div>

                                <div id="slider_2">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section13']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_13_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['i']->index < 3) {?>
                                            <div class="text_child_caption col-xs-36">
                                                <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                            </div>
                                        <?php } else { ?>
                                            <div class="text_child_caption col-xs-36"  style="display: none;">
                                                <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                            </div>
                                        <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_13_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </span>
                    </div>
                    <div class="ta-news-2 col-xs-35 col-ms-23 col-sm-22">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section3']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                            <span class="col-xs-36 col-ms-36 ">
                                <img class="col-xs-13 col-xs-offset-1" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt="">
                                <p><?php echo $_smarty_tpl->tpl_vars['news']->value['rutitr'];?>
</p>
                                <h3 class="col-xs-22"><?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['news']->value['subtitle'];?>
</p>
                            </span>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                        <a href="<?php echo $_smarty_tpl->tpl_vars['section15']->value['link'];?>
"><img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['section15']->value['img'];?>
" alt="" style="margin-top: 12px;"></a>
                        <figcaption>
                            <?php echo $_smarty_tpl->tpl_vars['section15']->value['titr'];?>

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
        <div class="row col-xs-36 col-ms-36 col-sm-36 col-md-36 col-lg-36">
            <div class="test-slider-footer-1">
                    <span class="text-slider col-xs-35 col-ms-28 col-sm-16 col-md-9 col-lg-9">
                        <span class="col-xs-36 col-ms-36">
                            <h3><?php echo $_smarty_tpl->tpl_vars['section20']->value['header'];?>
</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: #c50103; width: 45px; height: 2.5px;position: absolute;
                                right: 0;"></span>
                            </div>
                        </span>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section20']->value['links'], 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                            <span class="text-span col-xs-36 col-ms-36" style="margin-top: 3px;">
                                <h4 class="col-xs-20"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h4>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
"><img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt=""></a>
                            </span>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </span>
                <span class="text-slider col-xs-35 col-ms-28 col-sm-16 col-md-9 col-lg-9">
                        <span class="col-xs-36 col-ms-36">
                            <h3><?php echo $_smarty_tpl->tpl_vars['section19']->value['header'];?>
</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: #c50103; width: 60px; height: 2.5px;position: absolute;
                                right: 0;"></span>
                            </div>
                        </span>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section19']->value['links'], 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                            <span class="text-span col-xs-36 col-ms-36" style="margin-top: 3px;">
                                <h4 class="col-xs-20"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h4>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
"><img src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt=""></a>
                            </span>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </span>
                <span class="text-slider col-xs-35 col-ms-28 col-sm-16 col-md-9 col-lg-9">
                        <span class="col-xs-36 col-ms-36">
                            <h3><?php echo $_smarty_tpl->tpl_vars['section18']->value['header'];?>
</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: #c50103; width: 46px; height: 2.5px;position: absolute;
                                right: 0;"></span>
                            </div>
                        </span>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section18']->value['links'], 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                            <span class="text-span col-xs-36 col-ms-36" style="margin-top: 3px;">
                                <h4 class="col-xs-20"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h4>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
"><img class="col-xs-30" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt=""></a>
                            </span>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </span>
                <span class="text-slider col-xs-35 col-ms-28 col-sm-16 col-md-9 col-lg-9">
                        <span class="col-xs-36 col-ms-36">
                            <h3><?php echo $_smarty_tpl->tpl_vars['section17']->value['header'];?>
</h3>
                            <div style="width: 100%;height: 1px;background-color: black;">
                                <span style="background-color: #c50103; width: 58px; height: 2.5px;position: absolute;
                                right: 0;"></span>
                            </div>
                        </span>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section17']->value['links'], 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                            <span class="text-span col-xs-36 col-ms-36" style="margin-top: 3px;">
                                <h4 class="col-xs-20"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h4>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
"><img src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" alt=""></a>
                            </span>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </span>
            </div>

            <div class="row col-xs-36 col-ms-36 col-sm-36 col-md-36 col-lg-36">
                <div class="test-slider-footer-2">
                        <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section24']->value['header'];?>
</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;margin-bottom: 5px;">
                                    <span style="background-color: #c50103; width: 58px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section24']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_21_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->index == 0) {?>
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                                    </span>
                                <?php } else { ?>
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                    </div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_21_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section23']->value['header'];?>
</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 75px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section23']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_22_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->index == 0) {?>
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                                    </span>
                                <?php } else { ?>
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                    </div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_22_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section22']->value['header'];?>
</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 65px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section22']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_23_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->index == 0) {?>
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                                    </span>
                                <?php } else { ?>
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                    </div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_23_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section21']->value['header'];?>
</h3>
                                 <div style="width: 100%;height: 1px;background-color: rgb(0, 0, 0);">
                                    <span style="background-color: #c50103; width: 58px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section21']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_24_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->index == 0) {?>
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                                    </span>
                                <?php } else { ?>
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                    </div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_24_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section28']->value['header'];?>
</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 55px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section28']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_25_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->first) {?>
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                                    </span>
                                <?php } else { ?>
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                    </div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_25_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section27']->value['header'];?>
</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 58px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section27']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_26_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->index == 0) {?>
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                                    </span>
                                <?php } else { ?>
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                    </div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_26_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36">
                                <h3><?php echo $_smarty_tpl->tpl_vars['section26']->value['header'];?>
</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 65px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section26']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_27_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->index == 0) {?>
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                                    </span>
                                <?php } else { ?>
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                    </div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_27_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </span>
                    <span class="text col-xs-36 col-ms-30 col-sm-16 col-md-8 col-lg-8">
                            <span class="col-xs-36 col-ms-36" style="height: 15%;">
                                 <h3><?php echo $_smarty_tpl->tpl_vars['section25']->value['header'];?>
</h3>
                                 <div style="width: 100%;height: 1px;background-color: black;">
                                    <span style="background-color: #c50103; width: 70px; height: 3px;position: absolute;
                                    right: 0;"></span>
                                </div>
                            </span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section25']->value['links'], 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_28_saved = $_smarty_tpl->tpl_vars['i'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->first) {?>
                                    <span class="col-xs-36 col-ms-36">
                                        <img class="col-xs-36" src="http://www.mednews.ir<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" alt="">
                                    </span>
                                    <span class="text_child col-xs-36 col-ms-36" style="margin-bottom: 10px;">
                                        <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                                    </span>
                                <?php } else { ?>
                                    <div class="text_child_caption col-xs-36">
                                        <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</p>
                                    </div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_28_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php echo '<script'; ?>
 src="/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/fontawsome/all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/scipt.js"><?php echo '</script'; ?>
>
</body>

</html>

<?php }
}
