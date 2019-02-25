<?php
//array $_POST
if(isset($_POST["submit"])) // isset used to check is the submit btn is clicked
{
    //$first= $_POST["first"];
    //$second= $_POST["second"];
    extract($_POST);
    $result=  $first + $second;


}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <style>    </style>
</head>
<body>
<h2 class="text-center text-danger ">Calculator</h2>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <br>
            <br>
            <form action="forms.php" method="post">
                <div class="form-group">
                    <input type="number" name="first" step="any" required placeholder="First Number" min="0" max="1000" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <input type="number" name="second" step="any" required placeholder="Second Number"  min="0" max="1000" class="form-control" id="pwd">
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Add</button>
                <!--btn block stretches the button-->
            </form>
            <?php
            if(isset($result))
            {
                echo "<p class='text-center text-danger'>The sum of $first and $second is $result.</p>";
            }
            echo "Today is ".date("D/M/Y").".";
            ?>

        </div>
    </div>
</div>


</body>
</html>