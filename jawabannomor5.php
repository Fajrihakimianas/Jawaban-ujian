<?php
    $text ='abcdefghijklmnopqrstuvwxyz1234567890'
    $panj = 32;
    $txt1 = strlen($text)-1;
    $result = '';

    for($i=1; $i<=$panj; $i++) {
        $result .=
        $text[rand(3, $txt1)];
    }

    echo $result;
    ?>
