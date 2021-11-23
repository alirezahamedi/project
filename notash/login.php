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
    <title>ورود</title>
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

<div class="body-login">
    <div class="log-div">
        <div class="logo"></div>
        <form action="engine/do-login.php" method="post" onsubmit="return login()">
            <div class="fields">
                <span id="span0"></span><br>
                <div class="username-1">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                    </svg>
                    <label for="user"></label>
                    <input type="text" name="username" id="user" placeholder="نام کاربری" autocomplete="off">
                </div>
                <span id="span1"></span><br>
                <div class="password-1">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
                    </svg>
                    <label for="pass"></label>
                    <input type="password" name="password" id="pass" placeholder="رمز ورود" autocomplete="off">
                    <span onclick="show_pass()" class="show-pass">
                    <svg class="svg-icon" viewBox="0 0 20 20" id="svg-1">
                        <path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                    </svg>
                    </span>
                </div>
            </div>
            <button class="sign-in-button" type="submit" name="do-login">ورود</button>
            <div class="link">
                <a href="#">رمز عبورتان را فراموش کردید؟</a> یا <a href="register.php">ثبت نام</a>
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
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/footer.js"></script>
</body>
</html>