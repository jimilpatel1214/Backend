<?php
$link = mysqli_connect("localhost","root","","backend");
 
if($link === false) {
     die("connection failed: ");
}
if (isset($_POST['submit'])) {
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $sadd = $_POST['sadd'];
    $pid = $_POST['pid'];
    $cid = $_POST['cid'];
    

    $sql = "INSERT INTO student (studentid, studentname, studentaddress , parentid , classid) VALUES ('$sid','$sname', '$sadd','$pid','$cid')";
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error adding record: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>