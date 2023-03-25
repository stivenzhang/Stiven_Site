<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>How to do</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/general.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="javascript/logged.js"></script>
</head>
<body class="d-flex flex-row overflow-hidden">
<aside class="vh-100 w-25 bg-white border-end">
    <div class="p-3 overflow-auto sidebar border-bottom">
        <p class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom text-white">
            <span class="fs-5 fw-semibold">What i've done (Stiven_Zhang)</span>
        </p>
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="text-white btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#technologies-collapse" aria-expanded="false">
                    Technologies
                </button>
                <div class="collapse" id="technologies-collapse">
                    <ul class="text-white fw-normal pb-1 small">
                        <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#lamp-collapse" aria-expanded="false">
                            Lamp
                        </li>
                        <div class="collapse" id="lamp-collapse">
                            <ul class="fw-normal pb-1">
                                <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#linux" aria-expanded="false">
                                    Linux(Ubuntu)
                                </li>
                                <div class="collapse" id="linux">
                                    <ul>
                                        <li>Used for</li>
                                        <li>Commands</li>
                                    </ul>
                                </div>
                                <li>Apache</li>
                                <li>Mysql</li>
                                <li>Php</li>
                            </ul>
                        </div>
                        <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#web-client" aria-expanded="false">
                            Web client
                        </li>
                        <div class="collapse" id="web-client">
                            <ul class="fw-normal pb-1 small">
                                <li>Html</li>
                                <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#css" aria-expanded="false">
                                    Css
                                </li>
                                <div class="collapse" id="css">
                                    <ul class="fw-normal pb-1 small">
                                       <li>Bootstrap</li>
                                    </ul>
                                </div>
                                <li>Javascript</li>
                            </ul>
                        </div>
                        <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#docker-collapse" aria-expanded="false">
                            Docker
                        </li>
                        <div class="collapse" id="docker-collapse">
                            <ul class="fw-normal pb-1">
                                <li>Used for</li>
                                <li>Commands</li>
                            </ul>
                        </div>
                        <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#git-collapse" aria-expanded="false">
                            Git
                        </li>
                        <div class="collapse" id="git-collapse">
                            <ul class="fw-normal pb-1">
                                <li>Used for</li>
                                <li>Commands</li>
                            </ul>
                        </div>
                        <li>Aws</li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="account d-flex flex-row p-3">
        <div class="align-self-center col-6 text-truncate" id="user">
            Stiven by default
        </div>
        <button class="btn btn-primary col-6" id="sign_out">Sign out</button>
    </div>
</aside>
<main class="w-75 vh-100 main p-5">
</main>
</body>
</html>