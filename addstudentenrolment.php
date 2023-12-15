<?php
$link = mysqli_connect("localhost","root","","backend");
 
if($link === false) {
     die("connection failed: ");
}

if (isset($_POST['submit'])) {
    $eid = $_POST['eid'];
    $pid = $_POST['pid'];
    $sid = $_POST['sid'];
    $sinfo = $_POST['sinfo'];


    $sql = "INSERT INTO studentenrolment ( enrolmentid, parentsid , studentid, studentinfo) VALUES ('$eid','$pid','$sid','$sinfo')";
if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error adding record: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>