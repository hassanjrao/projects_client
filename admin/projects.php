<?php
ob_start();
include('includes/db.php');
session_start();

if (empty($_COOKIE['remember_me'])) {

    if (empty($_SESSION['admin_id'])) {

        header('location: login.php');
    }
}

$folder = "../img/project_images/";

if (isset($_POST['submit'])) {

    

    $title = $_POST["title"];
    $description = $_POST["description"];


    try {
        //code...


        $image_one =  time() . $_FILES['image_one']['name'];
        $path = $folder . $image_one;
        move_uploaded_file($_FILES['image_one']['tmp_name'], $path);


        $image_sec =  time() . $_FILES['image_sec']['name'];
        $path = $folder . $image_sec;
        move_uploaded_file($_FILES['image_sec']['tmp_name'], $path);



        $stmt = $conn->prepare("INSERT INTO `projects`(`image_one`,`image_sec`,`title`,`description`) VALUES (:image_one,:image_sec,:title,:description)");


        $stmt->bindParam(':image_one', $image_one);
        $stmt->bindParam(':image_sec', $image_sec);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);

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



    <title>Projects</title>
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
                <li class="active">

                    <a href="projects.php"> <strong>Projects</strong></a>
                </li>

            </ol>



            <?php

            if (isset($_GET["status"])) {


                if ($_GET["status"] == "del_succ") {

            ?>
                    <br>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <strong>Congrats!</strong> Successfully Deleted
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                } else {

                ?>
                    <br>
                    <div class="alert alert-success alert-danger" role="alert">
                        <strong>Congrats!</strong> Something Went Wrong, <?php echo $_GET["request"]; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                }
            }

            ?>

            <h2>Projects</h2>
            <br>
            <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="btn btn-primary">Add Project</a>

            <br>
            <br>

            <?php


            $query = $conn->prepare(
                "SELECT * from projects order by id desc"
            );
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);





            ?>


            <!-- Modal 6 (Long Modal)-->
            <div class="modal fade" id="modal-6" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Add New project</h4>
                        </div>

                        <form method="POST" enctype="multipart/form-data">
                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">


                                            <div class="input-field">
                                                <label class="active">Add First Image</label>
                                                <input required type="file" name="image_one" class="form-control">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">


                                            <div class="input-field">
                                                <label class="active">Add Second Image</label>
                                                <input required type="file" name="image_sec" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Title</label>

                                            <input type="text" required placeholder="Title" class="form-control" name="title">
                                        </div>

                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="form-group">
                                            <label for="field-1" class="control-label">Description</label>

                                            <textarea class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="description" id="sample_wysiwyg"></textarea>
                                        </div>

                                    </div>


                                </div>


                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-info">Add Project</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            <div id="notification-div">

                <?php if (isset($response)) {

                    if ($response == "success") {
                ?>

                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>Congrats! Successfully Added</strong>


                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php

                    } else {
                    ?>

                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>OOPs! <?php echo $response . "Please try again!"; ?></strong>


                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                <?php
                    }
                } ?>

            </div>


            <!-- <h3>Table without DataTable Header</h3> -->


            <table class="table table-bordered datatable  dt-responsive nowrap" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image One</th>
                        <th>Image Second</th>
                        <th>Title</th>
                        <th>Description</th>

                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php


                    $i = 1;

                    $query = $conn->prepare(
                        "SELECT * from projects order by id desc"
                    );
                    $query->execute();


                    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {

                       

                    ?>

                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><img src="<?php echo "$folder/".$result["image_one"] ?>" alt="" width="150px" height="150px"></td>
                            <td><img src="<?php echo "$folder/".$result["image_sec"] ?>" alt="" width="150px" height="150px"></td>
                            <td><?php echo $result["title"]; ?></td>
                            <td><?php echo strlen(strip_tags($result["description"])) >100 ? substr(strip_tags($result["description"]), 0, 50)." ...." : strip_tags($result["description"]); ?></td>


                            <td>
                                <a href="edit_project.php?id=<?php echo $result["id"] ?>" class="btn btn-default btn-sm btn-icon icon-left">
                                    <i class="entypo-pencil"></i>
                                    Edit
                                </a>

                                <a href="delete_project.php?id=<?php echo $result["id"]
                                                                ?>" class="btn btn-danger btn-sm btn-icon icon-left">
                                    <i class="entypo-cancel"></i>
                                    Delete
                                </a>

                            </td>
                        </tr>

                    <?php
                    } ?>







                </tbody>
            </table>








            <br />





            <!-- Footer starts -->
            <?php include_once("includes/footer.php"); ?>
            <!-- Footer end -->
        </div>




    </div>





    <!-- Imported styles on this page -->


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





    <script>
        jQuery(document).ready(function($) {
            var $table1 = jQuery('#table-1');

            // Initialize DataTable
            $table1.DataTable({
                "aLengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "bStateSave": true
            });

            // Initalize Select Dropdown after DataTables is created
            $table1.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        });
    </script>





</body>

</html>