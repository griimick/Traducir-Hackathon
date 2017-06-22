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
                        <h3 class="page-head-line">Reported Dubs</h3>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                         <!--    Hover Rows  -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Audio ID</th>
                                                <th>Reports</th>
                                                <th>Watch</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $fetch = mysqli_query($connection, "select AudioID, Reports from Audios where Verified IS NULL");
                                                while ($row = mysqli_fetch_array($fetch)) {
                                                  $id = $row["AudioID"];
                                                  $reports = $row["Reports"];
                                                  echo "<tr>";
                                                  echo "<td>" . $name . "</td>";
                                                  echo "<td>" . $reports . "</td>";
                                                  echo "<td><a href='watchReportedVideos.php?audioid={$id}'>Watch</a></td>";
                                                  echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                        <!-- End  Hover Rows  -->
                    </div>
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
