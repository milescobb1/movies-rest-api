<?
require("config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $query = "DELETE FROM movies WHERE name=? AND listID IN (SELECT ID FROM lists WHERE lists.name = ? AND lists.UID = ?);";
   $params = array($_POST['name'], $_POST['list'], $_POST['UID']);
   print_r($params);
   print($query);
   $statement = $db -> prepare($query);
   $statement->execute($params);
}
?>