<?php


include('../server/connection.php');

$id=0;
$update = false;
$faqQuestion ='';
$faqAnswer='';

//ADD RECORDS
if (isset($_POST['save'])){
    $faqQuestion = $_POST['faqQuestion'];
    $faqAnswer = $_POST['faqAnswer'];
   
    $conn->query("INSERT INTO faqs (faqQuestion,faqAnswer) VALUES('$faqQuestion','$faqAnswer')") 
    or die("Couldn't connect to database");


    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "danger";
    header("Location: admin-faqs.php");
    
 
}
//DELETE RECORDS
if (isset($_GET['delete'])){
    $id = $_GET['delete'];

    $conn->query("DELETE FROM faqs WHERE id=$id") or die("Couldn't connect to database");
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    
    header("Location: admin-faqs.php");
 
}
//EDIT APPEARANCE WHEN EDIT BUTTON CLICKED

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $conn->query("SELECT * FROM faqs WHERE id=$id") or die("Couldn't connect to database");

    if ($result){
        $row = $result->fetch_array();
        $faqQuestion = $row['faqQuestion'];   
        $faqAnswer = $row['faqAnswer'];
    }
}
//UPDATE RECORDS
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $faqQuestion = $_POST['faqQuestion'];
    $faqAnswer = $_POST['faqAnswer'];

    $conn->query("UPDATE faqs SET faqQuestion='$faqQuestion', faqAnswer='$faqAnswer' WHERE id=$id") or die("Couldn't connect to database");

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "danger";
    header("Location: admin-faqs.php");

}