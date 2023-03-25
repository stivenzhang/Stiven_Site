<?php
session_start();
if(isset($_SESSION['id']))
    header("Location: login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/general.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<?php
include_once  "php/DBConnection.php";
$connection = connection();
$password = "password";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$query = "select * from users where username like 'password' and password like ?";
$statement = $connection->prepare($query);
$statement->bind_param("s", $hashedPassword);
$statement->execute();
$queried = $statement->get_result();
while($row = $queried->fetch_assoc()){
    print_r($row);
}
$connection->close();


?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                    <form method="post" action="php/login.php">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username" maxlength="50" minlength="8">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="mb-3">
                            <a href="registration.php">Registration</a>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>