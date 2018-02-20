<?php 
require("config.php");
if($_SERVER['REQUEST_METHOD'] === 'GET') {
   try
   {
      $ret = array();
      $statement = $db -> prepare("SELECT name from lists WHERE lists.UID = ?");
      $statement->execute(array($_GET['UID']));
      $lists = $statement->fetchAll();
      foreach($lists as $list ){
         $ret[$list['name']] = array();
      };
      $query = "SELECT lists.name as lname, movies.name, lists.ID from lists join movies on movies.listID = lists.ID WHERE lists.UID = ?";
      $statement = $db -> prepare($query);
      $statement->execute(array($_GET['UID']));
      $movies = $statement->fetchAll();
      foreach($movies as $movie) {
         array_push($ret[$movie['lname']], $movie['name']);
      }
      print(json_encode($ret));
   }
   catch (PDOException $ex)
   {
      print ("Sorry, a database error occurred.");
      print ("(Error details: $ex ");
   }
}
?>