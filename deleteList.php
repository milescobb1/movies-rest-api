<?
require("config.php");
try{
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $query = "DELETE FROM lists WHERE name=? AND UID = ?;";
      $params = array($_POST['name'], $_POST['UID']);
      $statement = $db -> prepare($query);
      $statement->execute($params);
   }
}
catch (Exception $e) {
   print_r($e);
}
?>