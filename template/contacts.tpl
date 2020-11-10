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
    <link rel="stylesheet" href="/css/style-contacts.css">
    <title>تماس با ما</title>
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
    <form class="form-horizontal col-xs-33 col-ms-36 col-sm-22" action="contacts.tpl">
        <h3>تماس با ما</h3>
        <div style="width: 100%;height: 1px;background-color: black;">
            <span style="background-color: #029d04;; width: 75px; height: 2.5px;position: absolute;"></span>
        </div>
        <div>
            <p>     مدنیوز اولین و جامع ترین پایگاه خبری تخصصی تجهیزات پزشکی در ایران
            <p>info@mednews.ir</p>
            </p>
        </div>
       <div id="form_Contacst">
           <div class="form-group">
               <label class="control-label col-sm-6" for="name">نام:</label>
               <div class="col-sm-25">
                   <input type="text" class="form-control" id="name" placeholder="نام" required pattern="\S+">
               </div>
           </div>
           <div class="form-group">
               <label class="control-label col-sm-6" for="email">ایمیل: </label>
               <div class="col-sm-25">
                   <input type="email" class="form-control" id="email" placeholder="ایمیل" required pattern="\S+">
               </div>
           </div>
           <div class="form-group">
               <label class="control-label col-sm-6" for="select">* گیرنده: </label>
               <div class="col-sm-25">
                   <select class="form-control" id="select">
                       <option value="2">روابط عمومی</option>
                       <option value="3">سردبیری</option>
                   </select>
               </div>
           </div>
           <div class="form-group">
               <label class="control-label col-sm-6" for="textarea">* پیغام: </label>
               <div class="col-sm-25">
                   <textarea class="form-control textarea" cols="30" rows="8" required></textarea>
               </div>
           </div>

           <div class="form-group">
               <div class="col-sm-offset-2 col-sm-36">
                   <input type="submit" class="btn btn-default" id="submit" value="ارسال">
               </div>
           </div>
       </div>
    </form>
    <section class="test-slidbar col-xs-36 col-sm-13 col-md-10">
        <div class="col-xs-36 col-ms-36 col-sm-36 col-md-36" >
            <img class=" col-xs-36" src="media/01.PNG" alt="" style="height: 120px;">
        </div>
        <div class="visit col-xs-36" style="margin-top: 15px;">
            <h3 id="visited" onclick="visitshow()">پربازدیدها</h3>
            <h3 id="discu" onclick="discushow()">پربحث ها</h3>
            <div style="width: 100%;height: 1px;background-color: black;">
                <span id="span" style="background-color: red; width:95px; height: 2.5px;position: absolute;"></span>
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
<script src="/js/jquery.js"></script>
<script src="/js/script_ajax.js"></script>
<script>

</script>
</body>
</html>

