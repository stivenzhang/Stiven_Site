<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/general.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="javascript/logged.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <form>
                    <div class="card-body p-4">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" placeholder="Username" maxlength="50" minlength="8">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>

                        <div class="mb-3">
                            <a href="registration.php">Registration</a>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" id="login">Sign in</button>
                        </div>
                        <div class="d-grid mb-0 mt-3">
                            <p class="mb-0 text-uppercase fw-bold border-black border border-2 bg-danger invisible text-center" id="error"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="javascript/http.js"></script>
<script src="javascript/error_codes.js"></script>
<script src="javascript/login_registration.js"></script>
<script src="javascript/login.js"></script>
</body>
</html>