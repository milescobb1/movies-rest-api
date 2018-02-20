<?
require("config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $query = "INSERT INTO lists (name, UID) VALUES (?,?)";
   $params = array($_POST['name'],$_POST['userId']);
   $statement = $db -> prepare($query);
   $statement->execute($params);
}
?>