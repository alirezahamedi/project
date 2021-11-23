<?php
require_once './engine/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link
            rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <div class="header">
        <div class="header-center">
            <nav class="navbar">
                <div class="navbar-center">
                    <div class="menu-icon">
                        <i class="fas fa-bars" id="menu-burger"></i>
                        <div class="sidebar" id="sidebar">
                            <i class="fa fa-close" id="btn-close"></i>
                            <ul class="menu">
                                <li>
                                    <a href="index.php">خانه
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="courses.php">دوره ها
                                        <i class="fas fa-graduation-cap"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="about-us.php">درباره ما
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact-us.php">تماس با ما
                                        <i class="fa fa-phone"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="article.php">مقاله ها
                                        <i class="fa fa-newspaper-o"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <img src="img/notash.png" alt="logo-notash" class="nav-logo">
                    <div>
                        <a href="log-reg.php" class="user-page">
                            <span class="user-icon">
                                <span class="log-reg-text">
                                    <?php
                                    if (isset($_SESSION['loggedin'])) {
                                        echo $user_username;
                                    } else {
                                        echo "ورود / عضویت";
                                    }
                                    ?>
                                </span>
                                <i class="fas fa-user"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="header-1">
        <div class="header-center-1">
            <div class="search-box">
                <label for="search-box"></label>
                <input type="text" id="search-box" class="search" placeholder="جستجوی دوره ها" value=""
                       autocomplete="off">
                <button type="button" id="search-button" class="search-button"><i class="fa fa-search"
                                                                                  id="search-1"></i>
                </button>
            </div>
            <div id="live-search"></div>
        </div>
    </div>
</header>
<div class="fix"></div>

<div class="courses-about">
    <div class="box-courses-single">
        <div class="box-head">
            <img src="" alt="" id="img-courses">
        </div>
        <h2 class="offer-single-page" id="offer"></h2>
        <div class="box-body">
            <h3 id="h3-class"></h3>
            <p>ویژه بازارکار</p>
        </div>
        <div class="box-footer">
            <h3 id="h3-adjective"></h3>
        </div>
    </div>
    <div class="content-body">
        <h2 id="h2-learn"></h2>
        <br>
        <p id="p-description"></p>
        <br>
        <b id="b-academy"></b>
    </div>
</div>
<div class="container-courses">
    <div class="register-courses">
        <div class="register-head">
            <h4 id="h4-register-head"><i class="fa fa-sign-in"></i></h4>
        </div>
        <div class="register-body">
            <span>روزهای برگزاری دوره:</span>
            <br>
            <span>ساعت برگزاری دوره:</span>
            <br>
            <span>تاریخ شروع دوره:</span>
            <br>
            <span>شهریه دوره:</span>
            <br>
            <span>نوع تدریس:</span>
            <br>
            <span>طول دوره:</span>
            <div class="register-btn">
                <button>ثبت نام</button>
            </div>
        </div>
    </div>
    <div class="courses-description">
        <div class="courses-head">
            <h4 id="h4-courses-head"><i class="fa fa-file-text-o"></i></h4>
        </div>
        <div class="courses-body">
            <span id="span-description-courses-1"></span>
            <br>
            <span id="span-description-courses-2"></span>
            <br>
            <span id="span-description-courses-3"></span>
            <br>
            <span id="span-description-courses-4"></span>
            <br>
            <span id="span-description-courses-5"></span>
        </div>
        <div class="call">
            <a href="tel:02165151450">021-65151450 <i class="fa fa-phone"></i></a>
            <a href="tel:02165155543">021-65155543 <i class="fa fa-phone"></i></a>
        </div>
    </div>
</div>
<div class="courses-topics">
    <div class="titles">
        <h3 id="h3-titles-courses"></h3>
        <p id="p-titles-courses-1"></p>
        <p id="p-titles-courses-2"></p>
        <p id="p-titles-courses-3"></p>
        <p id="p-titles-courses-4"></p>
        <p id="p-titles-courses-5"></p>
        <p id="p-titles-courses-6"></p>
        <p id="p-titles-courses-7"></p>
    </div>
