<?php
$link = mysqli_connect("localhost","root","","backend");
 
if($link === false) {
     die("connection failed: ");
}

if (isset($_POST['submit'])) {
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pemail = $_POST['pemail'];
    $eid = $_POST['eid'];
    $pcon = $_POST['pcon'];
   

    $sql = "INSERT INTO parents (parentsid ,parentsName, parentscontact, email, enrolmentid) VALUES ('$pid','$pname','$pcon', '$pemail', '$eid')";
if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error adding record: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>