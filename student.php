<?php
    include_once 'sql_connect.php';
?>

<html>
    <head>
    <meta charset="UTF-8">
    <title>Database Homepage </title>
</head>
<body>
<h1 style = "font-size:xx-large; color:royalblue; text-align:left; font-family:Copperplate; background-color:aliceblue; outline-color:black">Student Table</h1>

<form method = "post">
    <button type = submit style = "background-color:coral;" name = "main" value = "Main">Main Menu</button>
    <button type = submit style = "background-color:coral;" name = "all" value = "All">Print Table</button>
    <select name = "selection" >
        <option value = "name">Name</option>
        <option value = "cwid">CWID</option>
        <option value = "address">Address</option>
        <option value = "telephone">Telephone</option>
    </select>
    <!-- <input type = "submit" name = "submit" value = "Options"></input> -->
    <button type = "submit" style = "background-color:coral;" name = "list" value = "selection" >View</button>
    
    <input type = text name = "custom" value = "">
        <button type = submit style = "background-color:coral;" name = "search" value = "Search">Search</button>
    </input>
</form>

<?php
// ---------------------------------------------------------------------------
    // Back to main menu
    if(isset($_POST['main'])){
        header("Location: index.php");
    }

// ---------------------------------------------------------------------------
    // Show table
    if(isset($_POST['all'])){
        $sql = "SELECT * FROM students;";
        $result = $conn->query($sql);
        $result_check = mysqli_num_rows($result);
        if ($result_check > 0){
            echo "<pre>" . "Name" . "\t|\t" . "CWID" . "\t\t|\t\t\t" . "Address" . "\t\t\t|\t" . "Telephone" . "\t|\t" . "<br>";
            echo "-------------------------------------------------------------------------------------------------------------------------";
            while ($row = mysqli_fetch_assoc($result)){
                echo "<pre>" . $row['name'] ."\t|\t". $row['cwid'] ."\t|\t". $row['address'] ."\t|\t". $row['telephone'] ."\t|\t" . "<br>";      
            }
        }
        else{
            echo " 0 results" . "<br>";
        }
    }

// ---------------------------------------------------------------------------
    // Show selected values from dropdown
    else if(isset($_POST['list'])){
        $dropdown_val = $_POST['selection'];
        $sql = "SELECT $dropdown_val FROM students;";
        $result = $conn->query($sql);
        $result_check = mysqli_num_rows($result);
        if ($result_check > 0){
            if($dropdown_val == 'name'){
                echo "<pre>" . "Name" . "<br>";
                echo "-------------------------------------------------------------------------------------------------------------------------";
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<pre>" . $row['name'] . "<br>";      
                }
            }
            else if($dropdown_val == 'cwid'){
                echo "<pre>" . "CWID" . "<br>";
                echo "-------------------------------------------------------------------------------------------------------------------------";
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<pre>" . $row['cwid'] . "<br>";      
                }
            }
            else if($dropdown_val == 'address'){
                echo "<pre>" . "Address" . "<br>";
                echo "-------------------------------------------------------------------------------------------------------------------------";
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<pre>" . $row['address'] . "<br>";      
                }
            }
            else if($dropdown_val == 'telephone'){
                echo "<pre>" . "Telephone #" . "<br>";
                echo "-------------------------------------------------------------------------------------------------------------------------";
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<pre>" . $row['telephone'] . "<br>";      
                }
            }
        }
        else{
            echo " 0 results" . "<br>";
        }
    }
 
// ---------------------------------------------------------------------------    
    // Show searched
    else if(isset($_POST['custom'])){
        $val = $_POST['custom'];
        //$val = strtolower($val);
        echo "$val";
        $sql = "SELECT * FROM students AS s WHERE 'name' LIKE '$val' ;";
        $result = $conn->query($sql);
        $result_check = mysqli_num_rows($result);
        if ($result_check > 0){
            echo "<pre>" . "Name" . "\t|\t" . "CWID" . "\t\t|\t\t\t" . "Address" . "\t\t\t|\t" . "Telephone" . "\t|\t" . "<br>";
            echo "-------------------------------------------------------------------------------------------------------------------------";
            while ($row = mysqli_fetch_assoc($result)){
                echo "<pre>" . $row['name'] ."\t|\t". $row['cwid'] ."\t|\t". $row['address'] ."\t|\t". $row['telephone'] ."\t|\t" . "<br>";      
            }
        }
        else{
            echo "0 results" . "<br>";
        }
    }



?>