</div>

<!--<div class="comments-user">-->
<!--    <div class="comment-body">-->
<!--        <div class="avatar-img">-->
<!--            <img src="img/avr.png" alt="avatar">-->
<!--            <span>محمد گفت :</span>-->
<!--        </div>-->
<!--        <span class="date">اسفند 1399,5 در 2:52 ب.ظ</span>-->
<!--        <p>سلام-->
<!--            <br>-->
<!--            هنوز مات و مبهوتم ، چطور یه نفر میتونه انقدر خوب تدریس کنه! مرزهای تدریس رو جا به جا کردید بی نهایت ازتون-->
<!--            متشکرم.-->
<!--        </p>-->
<!--        <div class="answer">-->
<!--            <a href="#">پاسخ</a>-->
<!--        </div>-->
<!--        <div class="reply-to-comment">-->
<!--            <div class="avatar-img">-->
<!--                <img src="img/avr.png" alt="">-->
<!--                <span><a href="#">مسعود صدری</a> گفت : </span>-->
<!--            </div>-->
<!--            <span class="date">اسفند 1399,5 در 2:57 ب.ظ</span>-->
<!--            <p>سلام-->
<!--                <br>-->
<!--                خیلی ممنونم، لطف دارید.-->
<!--            </p>-->
<!--            <div class="answer">-->
<!--                <a href="#">پاسخ</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="survey">
    <p>نشانی ایمیل شما منتشر نخواهد شد.</p>
    <form method="post" action="" id="comment-form" onsubmit="return validComment()">
        <span class="span-survey" id="span-survey-f-name"></span><br>
        <label for="f-name">نـام<span>*</span></label>
        <input type="text" name="f-name" id="f-name"><br>
        <span class="span-survey" id="span-survey-email"></span><br>
        <label for="email">ایمـیل<span>*</span></label>
        <input type="email" name="email" id="email"><br>
        <span class="span-survey" id="span-survey-comment"></span><br>
        <label for="comment">دیـدگاه شما<span>*</span></label>
        <textarea name="comment" id="comment" cols="60" rows="6"></textarea>
        <div class="survey">
            <button type="submit">ثبت دیـدگاه</button>
        </div>
    </form>
</div>

<footer class="footer">
    <div class="footer-center">
        <div class="footer-1">
            <div class="section-footer">
                <h3>درباره ما</h3><br>
                <hr class="hr">
                <p>آموزشگاه نوتاش در جهت ارائه دوره های جامع آموزشی در خدمت شماست تا شما را با تکنولوژی های روز دنیا
                    آشنا سازد ؛ به عبارتی با استفاده از روش های تدریس و آموزش نوین و به روز کار شما را آسان تر کرده است
                    و
                    در تلاش است به نحوه احسن شما را به دنیای امروز راهنمایی کند.</p>
            </div>
            <div class="section-footer">
                <h3>دسترسی سریع</h3><br>
                <hr class="hr">
                <a href="courses.php">دوره ها</a>
                <hr class="hr-1">
                <a href="profile.php">پنل کاربری</a>
                <hr class="hr-1">
                <a href="article.php">مقاله ها</a>
                <hr class="hr-1">
                <a href="contact-us.php">تماس با ما</a>
                <hr class="hr-1">
            </div>
            <div class="section-footer" id="section-footer-article"></div>
        </div>
    </div>
    <div class="footer-center-1">
        <div class="footer-2">
            <p>Copyright 2021 © تمام حقوق این سایت متعلق به Notash می باشد.</p>
        </div>
    </div>
</footer>

<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/courses-single.js"></script>
<script type="text/javascript" src="js/comment.js"></script>
<script type="text/javascript" src="js/search.js"></script>
<script type="text/javascript" src="js/footer.js"></script>
</body>
</html>