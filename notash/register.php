<?php
require_once 'engine/db.php';
if (isset($_SESSION['loggedin'])) {
    header('Location: ./profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>ثبت نام</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

<div class="body-register">
    <div class="reg-div">
        <div class="logo"></div>
        <form action="engine/do-register.php" method="post" onsubmit="return register()">
            <div class="fields-reg">
                <div class="fields-1">
                    <span id="span2"></span><br>
                    <div class="first-name">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path d="M10,10.9c2.373,0,4.303-1.932,4.303-4.306c0-2.372-1.93-4.302-4.303-4.302S5.696,4.223,5.696,6.594C5.696,8.969,7.627,10.9,10,10.9z M10,3.331c1.801,0,3.266,1.463,3.266,3.263c0,1.802-1.465,3.267-3.266,3.267c-1.8,0-3.265-1.465-3.265-3.267C6.735,4.794,8.2,3.331,10,3.331z"></path>
                            <path d="M10,12.503c-4.418,0-7.878,2.058-7.878,4.685c0,0.288,0.231,0.52,0.52,0.52c0.287,0,0.519-0.231,0.519-0.52c0-1.976,3.132-3.646,6.84-3.646c3.707,0,6.838,1.671,6.838,3.646c0,0.288,0.234,0.52,0.521,0.52s0.52-0.231,0.52-0.52C17.879,14.561,14.418,12.503,10,12.503z"></path>
                        </svg>
                        <label for="in1"></label>
                        <input type="text" name="first-name" id="in1" placeholder="نام" autocomplete="off">
                    </div>
                    <span id="span3"></span><br>
                    <div class="last-name">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path d="M15.573,11.624c0.568-0.478,0.947-1.219,0.947-2.019c0-1.37-1.108-2.569-2.371-2.569s-2.371,1.2-2.371,2.569c0,0.8,0.379,1.542,0.946,2.019c-0.253,0.089-0.496,0.2-0.728,0.332c-0.743-0.898-1.745-1.573-2.891-1.911c0.877-0.61,1.486-1.666,1.486-2.812c0-1.79-1.479-3.359-3.162-3.359S4.269,5.443,4.269,7.233c0,1.146,0.608,2.202,1.486,2.812c-2.454,0.725-4.252,2.998-4.252,5.685c0,0.218,0.178,0.396,0.395,0.396h16.203c0.218,0,0.396-0.178,0.396-0.396C18.497,13.831,17.273,12.216,15.573,11.624 M12.568,9.605c0-0.822,0.689-1.779,1.581-1.779s1.58,0.957,1.58,1.779s-0.688,1.779-1.58,1.779S12.568,10.427,12.568,9.605 M5.06,7.233c0-1.213,1.014-2.569,2.371-2.569c1.358,0,2.371,1.355,2.371,2.569S8.789,9.802,7.431,9.802C6.073,9.802,5.06,8.447,5.06,7.233 M2.309,15.335c0.202-2.649,2.423-4.742,5.122-4.742s4.921,2.093,5.122,4.742H2.309z M13.346,15.335c-0.067-0.997-0.382-1.928-0.882-2.732c0.502-0.271,1.075-0.429,1.686-0.429c1.828,0,3.338,1.385,3.535,3.161H13.346z"></path>
                        </svg>
                        <label for="in2"></label>
                        <input type="text" name="last-name" id="in2" placeholder="نام خانوادگی" autocomplete="off">
                    </div>
                    <span id="span4"></span><br>
                    <div class="phone">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path d="M10,15.654c-0.417,0-0.754,0.338-0.754,0.754S9.583,17.162,10,17.162s0.754-0.338,0.754-0.754S10.417,15.654,10,15.654z M14.523,1.33H5.477c-0.833,0-1.508,0.675-1.508,1.508v14.324c0,0.833,0.675,1.508,1.508,1.508h9.047c0.833,0,1.508-0.675,1.508-1.508V2.838C16.031,2.005,15.356,1.33,14.523,1.33z M15.277,17.162c0,0.416-0.338,0.754-0.754,0.754H5.477c-0.417,0-0.754-0.338-0.754-0.754V2.838c0-0.417,0.337-0.754,0.754-0.754h9.047c0.416,0,0.754,0.337,0.754,0.754V17.162zM13.77,2.838H6.23c-0.417,0-0.754,0.337-0.754,0.754v10.555c0,0.416,0.337,0.754,0.754,0.754h7.539c0.416,0,0.754-0.338,0.754-0.754V3.592C14.523,3.175,14.186,2.838,13.77,2.838z M13.77,13.77c0,0.208-0.169,0.377-0.377,0.377H6.607c-0.208,0-0.377-0.169-0.377-0.377V3.969c0-0.208,0.169-0.377,0.377-0.377h6.785c0.208,0,0.377,0.169,0.377,0.377V13.77z"></path>
                        </svg>
                        <label for="in3"></label>
                        <input type="text" name="phone" id="in3" placeholder="شماره موبایل" autocomplete="off">
                    </div>
                </div>
                <div class="fields-1">
                    <span id="span5"></span><br>
                    <div class="username">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                        </svg>
                        <label for="in4"></label>
                        <input type="text" name="username" id="in4" placeholder="نام کاربری" autocomplete="off">
                    </div>
                    <span id="span6"></span><br>
                    <div class="password">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                        </svg>
                        <label for="in5"></label>
                        <input type="password" name="password" id="in5" placeholder="رمز ورود" autocomplete="off">
                        <span onclick="show_pass()" class="show-pass">
                        <svg class="svg-icon" viewBox="0 0 20 20" id="svg">
                            <path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>
                        </span>
                    </div>
                    <span id="span7"></span><br>
                    <div class="email">
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
                        </svg>
                        <label for="in6"></label>
                        <input type="email" name="email" id="in6" placeholder="ایمبل" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="sign-up">
                <button class="sign-up-button" type="submit" name="do-register">ثبت نام</button>
            </div>
            <div class="link">
                اگر ثبت نام کردید.. <a href="login.php">ورود</a>
            </div>
        </form>
    </div>
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
<script type="text/javascript" src="js/search.js"></script>
<script type="text/javascript" src="js/register.js"></script>
<script type="text/javascript" src="js/footer.js"></script>
</body>
</html>