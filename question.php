<?php
    include "database.php";
    $porseshha = $db->query("SELECT * FROM question");
    $total = $porseshha->num_rows;
    $number= $_GET["x"];
    $porsesh_table = $db->query("SELECT * FROM question WHERE id = $number"); // یک جدولی که یک رکورد داره
    $porsesh = $porsesh_table->fetch_assoc(); // یک رکورد
    $pasokh_ha = $db->query("SELECT * FROM answers WHERE question_id = $number");

?>
<html lang="fa" dir="rtl">
        <head>
            <link type="text/css" rel="stylesheet" href="css/bootstrap.rtl.css">
            <link type="text/css" rel="stylesheet" href="css/style.css">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>آزمونک</title>
        </head>
        <body style="background: #2c3034">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-1">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            آزمونک
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">پنل ادمین</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn bg-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
                <div class="row mt-2">
                    <div class="col">
                        <div class="card bg-success">
                            <div class="card-header">
                                سوال  
                                <?php echo $porsesh["id"]; ?>
                                از
                                <?php echo $total; ?>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                <?php echo $porsesh["text"]; ?> 
                                </p>
                                <form method="post" action="process.php">
                                    <input type="hidden" value="<?php echo $porsesh["id"]; ?> " name="question_id">
                                    <?php foreach($pasokh_ha as $pasokh): ?>
                                    <div class="form-check">
                                        <input class="form-check-input btn-dark" value="<?php echo $pasokh["id"]; ?>" type="radio" name="answer" id="flexRadioDefault1">
                                        <label class="form-check-label bg-success" for="flexRadioDefault1">
                                            <?php echo $pasokh["text"]; ?>
                                        </label>
                                    </div>
                                    <?php endforeach; ?>
                                    <button type="submit" class="btn btn-dark">بعدی</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="js\bootstrap.js"></script>
        </body>
</html>

