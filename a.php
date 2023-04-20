<?php
$timestamp = $_GET['time'];
$device_id = $_GET['device_id'];


$str1 = 'YNxT9w7GMdWvEOKa1.31.2com.pikcloud.pikpak'.$device_id.$timestamp.'7F98aCyztP197/Jpj0kyZ2RJJX0gE2nxb5rew+8t5kLHPn3SS50';
$md5_str1 = md5($str1);

$str2 = 'VFecCvF5KaoBChUnAzMm8ZaegvEp6c0Fw1ToQrOkw';
$md5_str2 = md5($md5_str1.$str2);

$str3 = 'NV1FoYGYxd+sLveVSOa3IE';
$md5_str3 = md5($md5_str2 . $str3);

$str4 = '6vbXsue3KQ5lt3';
$md5_str4 = md5($md5_str3 . $str4);

$str5 = 'QLTiMzZNc7Pv7gt/';
$md5_str5 = md5($md5_str4 . $str5);

$str6 = 'ymEsu+53oStQGa2H4g7yVXUyxbGXMZOYkBOrilewM1EljsV7aQ+Ve';
$md5_str6 = md5($md5_str5 . $str6);

$str7 = 'su89wtUHGxoR0iyMUK/4ihz6q6N5gulZHGelt/uSYgPOudlKia4UEt';
$md5_str7 = md5($md5_str6 . $str7);

$str8 = 'GYY';
$final_md5 = md5($md5_str7 . $str8);

echo $final_md5; 
?>
