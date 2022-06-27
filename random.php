<?php
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz01234567890123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    $codigo = substr(str_shuffle($permitted_chars), 0, 7);
    //echo "$codigo";
?>