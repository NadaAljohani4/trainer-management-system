<?php

include "db.php";

$search = trim($_GET['search']);

$sql = "SELECT * FROM trainers
WHERE id = '$search'
OR nationalId = '$search'
OR phone = '$search'
OR name = '$search'
OR name LIKE '$search%'";

$result = mysqli_query($conn, $sql);

$data = [];

while($row = mysqli_fetch_assoc($result)){
$data[] = $row;
}

echo json_encode($data);

?>