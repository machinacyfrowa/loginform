<?php
require('class/User.class.php');
echo "<pre>";
$db = new mysqli('localhost', 'root', '', 'loginForm');
$user = new User("jkowalski","tajneHasło");
$user->login();

?>