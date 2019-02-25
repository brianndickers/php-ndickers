<?php
if (isset($_POST["dob"])) {
    extract($_POST);
    /*connect to db*/
    $scholarship = isset($scholarship)?"yes":"No";
    $conn = mysqli_connect("localhost", "root", "", "Shule");
    $sql = "INSERT INTO `students`(`id`, `names`, `email`, `dob`, `school_id`, `course`, `scholership`, `gender`) VALUES 
                                  (null ,'$names','$email','$dob','$school_id','$course','$scholarship','$gender')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $message = "student $names has been registered";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>Add student</h3>
            <p class="text success">
                <?php
                if (isset($message))
                    echo $message;
                ?>
            </p>
            <form action="register.php" method="post">
                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="Names">
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="school_id" placeholder="School id">
                </div>
                <div class="form-group">
                    <input type="email" required class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="date" required class="form-control" name="dob" placeholder="Date of Birth">
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
                    <select name="course" class="form-control">
                        <option value="Medicine">Medicine</option>
                        <option value="engenieering">Engineering</option>
                        <option value="Computer_science">Computer science</option>
                        <option value="Sergion">Sergion</option>
                        <option value="Statistics">Statistics</option>
                    </select>
                </div>

                <div class="form-group form-check">
                    <input class="form-check-input" name="scholarship" value="yes" type="checkbox"> scholarship?

                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>