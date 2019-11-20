<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ATOM</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="login.html">ATOM</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="datamading.php"><i class="fa fa-fw fa-file"></i>Kelas 1</a>
                    </li>
                    <li>
                        <a href="formjadwal.php"><i class="fa fa-desktop"></i>Kelas 2</a>
                    </li>
                    <li>
                        <a href="datajadwal.php"><i class="fa fa-fw fa-file"></i>Kelas 3</a>
                    </li>
                    <li>
                        <a href="formposter.php"><i class="fa fa-desktop"></i>Kelas 4</a>
                    </li>
                    <li>
                        <a href="formposter.php"><i class="fa fa-desktop"></i>Kelas 5</a>
                    </li>
                    <li>
                        <a href="formposter.php"><i class="fa fa-desktop"></i>Kelas 6</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            FORM Upload Buku Kelas 1
                        </h1>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Menambahkan Buku Kelas 1
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <form method="POST" action="prosesbukukelas1.php" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Judul Buku</label>
                                                        <input type="text" name="judulbuku" class="form-control" placeholder="Masukan Judul Buku">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Cover Buku</label>
                                                        <input type="file" name="buku" class="form-control" placeholder="Masukan Asal Poster">
                                                    </div>
                                                    <button type="submit" name="upload" value="Upload" class="btn btn-default">Submit </button>
                                                    <button type="reset" class="btn btn-default">Reset </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /. PAGE INNER  -->
                            </div>
                            <!-- /. PAGE WRAPPER  -->
                        </div>

                        <!-- /. WRAPPER  -->
                        <!-- JS Scripts-->
                        <!-- jQuery Js -->
                        <script src="assets/js/jquery-1.10.2.js"></script>
                        <!-- Bootstrap Js -->
                        <script src="assets/js/bootstrap.min.js"></script>
                        <!-- Metis Menu Js -->
                        <script src="assets/js/jquery.metisMenu.js"></script>
                        <!-- Custom Js -->
                        <script src="assets/js/custom-scripts.js"></script>

</body>

</html>