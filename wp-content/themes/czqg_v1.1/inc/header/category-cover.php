<?php
if(in_category(array('xmgk', 'xmzs',))) {
     echo '<div class="category-cover category-cover-xmgk"></div>';
} elseif (in_category('xwzx')) {
     echo '<div class="category-cover category-cover-xwzx"></div>';
} else {
     echo '<div class="category-cover"></div>';
}
?>
