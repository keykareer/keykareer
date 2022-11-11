<?php

include('connection.php');

$stmt=$conn->prepare("SELECT * FROM subjectarea");
$stmt -> execute();
$subject_area= $stmt-> get_result();


?>  