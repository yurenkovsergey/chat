<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10.12.2017
 * Time: 23:01
 */


require_once 'config.php';
$message = $_POST['text'];
$query = "INSERT INTO `messages`(`message`) VALUES ('$message')";
$result = mysqli_query($connection, $query);
require_once "./index.php";