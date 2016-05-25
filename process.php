<?php

function pr($array = array()) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

pr($_POST);

$data = $_POST['day'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//insert data
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//

foreach ($data as $item) {
    foreach ($item['day'] as $key => $value) {
        //echo $key;
        //echo '<br/>';
        for ($i = 0; $i < count($item['hour_s']); $i++) {
            $sql = "INSERT INTO reservations (restaurant_id, day, start_time, end_time) "
                    . "VALUES ('1', '" . $key . "', '" . $item['hour_s'][$i] . "', '" . $item['hour_e'][$i] . "')";

            $conn->query($sql);
        }
    }
}

$conn->close();
