<?php
    include "database.php";
    session_start();
    $user_choice_id = $_POST ["answer"];
    $q_id=$_POST["question_id"];
    $correct_choice = $db->query("SELECT * FROM answers WHERE question_id = $q_id AND is_true = 1")->fetch_assoc();
    $correct_choice_id = $correct_choice["id"];

    if($user_choice_id == $correct_choice_id)
    {
        $_SESSION["user_score"]++;
        echo "باریکلا";
    }
    else
    {
        $_SESSION["user_score"]--;
        echo "داری اشتباه میزنی";
    }
    $test_id = $q_id + 1;
    if ($test_id == 5){
        header( "location: final.php");
    }
    else{
        header( "location: question.php?x=$test_id");

    }

 ?>