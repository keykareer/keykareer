<?php


include('../server/connection.php');

$id=0;


//ADD RECORDS
if (isset($_POST['add'])){
    $infographicsTitle = $_POST['subject_area_title'];
    //this are files itself (image)
    //$file_name = $_FILES['subject_area_file']['temporary name']
    $image1 = $_FILES['subject_area_file']['tmp_name']; 
    
    //image names
    $image_title1 = $infographicsTitle.".png"; //rename img ex: hotdog + .png

    //upload names
    move_uploaded_file($image1,"../img/infographics/subject/".$image_title1);
   
   $stmt = $conn->prepare("INSERT INTO subjectarea (subject_area_title,subject_area_file) VALUES(?,?)") 
    or die("Couldn't connect to database");

    $stmt->bind_param('ss',$infographicsTitle,$image_title1);
    
    if($stmt->execute()){

        $_SESSION['message'] = "Record has been added!";
        $_SESSION['msg_type'] = "success";
    
        header("Location: admin-infographics-subjectarea.php?subject_area_added=image has been added successfully");
    }
    else {
        header("Location: admin-infographics-subjectarea.php?subject_area_failed=error occurred try again");
    }


}
//DELETE RECORDS
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    //deletes image on local desktop folder of img/infographics
    $result = $conn->query("SELECT * FROM subjectarea WHERE id=$id") or die("Couldn't connect to database"); //connects to the database as $result
    $row = $result->fetch_assoc(); // fetch results as $row
    $image = $row['subject_area_file']; //set the filename of the image into $image
    $path = "../img/infographics/subject/".$image; //variable $path for directory

    if (is_file($path)) { //compares if $path is the same as the filename in local img/infographics folder
    unlink($path); //if yes, it unlinks/delete from folder
    } else {
    die('your image not found');}

    //deletes whole row on database
    
    $conn->query("DELETE FROM subjectarea WHERE id=$id") or die("Couldn't connect to database");
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    

    header("Location: admin-infographics-subjectarea.php");
}
