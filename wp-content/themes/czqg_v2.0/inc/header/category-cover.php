<?php
if(in_category(array('xmgk', 'xmzs', 'xmjz', 'jsbz', 'tdly'))) {
     echo '<div class="category-cover category-cover-xmgk"></div>';
} elseif (in_category('gsgk')) {
     echo '<div class="category-cover category-cover-gsgk"></div>';
} elseif (in_category('tzgg', 'tzgg', 'gcdt', 'aqdt', 'jcdt', 'hydt')) {
     echo '<div class="category-cover category-cover-tzgg"></div>';
} elseif (in_category('fwly', 'fwpx', 'fwsp')) {
     echo '<div class="category-cover category-cover-fwly"></div>';
} elseif (in_category('ddjs', 'djgz', 'dflz')) {
     echo '<div class="category-cover category-cover-ddjs"></div>';
} elseif (in_category('zbgg')) {
     echo '<div class="category-cover category-cover-zbgg"></div>';
} else {
     echo '<div class="category-cover"></div>';
}
?>
