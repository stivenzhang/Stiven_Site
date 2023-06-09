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
    <div class="p-3 overflow-auto sidebar border-bottom">
        <p class="d-flex align-items-center pb-3 mb-0 link-dark text-decoration-none border-bottom text-white">
            <span class="fs-5 fw-semibold">What i've done (Stiven_Zhang)</span>
        </p>
        <ul class="list-unstyled ps-0">
            <li class="pb-2 pt-2 border-bottom">
                <button id="technologies" class="text-white btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#technologies-collapse" aria-expanded="false">
                    Technologies
                </button>
                <div class="collapse" id="technologies-collapse">
                    <ul class="text-white fw-normal pb-1 small">
                        <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#lamp-collapse" aria-expanded="false">
                            Lamp
                        </li>
                        <li class="list-unstyled collapse" id="lamp-collapse">
                            <ul class="fw-normal pb-1">
                                <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#linux(Ubuntu)" aria-expanded="false">
                                    Linux(Ubuntu)
                                </li>
                                <li class="list-unstyled collapse" id="linux(Ubuntu)">
                                    <ul>
                                        <li class="Used-for rounded collapsed">Used for</li>
                                        <li class="Commands rounded collapsed">Used commands</li>
                                    </ul>
                                </li>
                                <li id="apache" class="rounded collapsed">Apache</li>
                                <li id="mysql" class="rounded collapsed">Mysql</li>
                                <li id="php" class="rounded collapsed">Php</li>
                            </ul>
                        </li>
                        <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#web-client" aria-expanded="false">
                            Web client
                        </li>
                        <li class="list-unstyled collapse" id="web-client">
                            <ul class="fw-normal pb-1 small">
                                <li id="html" class="rounded collapsed">Html</li>
                                <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#css" aria-expanded="false">
                                    Css
                                </li>
                                <li class="list-unstyled collapse" id="css">
                                    <ul class="fw-normal pb-1">
                                       <li id="bootstrap" class="rounded collapsed">Bootstrap</li>
                                    </ul>
                                </li>
                                <li id="javascript" class="rounded collapsed">Javascript</li>
                            </ul>
                        </li>
                        <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#docker" aria-expanded="false">
                            Docker
                        </li>
                        <li class="list-unstyled collapse" id="docker">
                            <ul class="fw-normal pb-1">
                                <li class="Used-for rounded collapsed">Used for</li>
                                <li class="Commands rounded collapsed">Used commands</li>
                            </ul>
                        </li>
                        <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#git" aria-expanded="false">
                            Git
                        </li>
                        <li class="list-unstyled collapse" id="git">
                            <ul class="fw-normal pb-1">
                                <li class="Used-for rounded collapsed">Used for</li>
                                <li class="Commands rounded collapsed">Used commands</li>
                            </ul>
                        </li>
                        <li class="rounded collapsed" data-bs-toggle="collapse" data-bs-target="#MkCert" aria-expanded="false">
                            MkCert
                        </li>
                        <li class="list-unstyled collapse" id="MkCert">
                            <ul class="fw-normal pb-1">
                                <li class="Used-for rounded collapsed">Used for</li>
                                <li class="Commands rounded collapsed">Used commands</li>
                            </ul>
                        </li>
                        <li class="rounded collapsed" id="vim">
                            Vim
                        </li>
                        <li id="aws" class="rounded collapsed">Aws</li>
                    </ul>
                </div>
            </li>
            <li class="pb-2 pt-2 border-bottom">
                <button id="tutorial" class="text-white btn btn-toggle align-items-center rounded collapsed">Tutorial</button>
            </li>
        </ul>
    </div>
    <div class="account d-flex flex-row p-3 overflow-auto">
        <div class="align-self-center col-6 text-truncate  overflow-auto" id="user">
        </div>
        <button class="btn btn-primary col-6  overflow-auto" id="sign_out">Sign out</button>
    </div>
</aside>
<main class="w-75 vh-100 main p-5 overflow-auto">
    <div class="h1 border-bottom" id="title-information">
        Introduction
    </div>
    <div id="information-body">
        To use this site you need to hover and click the side bar Technologies or Tutorial
    </div>
</main>
<script src="javascript/sign_out.js"></script>
<script src="javascript/informations.js"></script>
<script src="javascript/information_changes.js"></script>
<script src="javascript/image_width.js"></script>
</body>
</html>