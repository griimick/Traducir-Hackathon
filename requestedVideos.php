<?php
    include("adminSession.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Traducir | DASHBOARD</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="header-right">

                <a href="adminLogout.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-log-out"></span> Log out</a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="adminDashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="requestedVideos.php"><i class="fa fa-file-video-o "></i>Requested Videos</a>
                    </li>
                    <li>
                        <a href="addVideos.php"><i class="fa fa-plus "></i>Add Videos</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-head-line">Requested Videos</h3>
                    </div>
                </div>
                
                <div id="port-folio">
                    <?php
                        $fetch = mysqli_query($connection, "select VideoID, Frequency from requests");
                        $rowCounter = 0;
                        while ($row = mysqli_fetch_assoc($fetch)) {
                            $id = $row["VideoID"];
                            $freq = $row["Frequency"];
                            if ($rowCounter % 3 == 0)
                                echo "<div class='row'>";
                            echo '<div class="col-md-4 ">
                                    <div class="portfolio-item awesome mix_all" data-cat="awesome" style="opacity: 1">
                                        <iframe width="320" height="260" src="https://www.youtube.com/embed/'.$id.'" frameborder="0" allowfullscreen></iframe>
                                        <div class="overlay">
                                            <a href="removeit" class="btn btn-sm btn-danger" style="margin-left: 5px;">Remove</a>
                                            <a href="addNewVideo.php?url='.$id.'" class="btn btn-sm btn-success" style="float:right; margin-right: 5px;">ADD'.$freq.'</a>
                                        </div>
                                    </div>
                                </div>';
                            if ($rowCounter % 3 == 0)
                                echo "</div>";
                            $rowCounter++;
                        }
                    ?>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
