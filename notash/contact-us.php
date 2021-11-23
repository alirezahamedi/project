<?php
require_once './engine/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>نوتاش | تماس با ما</title>
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

<div class="contact-us">
    <h2>تماس ما</h2>
    <hr class="contact-us-hr">
    <div class="contact-us-div">
        <h3>آدرس آموزشگاه نوتاش :</h3>
        <p>تهران، ملارد، مارلیک، خیابان کسری، نبش خیابان لاله</p>
        <br>
        <h3>شماره های تماس نوتاش :</h3>
        <p><a href="tel:02165155543">021-65155543</a></p>
        <p><a href="tel:02165151450">021-65151450</a></p>
        <br>
        <h3>شبکه های اجتماعی نوتاش :</h3>
        <a href="https://www.instagram.com/academic_notash?r=nametag" target="_blank" class="insta"><i
                    class="fa fa-instagram"></i></a>
        <a href="https://t.me/notaash_center" target="_blank" class="tel"><i class="fa fa-telegram"></i></a>
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
<script type="text/javascript" src="js/footer.js"></script>
</body>
</html>