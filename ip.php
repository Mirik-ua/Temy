<?php

  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $name = trim($_POST['name']);
  $dt = date('Y-m-d H:i:s');

  if($email == "" || $email == " " ||
   $phone == "" || $phone == " " ||
   $name == "" || $name == " ") {
    echo "enter all empty input";
  }
  elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo "enter valid email darlie";
  }else{
    file_put_contents('ip.txt', "$dt $email $phone $name \n", FILE_APPEND);
    echo "1";
  }
