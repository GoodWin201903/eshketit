<?php

require_once 'db.php';

$name=$_POST['name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$password= md5($_POST['password']."figf21");


$stmt= $pdo->query('INSERT INTO `reg`(`name`, `last_name`,  `phone`, `password`) VALUES (
                                                                                                "'.$name.'",
                                                                                                "'.$last_name.'",                                                                                                 
                                                                                                "'.$phone.'",
                                                                                                "'.$password.'"                                                                  
                                                                                                )');
var_dump($pdo->errorInfo());
include "index.html";