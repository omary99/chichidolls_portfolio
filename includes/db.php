<?php
$dbConfig = array(
    "db_host" => "localhost",
    "db_user" => "root",
    "db_pass" => "",
    "db_name" => "chichidolls"
);

foreach ($dbConfig as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$connection){
    echo "Sorry, connection not established";
}
?>
