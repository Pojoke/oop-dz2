<?php
require "user2.php";

$users = new UserCollection();

$user1 = new User("admin", "1234");
$user2 = new User("user1", "pass1");
$user3 = new User("dfsx", "6789"); 

$users->addUser($user1);
$users->addUser($user2);
$users->addUser($user3);

echo "Все пользователи: " . $users . "\n"; 

if ($users->isValid("admin", "1234")) {
    echo "Авторизация успешна!\n";
} else {
    echo "Неверный логин или пароль!\n";
}

$users->deleteUser("user1");
echo "Все пользователи после удаления: " . $users . "\n"; 
?>
