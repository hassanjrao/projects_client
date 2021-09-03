<?php

ob_start();
include('includes/db.php');
session_start();

if (empty($_COOKIE['remember_me'])) {

    if (empty($_SESSION['admin_id'])) {

        header('location:login.php');
    }
}

if (isset($_GET["id"])) {

    $project_id = $_GET['id'];
} else {
    header('location:index.php');
}




$folder = "../img/project_images/";

$query = $conn->prepare(
    "SELECT * from projects where id='$project_id'"
);
$query->execute();

$result = $query->fetch(PDO::FETCH_ASSOC);
unlink("$folder" . $result["image_one"]);
unlink("$folder" . $result["image_sec"]);




$del = $conn->prepare("DELETE FROM projects WHERE id='$project_id'");
$del->execute();




if ($del->execute()) {
    header("location:projects.php?status=del_succ");
} else {
    header("location:projects.php?status=del_fai;");
}
