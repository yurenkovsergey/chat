<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10.12.2017
 * Time: 18:12
 */
    $connection = mysqli_connect('127.0.0.1', 'mysql', 'mysql', 'chat_db');
    if(!$connection){
        echo 'Cannnot connect to DB';
        exit;
    }