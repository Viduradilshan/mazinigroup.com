
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mazini";

// Create connection
$mysql = new mysqli($servername, $username, $password, $dbname);

if ($mysql->connect_error) {

  die("Connection failed: " . $mysql->connect_error);
}
?>


<?php function base_url($slug)
{
  echo 'http://localhost/nmazini/' . $slug;
}






?>