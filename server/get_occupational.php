<?php

include('connection.php');

$stmt=$conn->prepare("SELECT * FROM occupationalgroup");
$stmt -> execute();
$occupational_group= $stmt-> get_result();


?>  