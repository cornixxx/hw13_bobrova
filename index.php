<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900,400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="wrapper">

    <? include('includes/header.php');?>


    <main class="m-page">

        <section class="slider">
            <div class="container-fluid">
                <div class="flexslider">
                    <ul class="slides">
                        <li class="slide1">
                            <img src="img/man.png" alt=""/>
                            <div class="banner">
                                <h2> Купить продукцию сейчас</h2>
                                <a class="button" href="#"> Узнать больше </a>
                            </div>
                        </li>
                        <li class="slide2">
                            <img src="img/man.png" alt=""/>
                            <div class="banner">
                                <h2> Узнать больше о компании </h2>
                                <a class="button" href="#"> Узнать больше </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        <!-- news -->

        <section class="news" id="news">
            <div class="container-fluid">
                <h2> Новости </h2>
                <div class="news-block clearfix">

                    <?php
                    include('includes/arrays.php');

                    foreach ($newsItems as $item) {
                        echo '<article class="clearfix">';
                        echo "<img src=".$item['src']." alt=".$item['alt']."/>";
                        echo "<div class=\"news-inner\">";
                        echo '<p>'.$item['descript'].'</p>';
                        echo "</div>";
                        echo "<a class=\"details\" href=".$item['url']."> Подробнее </a>";
                        echo '</article>';
                    }
                    ?>

                </div>
            </div>
        </section>



        <!-- recomended -->

        <section class="recomended" id="recomend">
            <div class="container-fluid clearfix">
                <h2> Я рекомендую </h2>

                <nav>
                    <?php
                    include('includes/arrays.php');
                    echo '<ul class="clearfix">';
                    foreach ($recomendNav as $item) {

                        echo "<li><a href=" . $item['url'] . ">" . $item['title'] . "</a></li>";
                    }
                    echo '</ul>';

                    ?>
                </nav>

                <article class="large">
                    <img src="img/product1.jpg" alt=""/>
                    <h3> Шампунь ежедневного пользования</h3>
                    <p> Доктор Нонна на телеканале домашний в программе спросите повара Доктор Нонна на телеканале домашний в программе спросите повара Доктор Нонна на телеканале домашний в программе Доктор Нонна на телеканале домашний в программе...
                    </p>
                    <span class="price"> 280 грн. </span>
                    <a class="button" href="#"> Купить </a>
                </article>
                <div class="products-block clearfix">

                    <?php
                    include('includes/arrays.php');

                    foreach ($recomendItems as $item) {
                        echo '<article>';
                        echo "<a href=".$item['url']."><img src=".$item['src']." alt=".$item['alt']."/></a>";
                        echo '<h3>'.$item['name'].'</h3>';
                        echo "<span class=\"price\">" .$item['price']. "</span>";
                        echo '</article>';
                    }
                    ?>

                </div>
            </div>
        </section>

        <!-- video -->

        <section class="video">
            <div class="container-fluid">
                <h2> Телеканал Теледом </h2>
                <div class="video-block clearfix">
                    <video  class="large-video" controls="controls" poster="img/poster1.jpg">
                        <source src="video/nona.ogv" type='video/ogg; codecs="theora, vorbis"'>
                        <source src="video/nona.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        <source src="video/nona.webm" type='video/webm; codecs="vp8, vorbis"'>
                        Элемент video не поддерживается вашим браузером.
                    </video>

                    <div class="video-mini clearfix">
                        <video  controls="controls" poster="img/poster2.jpg">
                            <source src="video/nona.ogv" type='video/ogg; codecs="theora, vorbis"'>
                            <source src="video/nona.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                            <source src="video/nona.webm" type='video/webm; codecs="vp8, vorbis"'>
                            Элемент video не поддерживается вашим браузером.
                        </video>
                        <video  controls="controls" poster="img/poster3.jpg">
                            <source src="video/nona.ogv" type='video/ogg; codecs="theora, vorbis"'>
                            <source src="video/nona.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                            <source src="video/nona.webm" type='video/webm; codecs="vp8, vorbis"'>
                            Элемент video не поддерживается вашим браузером.
                        </video>
                        <video  controls="controls" poster="img/poster3.jpg">
                            <source src="video/nona.ogv" type='video/ogg; codecs="theora, vorbis"'>
                            <source src="video/nona.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                            <source src="video/nona.webm" type='video/webm; codecs="vp8, vorbis"'>
                            Элемент video не поддерживается вашим браузером.
                        </video>
                        <video  controls="controls" poster="img/poster2.jpg">
                            <source src="video/nona.ogv" type='video/ogg; codecs="theora, vorbis"'>
                            <source src="video/nona.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                            <source src="video/nona.webm" type='video/webm; codecs="vp8, vorbis"'>
                            Элемент video не поддерживается вашим браузером.
                        </video>
                    </div>
                </div>

                <div class="video-links-block clearfix">
                    <div>
                        <h3> Новые видео </h3>
                        <a class="video-links" href="#"> Шампунь ежедневного пользования  (16:54) </a>
                        <a class="video-links" href="#"> ПРЕМЬЕРА! Ева Бушмина - Религия  (05:14) </a>
                        <a class="video-links" href="#"> Анжелика Варум - Я Всегда С Тобой (Official Video)</a>
                    </div>
                    <div>
                        <h3> Популярные </h3>
                        <a class="video-links" href="#"> Шампунь ежедневного пользования  (16:54) </a>
                        <a class="video-links" href="#"> ПРЕМЬЕРА! Ева Бушмина - Религия  (05:14) </a>
                        <a class="video-links" href="#"> Анжелика Варум - Я Всегда С Тобой (Official Video)</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- sergey -->

        <section class="sergey">
            <div class="container-fluid clearfix">
                <img src="img/sergey.png" alt="#"/>
                <div class="sergey-inner">
                    <h2> Цель моей жизни - <br>
                        делать людей счастливыми </h2>

                    <p> В бизнес компании Dr. Nona пришел на успех своей жены Ольги, которая доказала мне что даже находясь в декретном
                        отпуске и гуляя с маленьким ребенком на улице за один месяц можно заработать в два раза больше чем моя зарплата
                        в милиции. Позже я на этот бизнес посмотрел серьезнее и увидел себя в нем. Это дело для серьезных и амбициозных
                        людей, которые хотят изменить свою жизнь. 27 декабря 2007 года уволился из МВД и теперь сотрудничаю ...
                    </p>
                    <a class="details" href="#"> Узнайте подробнее </a>
                    <div class="social clearfix">
                        <a class="icon-youtube" href="#"> </a>
                        <a class="circles" href="#"> </a>
                        <a class="vk" href="#"> </a>
                        <a class="icon-odnoklassniki" href="#"> </a>
                        <a class="icon-facebook" href="#"> </a>
                        <a class="icon-twitter" href="#"> </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- partners -->

        <section class="partners">
            <div class="container-fluid clearfix">
                <h2> Мои партнеры по бизнесу </h2>

                <?php
                include('includes/arrays.php');

                foreach ($partnersItems as $item) {
                    echo '<div class="partner">';
                    echo "<img src=".$item['src']." alt=".$item['alt']."/>";
                    echo '<h3>'.$item['name'].'</h3><span>'.$item['position'].'</span><span class="icon-location">'.$item['loc'].'</span>';
                    echo '<div class="social-mini clearfix">
                        <a class="vk" href="#"> </a>
                        <a class="icon-odnoklassniki" href="#"> </a>
                        <a class="icon-facebook" href="#"> </a>
                        <a class="icon-twitter" href="#"> </a>
                    </div>';
                    echo '</div>';
                }
                ?>

            </div>
        </section>

        <!-- email -->

        <section class="email" id="email">
            <div class="container-fluid">
                <h2> Добро пожаловать в команду </h2>
                <form action="#" class="clearfix">
                    <input type="text" name="name" placeholder="Ваше имя"/>
                    <input type="text" name="phone" placeholder="Телефон"/>
                    <input type="text" name="email" placeholder="E-mail адрес"/>
                    <button class="button" type="submit"> Присоединяйтесь </button>
                </form>
                <a class="details" href="#"> Узнайте подробнее почему выгодня сотрудничать с нами и быть в нашей команде </a>
            </div>
        </section>
    </main>
</div>

<!-- footer-->

<footer class="f-page home-footer" id="footer">
    <div class="container-fluid">
        <p class="info"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis eum
            possimus quibusdam, quod recusandae tempore voluptate. Architecto assumenda
            deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi, commodi i
            nventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
            corporis eum possimus quibusdam, quod recusandae tempore voluptate. Architecto
            assumenda deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi,
            commodi inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Architecto corporis eum possimus quibusdam, quod recusandae tempore
            voluptate. Architecto assumenda deserunt dignissimos libero molestiae nisi officiis
            pariatur qui. Animi, commodi inventore.
        </p>
        <p class="info"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis eum
            possimus quibusdam, quod recusandae tempore voluptate. Architecto assumenda
            deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi, commodi i
            nventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
            corporis eum possimus quibusdam, quod recusandae tempore voluptate. Architecto
            assumenda deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi,
            commodi inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Architecto corporis eum possimus quibusdam, quod recusandae tempore
            voluptate. Architecto assumenda deserunt dignissimos libero molestiae nisi officiis
            pariatur qui. Animi, commodi inventore.
        </p>

        <? include('includes/footer.php');?>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

</body>
</html>
