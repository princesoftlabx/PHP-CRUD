<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "validation";

 $conn = mysqli_connect("localhost", "root", "", "validation");

 if(!$conn)
 {

     die ("Connection Failed" . mysqli_connect_error());

 }
 ?>