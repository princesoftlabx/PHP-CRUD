<?php
include('config.php');
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM reg_data WHERE id = {$id}");

$row = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <div class="title">Register Your Form</div>
        <form action="" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name </span>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                    <input type="text" name="fname" value="<?php echo $row['fname']; ?>" placeholder="Enter Your Name" required/>
                </div>
                <div class="input-box">
                    <span class="details">username</span>
                    <input type="text" name="uname" value="<?php echo $row['uname']; ?>"  placeholder="Enter Your username" required/>
                </div>
                <div class="input-box">
                    <span class="details">Contact Number</span>
                    <input type="number" name=cnumber value="<?php echo $row['cnumber']; ?>"  placeholder="Enter Your Mobile No." required/>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" value="<?php echo $row['email']; ?>"  placeholder="Enter Your Email" required/>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="addresss" value="<?php echo $row['addresss']; ?>"  placeholder="Enter Your Address" required/>
                </div>
                </div>
            <div class="button">
                <input type="submit" name="update" value="Update">
                <?php
                include('config.php');
                if(isset($_POST['update'])){
                    $res = $conn->query("UPDATE `reg_data` SET `fname`='".$_POST['fname']."',`uname`='".$_POST['uname']."',`cnumber`='".$_POST['cnumber']."',`email`='".$_POST['email']."',`addresss`='".$_POST['addresss']."' WHERE `id`='".$_POST['id']."'; ");
                    header("Location:display.php");
                }
                ?>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>