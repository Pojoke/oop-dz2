<?php
require "class.php";

$user = new User("add", "738297");

if ($user->isValid("add", "738297")) {
    echo "Ласкаво просимо";
} else {
    echo "Неправильний логін або пароль";
}
?>
