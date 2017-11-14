<?php
require_once 'autoload.php';
$user = new User();
if($user->isConnected()){
    echo 'hello';
}else {
    header('location:connect.php');
}