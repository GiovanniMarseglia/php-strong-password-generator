<?php
function RandomPass($lunghezza)
{
    $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomchar = '';

    for ($i = 0; $i < $lunghezza; $i++) {

        $value = rand(0, strlen($char) - 1);
        $randomchar .= $char[$value];

    }
    return $randomchar;
}
