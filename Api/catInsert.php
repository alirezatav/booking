

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

$sql = "INSERT INTO wp_ab_categories
( name)
 VALUES ( '$_POST[name]')
;";





if ($mysqli->query($sql) === TRUE) {
    echo "sucsses";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}




?>