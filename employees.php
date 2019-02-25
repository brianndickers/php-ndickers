<?php
if (isset($_POST["dob"])) {
    extract($_POST);

    $conn = mysqli_connect("localhost", "root", "", "ndickers");
  $sql="INSERT INTO `employees`(`id`, `names`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`) VALUES
                            (null,`$names`,`$email`,`$address`,`$dob`,`$department`,`$gender`,`$kra_pin`,`$salary`)";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employees</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
<form action="employees.php" method="post">
    <div class="form-group">
        <input type="text" required class="form-control" name="id" placeholder="Identity">
    </div>
    <div class="form-group">
        <input type="text" required class="form-control" name="names" placeholder="Names">
    </div>
    <div class="form-group">
        <input type="email" required class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="text" required class="form-control" name="address" placeholder="Address">
    </div>
    <div class="form-group">
        <input type="date" required class="form-control" name="dob" placeholder="Date of Birth">
    </div>
    <div class="form-group">
        <input type="text" required class="form-control" name="department" placeholder="Department">
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" checked value="Female" name="gender"> Male
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" value="Male" name="gender"> Female
        </label>
    </div>
    <div class="form-group">
        <input type="number" required class="form-control" name="kra_pin" placeholder="Kra pin">
    </div>
    <div class="form-group">
        <input type="number" required class="form-control" name="salary" placeholder="Salary">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
    </div>
</div>
</body>
</html>