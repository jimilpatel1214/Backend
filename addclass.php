
<?php
$link = mysqli_connect("localhost","root","","backend");
 
if($link === false) {
     die("connection failed: ");
}
if (isset($_POST['submit'])) {
    $cid = $_POST['cid'];
    $cname = $_POST['cname'];
    $tid = $_POST['tid'];
    $cap = $_POST['cap'];

    $sql = "INSERT INTO class (classid, classname, teacherid, classcapacity) VALUES ('$cid','$cname', '$tid','$cap')";
if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error adding record: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>