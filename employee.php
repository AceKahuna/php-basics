<?php
date_default_timezone_set("Africa/Nairobi");
if(isset($_POST["dob"])) {
    extract($_POST);

//echo "$names $dob $scholarship $course";
//connect
//$scholarship = isset($scholarship) ? "Yes" : "No";
    $conn = mysqli_connect("localhost", "root", "", "shule");
    $sql = "INSERT INTO `employees`(`id`, `names`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`)
VALUES (null,'$names','$email','$address','$dob','$department','$gender','$kra_pin','$salary')";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));
// or die helps one to debug the coding
    $today= date("d-M-y");
    $message = "Employee $names has been registered successfully at $today";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Form</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h1>Shule Bora institute</h1>
            <h3>Register Employee</h3>
            <p class="text-success">
                <?php
                if(isset($message))
                    echo $message;
                ?>
            </p>
            <form action="employee.php" method="post">
                <!--names,email,gender,course,dob,scholarship_status,school_id-->
                <div class="form-group">
                    <input type="text"  required class="form-control" name="names" placeholder="Names">
                </div>
                <div class="form-group">
                    <input type="email" required class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="dob" placeholder="Date of Birth">
                </div>
                <div class="form-group">
                    <select name="department" class="form-control">
                        <option value="Mathematics">Mathematics</option> <!--the value is what the server will see-->
                        <option value="Languages">Languages</option>
                        <option value="Science">Science</option>
                        <option value="Club and Societies">Club and Societies</option>
                        <option value="Sanatorium">Sanatorium</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Technical">Furniture</option>
                    </select>
                </div>
                <div class="radio">
                    <label><input type="radio"  value="Female" name="gender"> Female
                    </label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="Male" name="gender"> Male</label>
                </div>
                <div class="form-group">
                    <input type="number" required class="form-control" name="kra_pin" placeholder="KRA PIN">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="salary" placeholder="Salary">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>