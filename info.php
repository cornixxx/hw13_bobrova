<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Info </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700italic,400italic,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="wrapper">

    <? include('includes/header.php');?>

    <main class="m-page">
        <section class="product-description">
            <div class="container clearfix">
                <h2> Шампунь ежедневного пользования </h2>
                <div class="clearfix">
                    <img src="img/shampoo.jpg" alt="shampoo"/>
                    <div class="product-rate">
                        <dl>
                            <dt> Раздел: </dt>
                            <dd> Косметология </dd>
                            <dt> Объем / Вес: </dt>
                            <dd> 250 мл </dd>
                            <dt> Кол-во очков: </dt>
                            <dd class="clearfix"> <span> 14 </span>
                                <ul class="clearfix">
                                    <li class="icon-star"> </li>
                                    <li class="icon-star"> </li>
                                    <li class="icon-star"> </li>
                                    <li class="icon-star"> </li>
                                    <li class="icon-star"> </li>
                                </ul>
                            </dd>
                            <dt> Отзывов: </dt>
                            <dd> 15 </dd>
                        </dl>
                        <span class="price"> 280 грн. </span>
                        <span class="former-price"> 344 грн. </span>
                        <p> Хотите купить дешевле? <span> Позвоните представителю интернет-магазина.</span></p>
                        <a class="button" href="#"> Купить </a>
                        <div class="social-likes clearfix">
                            <div class="clearfix">
                                <a class="vk-likes" href="#"> Это интересно </a>
                                <span class="likes"> 1 </span>
                            </div>
                            <div class="clearfix">
                                <a class="fb-likes" href="#"> Я рекомендую </a>
                                <span class="likes"> 0 </span>
                            </div>
                            <div class="clearfix">
                                <a class="tw-likes" href="#"> Твитнуть </a>
                                <span class="likes"> 0 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3> Основные ингредиенты </h3>
                    <p> Доктор Нонна на телеканале домашний в программе спросите повара
                        на телеканале домашний в программе спросите повара Доктор Нонна на
                        телеканале домашний в программе Доктор Нонна на телеканале домашний
                        в программе. Доктор Нонна на телеканале домашний в программе спросите
                        повара Доктор Нонна на телеканале домашний в программе спросите...
                    </p>
                    <a class="details" href="#"> Развернуть </a>
                </div>
                <div class="product-info">
                    <h3> Показания </h3>
                    <p> Доктор Нонна на телеканале домашний в программе спросите повара
                        на телеканале домашний в программе спросите повара Доктор Нонна на
                        телеканале домашний в программе Доктор Нонна на телеканале домашний
                        в программе. Доктор Нонна на телеканале домашний в программе спросите
                        повара Доктор Нонна на телеканале домашний в программе спросите...
                    </p>
                    <a class="details" href="#"> Развернуть </a>
                </div>
                <div class="product-info">
                    <h3> Полное описание продукта </h3>
                    <p> Доктор Нонна на телеканале домашний в программе спросите повара
                        на телеканале домашний в программе спросите повара Доктор Нонна на
                        телеканале домашний в программе Доктор Нонна на телеканале домашний
                        в программе. Доктор Нонна на телеканале домашний в программе спросите
                        повара Доктор Нонна на телеканале домашний в программе спросите...
                    </p>
                    <a class="details" href="#"> Развернуть </a>
                </div>
                <div class="product-info">
                    <h3> Способы применения </h3>
                    <p> Доктор Нонна на телеканале домашний в программе спросите повара
                        на телеканале домашний в программе спросите повара Доктор Нонна на
                        телеканале домашний в программе Доктор Нонна на телеканале домашний
                        в программе. Доктор Нонна на телеканале домашний в программе спросите
                        повара Доктор Нонна на телеканале домашний в программе спросите...
                    </p>
                    <a class="details" href="#"> Развернуть </a>
                </div>
            </div>
        </section>

        <section class="looked">
            <div class="container-fluid">
                <h2> Вам также может понравиться </h2>
                <div class="looked-block clearfix">

                    <?php
                    include('includes/arrays.php');

                    $i = 0;
                    foreach ($CatalogItems as $item) {
                        echo '<div class="looked-product">';
                        echo "<a href=" . $item['url'] . "><img src=" . $item['src'] . " alt=" . $item['alt'] . "/></a>";
                        echo '<p>' . $item['name'] . '</p>';
                        echo "<span class=\"price\">" . $item['price'] . "</span>";
                        echo '</div>';

                        if(++$i == 5) break;
                    }
                    ?>

                </div>
            </div>
        </section>

    </main>

</div>

<!--footer -->

<footer class="f-page">
    <div class="container">
        <? include('includes/footer.php');?>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</body>
</html>