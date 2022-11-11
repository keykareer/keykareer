<?php

include('../server/connection.php');

$question_id=0;
$update = false;
$question ='';
$question_category='';
$question_field='';
//ADD RECORDS
if (isset($_POST['save'])){
    $question = $_POST['question'];
    $question_category = $_POST['question_category'];
    $question_field = $_POST['question_field'];
    $conn->query("INSERT INTO questionnaire (question,question_category,question_field) VALUES('$question','$question_category','$question_field')") 
    or die($conn->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("Location: admin-questionnaire.php");
}
//DELETE RECORDS
if (isset($_GET['delete'])){
    $question_id = $_GET['delete'];

    $conn->query("DELETE FROM questionnaire WHERE question_id=$question_id") or die("Couldn't connect to database");

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("Location: admin-questionnaire.php");
}
//EDIT APPEARANCE WHEN EDIT BUTTON CLICKED

if (isset($_GET['edit'])){
    $question_id = $_GET['edit'];
    $update = true;
    $result = $conn->query("SELECT * FROM questionnaire WHERE question_id=$question_id") or die("Couldn't connect to database");

    if ($result){
        $row = $result->fetch_array();
        $question = $row['question'];   
        $question_category = $row['question_category'];
        $question_field = $row['question_field']; 
    }
}
//UPDATE RECORDS
if (isset($_POST['update'])){
    $question_id = $_POST['question_id'];
    $question = $_POST['question'];
    $question_category = $_POST['question_category'];
    $question_field = $_POST['question_field'];
    $conn->query("UPDATE questionnaire SET question='$question', question_category='$question_category', question_field='$question_field' WHERE question_id=$question_id") or die("Couldn't connect to database");

    
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header("Location: admin-questionnaire.php");
}