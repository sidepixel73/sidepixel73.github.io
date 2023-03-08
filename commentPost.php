<?php
    $uName = $comment = "";
    $myfile = fopen("users_comments.txt", "a") or die("Something went KABLOOEY!!");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uName = $_POST["uName"];
        $comment = $_POST["comment"];
    }

    fwrite($myfile, $uName);
    fwrite($myfile, $comment);
?>