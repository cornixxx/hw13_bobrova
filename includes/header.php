
    <header class="h-page">
        <div class="container-fluid clearfix">

            <form action="#">
                <div class="search-container">
                    <input  type="search" placeholder="Поиск"/>
                    <button type="submit"> </button>
                </div>
            </form>

            <a class="icon-basket" href="#"> </a>
            <nav class="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <?php
                   include('arrays.php');
                    $class='nav navbar-nav';

                    echo '<ul class="'.$class.'">';
                    foreach ($navItems as $parent) {

                        echo "<li class=\"recomend-link\"><a href=".$parent['url'].">".$parent['title']."</a>";

                        if (is_array($parent['children'])) {
                            echo '<ul class="sub-menu clearfix">';
                            foreach ($parent['children'] as $child) {
                                echo "<li><a href=".$child['url'].">".$child['title']."</a>";
                            }
                            echo '</ul>';
                        }
                        echo '</li>';
                    }
                    echo '</ul>';

                    ?>

                </div>
            </nav>
        </div>
    </header>

