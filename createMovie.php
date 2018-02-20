<?
require("config.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $query = "INSERT INTO movies (name, listID) SELECT ?, ID FROM lists WHERE name = ?";
   print_r($_POST);
   $params = array($_POST['name'], $_POST['list']);
   $statement = $db -> prepare($query);
   $statement->execute($params);
}
?>