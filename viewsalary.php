</head>
<body>
<div class="navbar">
        <a href="index.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">View
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="viewstudent.php">Student</a>
              <a href="viewparents.php">Parent</a>
              <a href="viewteacher.php">Teacher</a>
              <a href="viewclass.php">Class</a>
              <a href="viewstudentenrolment.php">Student Enrolment</a>
              <a href="viewsalary.php">Salary</a>
          </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Add
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="addStudent.html">Student</a>
              <a href="addParent.html">Parent</a>
              <a href="addTeacher.html">Teacher</a>
              <a href="addClass.html">Class</a>
              <a href="addstudentenrolment.html">Student Enrolment</a>
              <a href="addsalary.html">salary</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Delete
              <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="deleteStudent.php">Student</a>
            <a href="deleteParent.php">Parent</a>
            <a href="deleteTeacher.php">Teacher</a>
            <a href="deleteclass.php">Class</a>
            <a href="deletestudentenrolment.php">Student Enrolment</a>
            <a href="deletesalary.php">salary</a>
          </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Update
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="updateStudent.php">Student</a>
              <a href="updateParent.php">Parent</a>
              <a href="updateTeacher.php">Teacher</a>
              <a href="upadateClass.php">Class</a>
              <a href="updateStudentrecord.php">Student Enrolment</a>
              <a href="updatesalary.php">salary</a>
        </div>          
             
    </div>
        <a href="Contact.html">Contact Us</a>
    </div>
    <h1>Welcome to St Alphonsus R.C. Primary School. </h1>
        <p>Welcome to St. Alphonsus R.C. Primary School.  This is a school where our children enjoy their learning, the staff work hard to establish a caring Christian community and everyone is valued equally. We regard it as a privilege to work with parents in every aspect of their children’s learning and development. .</p>

        <h2>History</h2>
        <p>We have high expectations for all our children and provide a rich and varied curriculum with an emphasis on enjoyment and enquiry.  St. Alphonsus is a happy school and we believe we achieve this by providing a safe and secure environment in which our children grow and learn with confidence...</p>
    </body>
</html>

<style>
    body, h1, h2, p, select, label, input {
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f0f0f0; 
    }
    
    
    .navbar {
      background-color: #333; 
      overflow: hidden;
    }
    
    .navbar a {
      float: left;
      display: block;
      color: #fff; 
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    .navbar a:hover {
      background-color: #555; 
      color: #fff; 
    }
    
    .dropdown {
      float: left;
      overflow: hidden;
    }
    
    .dropdown .dropbtn {
      font-size: 16px;  
      border: none;
      outline: none;
      color: #fff; 
      padding: 14px 16px;
      background-color: #333; 
      font-family: inherit;
      margin: 0;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9; 
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      float: none;
      color: #333; 
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .dropdown-content a:hover {
      background-color: #ddd; 
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    
    h1, h2, p {
      margin: 20px;
    }
    
    
    form {
      max-width: 600px;
      margin: 20px;
      background-color: #fff; 
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    label {
      display: block;
      margin-bottom: 8px;
    }
    
    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }
    
    input[type="submit"] {
      background-color: #4CAF50; 
      color: #fff; 
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049; 
    }
    </style>

<?php
$link = mysqli_connect("localhost", "root", "", "backend");

if ($link === false) {
    die("connection failed: ");
}
?>

<h3>See all slary </h3>

<table>

    <tr>
        <th width="150px">teacher id<br><hr></th>
        <th width="250px">teacher name<br><hr></th>
        <th width="250px">bank account<br><hr></th>
        <th width="250px">salary<br><hr></th>
        

    </tr>

    <?php

    $sql = mysqli_query($link, "SELECT teacherid ,teachername, bankaccount, salary FROM salary");
    while ($row = $sql->fetch_assoc()) {
        echo "
        <tr>
            <th>{$row['teacherid']}</th>
            <th>{$row['teachername']}</th>
            <th>{$row['bankaccount']}</th>
            <th>{$row['salary']}</th>
            
        </tr>";
    }
    ?>

</table>
</body>
</html>
