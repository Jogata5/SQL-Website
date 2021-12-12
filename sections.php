<?php
    include_once 'sql_connect.php';
?>

<html>
    <head>
    <meta charset="UTF-8">
    <title>Database Homepage </title>
</head>
<body>
<h1 style = "font-size:xx-large; color:royalblue; text-align:left; font-family:Copperplate; background-color:aliceblue; outline-color:black">Section Table</h1>

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
        <button type = submit style = "background-color:coral;" name = "search" value = "Search CWID">Search</button>
    </input>
</form>

<?php
// ---------------------------------------------------------------------------
    // Back to main menu
    if(isset($_POST['main'])){
        header("Location: index.php");
    }