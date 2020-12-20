<?php
$db_server = mysqli_connect("localhost", "payload", "payload");

if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error($db_server));

mysqli_select_db($db_server, "payloads") or die("Unable to select database: " . mysqli_error($db_server));

$data = file_get_contents('php://input');

$query = "INSERT INTO payload VALUES('".$data."')";
mysqli_query($db_server, $query);

mysqli_close($db_server);
