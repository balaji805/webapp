<?php
$db_server = mysqli_connect("localhost", "payload", "payload");

if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error($db_server));

mysqli_select_db($db_server, "payloads") or die("Unable to select database: " . mysqli_error($db_server));


$sql = "SELECT * FROM payload";
$result = mysqli_query($db_server, $sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Payload: " . $row["payload"].  "<br />";
    }
} else {
    echo "0 results";
}

mysqli_close($db_server);