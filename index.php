<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>How to do</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/general.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="javascript/http.js"></script>
    <script src="javascript/logged.js"></script>

</head>
<body class="d-flex flex-row overflow-hidden">
<aside class="vh-100 w-25 bg-white border-end">
   
    <div class="account d-flex flex-row p-3 overflow-auto h-100">
        <div class="align-self-center col-6 text-truncate  overflow-auto" id="user">
        </div>
        <button class="btn btn-primary col-6  overflow-auto" id="sign_out">Sign out</button>
    </div>
</aside>
<main class="w-75 vh-100 main p-5 overflow-auto" id="information">


</main>

<script src="javascript/sign_out.js"></script>
<script src="javascript/informations.js"></script>
<script src="javascript/information_changes.js"></script>
</body>
</html>