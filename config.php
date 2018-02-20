<?php
	// $GLOBALS["hostname"] = "localhost"; 
	// $GLOBALS["username"] = "root"; 
	// $GLOBALS["password"] = "H21208272CC3983D";
   // $GLOBALS["database"] = "Movie_Lists"; 

   header("Access-Control-Allow-Origin: *");
   
   $dsn = "mysql:dbname=movieLists;unix_socket=/cloudsql/movie-lists-194921:us-west1:movie-list-db";
   $user = "user";
   $password = "H21208272CC3983D";
   
   
   try
   {
      // $db = new PDO("mysql:dbname={$GLOBALS["database"]};host={$GLOBALS["hostname"]}", $GLOBALS["username"], $GLOBALS["password"]);
      $db = new PDO($dsn, $user, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $ex)
   {
      print ("Sorry, a database error occurred.");
      print ("(Error details: $ex ");
   }
?>