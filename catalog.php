<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Catalog </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700italic,400italic,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="wrapper">

    <? include('includes/header.php');?>

    <main class="m-page">

        <!--catalog-main-->

        <section class="catalog-main">
            <div class="container-fluid clearfix">
                <h2> Каталог </h2>
                <nav class="nav-mini">
                    <ul class="clearfix">
                        <li> <a href="#"> Новинки </a></li>
                        <li><a href="#"> Акции </a></li>
                        <li><a href="#"> Я рекомендую </a></li>
                    </ul>
                </nav>

                <nav class="side-menu">
                    <? include('includes/sidebar.php');?>
                </nav>

                <div class="catalog-block clearfix">

                    <?php
                    include('includes/arrays.php');

                    foreach ($CatalogItems as $item) {
                        echo '<div class="catalog-product">';
                        echo "<a href=".$item['url']."><img src=".$item['src']." alt=".$item['alt']."/></a>";
                        echo '<p>'.$item['descript'].'</p>';
                        echo "<span class=\"price\">" .$item['price']. "</span>";
                        echo "<a class=\"button\" href='#'> Купить </a>";
                        echo '</div>';
                    }
                    ?>

                </div>

            </div>
        </section>

        <!-- looked-->

        <section class="looked">
            <div class="container-fluid">
                <h2> Вы смотрели </h2>


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