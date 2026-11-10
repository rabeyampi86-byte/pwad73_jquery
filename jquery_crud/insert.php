<?php
$db = new mysqli("localhost", "root", "", "jquery_crud");
$name = $_GET['name'];
$address = $_GET['add'];
$db->query("INSERT INTO students VALUES(NULL, '$name', '$address')");
if($db->affected_rows){
    echo "Successfully data inserted";
    }else{
        echo "Something is wrong";
    }
?>