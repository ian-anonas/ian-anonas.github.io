<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $deptname = $_POST['deptname'];
        $description = $_POST['description'];
       
        $insert = mysqli_query($conn,"INSERT INTO department (DeptName, Descript) VALUES ('$deptname','$description')");
     
    }
        
?>