<?php
include('config.php');
 $dn = $_GET['id'];
 $res = $conn->query("DELETE FROM `reg_data` WHERE `id`={$dn}");
 header("Location: display.php");
 mysqli_close($conn);
 ?>