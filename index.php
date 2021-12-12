<?php
    include_once 'sql_connect.php';
?>

<html>
    <head>
    <meta charset="UTF-8">
    <title>Database Homepage </title>
</head>
<body>
<body>
<h1 style = "font-size:xx-large; color:royalblue; text-align:left; font-family:Copperplate; background-color:aliceblue; outline-color:black">CPSC 332 Database</h1>
<p></p>

<?php
    echo "Welcome to the CPSC 332 Database!" . "<br>";
?>

<form method = "post">
    <!-- <input type = "submit" name = "button" value = "button" /> -->
    <!-- <select name = "selection">
        <option>Professors</option>
        <option>Students</option>
        <option>Department</option>
        <option>Courses</option>
        <option>Sections</option>
    </select> -->
    <!-- <input type = "submit" name="professors" value="Professors"></input>
    <input type = "submit" name="students" value="Students"></input>
    <input type = "submit" name="department" value="Department"></input>
    <input type = "submit" name="courses" value="Courses"></input>
    <input type = "submit" name="sections" value="Sections"></input> -->

    <button type = submit style = "background-color:coral;" name = "professors" value = "Professors">Professors</button>
    <button type = submit style = "background-color:coral;"name = "students" value = "Students">Students</button>
    <button type = submit style = "background-color:coral;"name = "department" value = "Department">Department</button>
    <button type = submit style = "background-color:coral;"name = "courses" value = "Courses">Courses</button>
    <button type = submit style = "background-color:coral;"name = "sections" value = "Sections">Sections</button>

    <!-- <form action="http://ecs.fullerton.edu/~cs332s25/student.php">
            <button type= submit value= STUDENT>STUDENT</button>
        </form> -->

</form>

<?php
    $sql;
    $result = $conn->query($sql);
    $result_check = mysqli_num_rows($result);

// ---------------------------------------------------------------------------
    if(isset($_POST['students'])){
        header("Location: student.php");
    }

// ---------------------------------------------------------------------------
    if(isset($_POST['professors'])){
        header("Location: professor.php");
    }

// ---------------------------------------------------------------------------
    if(isset($_POST['department'])){
        header("Location: department.php");
    }

// ---------------------------------------------------------------------------
    if(isset($_POST['courses'])){
        header("Location: courses.php");
    }

// ---------------------------------------------------------------------------

if(isset($_POST['sections'])){
    header("Location: sections.php");
}

// ---------------------------------------------------------------------------



?>

</body>

</html>