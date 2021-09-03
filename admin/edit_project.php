<?php
ob_start();
include('includes/db.php');
session_start();

if (empty($_COOKIE['remember_me'])) {

    if (empty($_SESSION['admin_id'])) {

        header('location:login.php');
    }
}
if (!isset($_GET["id"])) {
    header('location:index.php');
} else {
    $project_id = $_GET["id"];
}



$response = null;


$folder = "../img/project_images/";


if (isset($_POST['submit'])) {


    $title = $_POST["title"];
    $description = $_POST["description"];



    try {

        if ($_FILES['image_one']['size'] != 0) {

            unlink("$folder/" . $_POST["old_image_one"]);


            $image_one =  time() . $_FILES['image_one']['name'];
            $path = $folder . $image_one;
            move_uploaded_file($_FILES['image_one']['tmp_name'], $path);



            $stmt = $conn->prepare("UPDATE `projects` SET image_one=:image_one WHERE id=:id");

            $stmt->bindParam(':image_one', $image_one);
            $stmt->bindParam(':id', $project_id);

            $stmt->execute();
        }

        if ($_FILES['image_sec']['size'] != 0) {

            unlink("$folder/" . $_POST["old_image_sec"]);


            $image_sec =  time() . $_FILES['image_sec']['name'];
            $path = $folder . $image_sec;
            move_uploaded_file($_FILES['image_sec']['tmp_name'], $path);

            $stmt = $conn->prepare("UPDATE `projects` SET image_sec=:image_sec WHERE id=:id");

            $stmt->bindParam(':image_sec', $image_sec);
            $stmt->bindParam(':id', $project_id);

            $stmt->execute();
        }

        $stmt = $conn->prepare("UPDATE `projects` SET title=:title, description=:description WHERE id=:id");

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id', $project_id);

        $stmt->execute();

        $response = "success";
    } catch (PDOException $e) {
        //throw $th;

        $response = $e->getMessage();
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("includes/head.php"); ?>

    <title>Edit project</title>
</head>

<body class="page-body">

    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <!-- leftbar starts -->

        <?php include_once("includes/left-bar.php"); ?>

        <!-- leftbar ends -->

        <div class="main-content">

            <div class="row">

                <!-- header starts-->
                <?php include_once("includes/header.php"); ?>
                <!-- header ends -->

            </div>

            <hr />

            <ol class="breadcrumb bc-3">
                <li>
                    <a href="index.php"><i class="fa-home"></i>Home</a>
                </li>
                <li>

                    <a href="#">projects</a>
                </li>
                <li class="active">

                    <strong>Edit Project</strong>
                </li>
            </ol>

            <h2>Edit Project</h2>
            <br />


            <div class="row">
                <div class="col-md-12">

                    <div id="notification-div">

                        <?php if (isset($response)) {

                            if ($response == "success") {

                        ?>

                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <strong>Congrats! Successfully Updated</strong> <br><br>

                                    <a href="projects.php">Back To All projects</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                            <?php

                            } else {
                            ?>

                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <strong>OOPs! <?php echo $response; ?></strong> <br><br>

                                    <a href="projects.php">Back To All projects</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                        <?php
                            }
                        } ?>

                    </div>

                    <div class="panel panel-primary" data-collapsed="0">

                        <div class="panel-heading">
                            <div class="panel-title">
                                Edit Project Info
                            </div>

                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>

                            </div>
                        </div>

                        <div class="panel-body">


                            <?php

                            $query = $conn->prepare(

                                "SELECT *
                                    FROM projects 
                                    Where id='$project_id'"

                            );

                            $query->execute();

                            $result = $query->fetch(PDO::FETCH_ASSOC);

                            ?>



                            <form id="form" method="post" enctype="multipart/form-data" class="form-horizontal form-groups-bordered">

                                <div class="form-group">
                                    <input type="hidden" name="old_image_one" value="<?php echo $result["image_one"] ?>">
                                    <input type="hidden" name="old_image_sec" value="<?php echo $result["image_sec"] ?>">

                                    <label for="field-0" class="col-sm-3 control-label">Image One</label>

                                    <div class="col-sm-5">
                                        <input type="file" name="image_one" class="form-control">


                                        <img src="<?php echo "$folder" . $result["image_one"] ?>" alt="" width="300px" height="300px">

                                    </div>
                                </div>


                                <div class="form-group">

                                    <label for="field-0" class="col-sm-3 control-label">Image Second</label>

                                    <div class="col-sm-5">
                                        <input type="file" name="image_sec" class="form-control">


                                        <img src="<?php echo "$folder" . $result["image_sec"] ?>" alt="" width="300px" height="300px">

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Title</label>

                                    <div class="col-sm-5">
                                        <input required type="text" value="<?php echo $result["title"] ?>" class="form-control" id="field-1" name="title" placeholder="Title">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-2" class="col-sm-3 control-label">Description</label>

                                    <div class="col-sm-5">
                                        <textarea class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="description" id="sample_wysiwyg"><?php echo html_entity_decode($result["description"]) ?></textarea>

                                    </div>
                                </div>




                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-5">
                                        <button type="submit" name="submit" class="btn btn-default">Update project</button>
                                    </div>
                                </div>
                            </form>




                        </div>

                    </div>

                </div>
            </div>





            <!-- Footer starts -->
            <?php include_once("includes/footer.php"); ?>
            <!-- Footer end -->

        </div>




    </div>

    <link rel="stylesheet" href="assets/js/datatables/datatables.css">
    <link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
    <link rel="stylesheet" href="assets/js/select2/select2.css">
    <link rel="stylesheet" href="assets/js/wysihtml5/bootstrap-wysihtml5.css">
    <link rel="stylesheet" href="assets/js/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="assets/js/uikit/css/uikit.min.css">
    <link rel="stylesheet" href="assets/js/uikit/addons/css/markdownarea.css">


    <!-- Imported scripts on this page -->
    <script src="assets/js/datatables/datatables.js"></script>
    <script src="assets/js/select2/select2.min.js"></script>


    <!-- Bottom scripts (common) -->
    <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>

    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/joinable.js"></script>
    <script src="assets/js/resizeable.js"></script>
    <script src="assets/js/neon-api.js"></script>
    <script src="assets/js/gsap/TweenMax.min.js"></script>
    <script src="assets/js/wysihtml5/wysihtml5-0.4.0pre.min.js"></script>

    <script src="assets/js/uikit/js/uikit.min.js"></script>
    <script src="assets/js/codemirror/lib/codemirror.js"></script>
    <script src="assets/js/marked.js"></script>
    <script src="assets/js/uikit/addons/js/markdownarea.min.js"></script>
    <script src="assets/js/codemirror/mode/markdown/markdown.js"></script>
    <script src="assets/js/codemirror/addon/mode/overlay.js"></script>
    <script src="assets/js/codemirror/mode/xml/xml.js"></script>
    <script src="assets/js/codemirror/mode/gfm/gfm.js"></script>
    <script src="assets/js/icheck/icheck.min.js"></script>




    <!-- Imported scripts on this page -->
    <script src="assets/js/wysihtml5/bootstrap-wysihtml5.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="assets/js/neon-custom.js"></script>


    <!-- Demo Settings -->
    <script src="assets/js/neon-demo.js"></script>
</body>

</html>