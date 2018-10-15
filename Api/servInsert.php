

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

$sql = "INSERT INTO wp_ab_services
( category_id, title, price, duration)
 VALUES ( '$_POST[category_id]', '$_POST[title]', '$_POST[price]', '$_POST[duration]')
;";





if ($mysqli->query($sql) === TRUE) {
    echo "sucsses";
/*    $last_id = $mysqli->insert_id;
    $sql2 = "INSERT INTO wp_ab_customer_appointments
(id,customer_id,appointment_id,location_id,payment_id,number_of_persons,extras,custom_fields,status,token,time_zone,time_zone_offset,locale,compound_service_id,compound_token,created_from,created)
 VALUES
 (NULL, '$_POST[wp_user_id]', '$last_id ', NULL, NULL, '1', NULL, NULL, 'approved', NULL, NULL, NULL, NULL, NULL, NULL, 'frontend', SYSDATE())
;";
    //mysqli_query($mysqli,$sql2);

    if ($mysqli->query($sql2) === TRUE) {
        echo "sucsses";
    }*/
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}




?>