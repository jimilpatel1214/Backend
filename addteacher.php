<?php
$link = mysqli_connect("localhost","root","","backend");
 
if($link === false) {
     die("connection failed: ");
}

if (isset($_POST['submit'])) {
    $tid = $_POST['tid'];
    $cid = $_POST['cid'];
    $ttname = $_POST['ttname'];
    $tcontact = $_POST['tcontact'];
    $tadd = $_POST['tadd'];

   $sql = "INSERT INTO teacher (teacherid, teachername, classid, contact, address) VALUES ($tid, '$ttname', $cid, '$tcontact', '$tadd')";

if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error adding record: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>