<?php

   $dsn = "mysql:host=35.230.96.122;port=3306;dbname=movieLists";
   $user = "user";
   $password = "";

   $db = new PDO($dsn, $user, $password);

   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>