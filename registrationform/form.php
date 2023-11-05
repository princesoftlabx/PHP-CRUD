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
                    <input type="text" name="fname" placeholder="Enter Your Name" required/>
                </div>
                <div class="input-box">
                    <span class="details">username</span>
                    <input type="text" name="uname" placeholder="Enter Your username" required/>
                </div>
                <div class="input-box">
                    <span class="details">Contact Number</span>
                    <input type="number" name=cnumber placeholder="Enter Your Mobile No." required/>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="Enter Your Email" required/>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="addresss" placeholder="Enter Your Address" required/>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" name="passwd" placeholder="Enter Your Password" required/>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" name="cpasswd" placeholder="Confirm Your Password" required/>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" value="Male" id="dot-1">
                <input type="radio" name="gender" value="Female" id="dot-2">
                <input type="radio" name="gender" value="Others" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender" name="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender" name="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender" name="gender">Others</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Register">
                <?php
                include('config.php');
                if(isset($_POST['submit'])){
                    $res = $conn->query("INSERT INTO reg_data (fname, uname, cnumber, email, addresss, gender, passwd, cpasswd) VALUES ('".$_POST['fname']."','".$_POST['uname']."','".$_POST['cnumber']."','".$_POST['email']."','".$_POST['addresss']."','".$_POST['gender']."','".$_POST['passwd']."','".$_POST['cpasswd']."'); ");
                    header("Location:display.php");
                }
                ?>
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>