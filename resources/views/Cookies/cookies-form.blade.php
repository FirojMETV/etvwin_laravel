
<?php

$cookie_name='user';
$cookie_value="q5u8JMWTd2698ncg7q4Q";

setcookie($cookie_name,$cookie_value, time()+ (300 * 1), '/');
?>

<html>
    <body>
        <?php 
        if(!isset($_COOKIE[$cookie_name])){
            echo 'cookies is not set';
        }else{
            echo $_COOKIE[$cookie_name];
        }
     
        ?>
    </body>
</html>