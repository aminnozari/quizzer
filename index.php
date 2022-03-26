<?php
    include "database.php";
    $porseshha = $db->query("SELECT * FROM question");
    $total = $porseshha->num_rows;
?>
<html lang="fa" dir="rtl">
        <head>
            <link type="text/css" rel="stylesheet" href="css/bootstrap.rtl.css">
            <link type="text/css" rel="stylesheet" href="css/style.css">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>آزمونک</title>
        </head>
        <body>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            ازمونک
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
                <div class="row mt-5">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                به آزمونک خوش اومدی
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    تعداد سوالات این ازمون 
                                    <?php echo $total; ?>
                                    تا می باشد
                                </p>
                                <p class="card-text">
                                    زمان آزمون: 
                                    <?php echo $total / 2; ?>
                                    دقیقه
                                </p>
                                <a href="question.php" class="btn btn-primary">
                                    بزن بریم
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="js\bootstrap.js"></script>
        </body>
</html>
