<?php
$chars =
    "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+;:,.?";
$sflstr = str_shuffle($chars);
echo substr($sflstr, 0, 8);
?>
<br>
<a href="./random-password.php">Random Password</a>
