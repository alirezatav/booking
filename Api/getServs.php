

<?php

define('DB_DATABASE', 'myDatabase');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($mysqli,"utf8");

$sql = "select id,category_id,title from wp_ab_services
where category_id='$_POST[category_id]'

;";





   $result = $mysqli->query($sql);
   $json = [];
   while($row = $result->fetch_assoc()){
         $json [] = $row;
   }

   echo json_encode($json);



?>