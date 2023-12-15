<?php
$link = mysqli_connect("localhost","root","","backend");
 
if($link === false) {
     die("connection failed: ");
}

if (isset($_POST['submit'])) {
    $tid = $_POST['tid'];
    $tname = $_POST['tname'];
    $bacno = $_POST['bacno'];
    $sal = $_POST['sal'];

    $sql = "INSERT INTO salary (teacherId, teacherName, bankaccount, salary) VALUES ('$tid', '$tname','$bacno','$sal')";
if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error adding record: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>