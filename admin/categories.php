<?php

require('admin-account.php');
$message = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin | Add New Category </title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="../images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/line-awesome.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/selectize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/toastr-btn.css">
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/toastr.min.js"></script>
    <script src="../assets/js/toastr-options.js"></script>
    <!-- end inject -->
</head>

<body>

    <!-- start cssload-loader -->
    <!-- <div id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div> -->
    <!-- end cssload-loader -->

    <!--======================================
        START HEADER AREA
    ======================================-->
    <?php include 'header.php'; ?>

    <!--======================================
        END HERO AREA
======================================-->

    <!-- ================================
         START QUESTION AREA
================================= -->
    <section class="question-area pt-80px pb-40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="sidebar pb-45px position-sticky top-0 mt-2">
                        <?php include 'menu.php'; ?>
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-2 -->
                <div class="col-lg-10">
                    <div class="question-tabs mb-50px">
                        <ul class="nav nav-tabs generic-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <div class="anim-bar"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Manage Categories</a>
                            </li>

                        </ul>
                        <div class="tab-content pt-40px" id="myTabContent">
                            <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                                <div class="filters d-flex align-items-center justify-content-between pb-4">


                                </div><!-- end filters -->
                                <div class="question-main-bar">
                                    <div class="questions-snippet">

                                        <section class="question-area pt-40px pb-40px">
                                            <div class="container">
                                                <div class="filters pb-3">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between pb-3">
                                                        <h3 class="fs-22 fw-medium">Manage Categories</h3>
                                                        <a href="manage-categories.php" class="btn theme-btn theme-btn-sm">All Categories</a>
                                                    </div>

                                                </div><!-- end filters -->
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card card-item">
                                                            <form method="POST" class="card-body" action="#">
                                                                <?php
                                                                if (isset($_POST['add-category'])) {
                                                                    require 'functions/add-category.php';
                                                                }
                                                                ?>
                                                                <?php echo $message; ?>
                                                                <div class="input-box">
                                                                    <label class="fs-14 text-black fw-medium mb-0">Categories</label>
                                                                    <p class="fs-13 pb-3 lh-20">Upload categories</p>
                                                                    <div class="form-group">
                                                                        <input class="form-control form--control" type="text" name="category_name" placeholder="e.g. programming, Marketing, Financing?">
                                                                    </div>
                                                                </div><!-- end input-box -->
                                                                <div class="input-box">
                                                                    <label class="fs-14 text-black fw-medium mb-0">Category Description</label>

                                                                    <div class="form-group">
                                                                        <input class="form-control form--control" type="text" name="category_description" placeholder="e.g. All programming related questions?">
                                                                    </div>
                                                                </div><!-- end input-box -->
                                                                <div class="input-box pt-2">
                                                                    <div class="btn-box">
                                                                        <button type="submit" class="btn theme-btn" name="add-category">Add New Category</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-8 -->

                                                </div><!-- end row -->

                                            </div><!-- end container -->
                                        </section>
                                    </div><!-- end questions-snippet -->

                                </div><!-- end question-main-bar -->
                            </div><!-- end tab-pane -->

                        </div><!-- end tab-content -->
                    </div><!-- end question-tabs -->
                </div><!-- end col-lg-7 -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end question-area -->
    <!-- ================================
         END QUESTION AREA
================================= -->


    <?php include 'footer.php'; ?>
    <!-- ================================
          END FOOTER AREA
================================= -->

    <!-- start back to top -->
    <div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end back to top -->

    <!-- Modal -->


    <!-- template js files -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/selectize.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>