

<?php
include('arrays.php');

echo '<dl class="accordion">';
foreach ($SidebarItems as $parent) {

    echo "<dt><a href=".$parent['url'].">".$parent['title']."</a></dt>";

    if (is_array($parent['children'])) {
        echo '<dd> <ul class="sub-catalog">';
        foreach ($parent['children'] as $child) {
            echo "<li><a href=".$child['url'].">".$child['title']."</a></li>";
        }
        echo '</ul></dd>';
    }

}
echo '</dl>';

?>


