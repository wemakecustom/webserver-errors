<?php

if (!empty($_GET['code']) && ($code = (int) $_GET['code']) && file_exists($file = "$code.http")) {
    $f = fopen($file, 'r');

    while (($line = fgets($f)) && trim($line)) {
        header($line);
    }

    fpassthru($f);
    fclose($f);
} else {
    echo '<ul>';
    foreach (glob('*.http') as $file) {
        $code = str_replace('.http', '', $file);
        echo '<li><a href="?code='.$code.'">'.$code.'</a></li>';
    }
    echo '</ul>';
}
