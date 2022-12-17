<?php

require('student-account.php');
?>
<?php $message = $update_bio = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Student | Dashboard</title>

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

    <?php include 'header.php'; ?>

    <!--======================================
        START HERO AREA
======================================-->
    <section class="hero-area bg-white shadow-sm overflow-hidden pt-60px">
        <span class="stroke-shape stroke-shape-1"></span>
        <span class="stroke-shape stroke-shape-2"></span>
        <span class="stroke-shape stroke-shape-3"></span>
        <span class="stroke-shape stroke-shape-4"></span>
        <span class="stroke-shape stroke-shape-5"></span>
        <span class="stroke-shape stroke-shape-6"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 bg-transparent">
                            <div class="media-img media--img">
                                <img src="https://ui-avatars.com/api/?name=<?php echo $fullname; ?>" alt="avatar">
                            </div>
                            <?php include 'hero-stats.php'; ?>
                        </div><!-- end media -->
                    </div><!-- end hero-content -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="hero-btn-box text-right py-3">
                        <a href="setting.php" class="btn theme-btn theme-btn-outline theme-btn-outline-gray"><i class="la la-gear mr-1"></i> Edit Profile</a>
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-12">
                    <?php include 'menu.php'; ?>
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <section class="user-details-area pt-30px pb-60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab">
                            <div class="user-panel-main-bar">
                                <div class="user-panel mb-30px">
                                    <p class="pb-2"><?php echo $userbio; ?></p>
                                    
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-30px pt-30px border-top border-top-gray">
                                    <ul class="generic-list-item generic-list-item-bullet">
                                        <li class="pl-3"><a href="#" class="d-inline-block">ardensmith.com</a></li>
                                        <li class="pl-3"><a href="#" class="d-inline-block">Facebook</a></li>
                                        <li class="pl-3"><a href="#" class="d-inline-block">Twitter</a></li>
                                        <li class="pl-3"><a href="#" class="d-inline-block">Instagram</a></li>
                                    </ul>
                                </div><!-- end user-panel -->
                                <form method="post" class="card-body" action="">
                                    <?php
                                    if (isset($_POST['submitquiz'])) {
                                        require 'functions/edit-profile.php';
                                    }
                                    ?>
                                    <?php echo $message; ?> 
                                    <div class="input-box">
                                        <label class="fs-14 text-black fw-medium mb-0">Update Bio</label>
                                        <div class="form-group">
                                            <textarea class="form-control form--control user-text-editor" rows="10" cols="40" name="update_bio"><?php echo $update_bio; ?></textarea>
                                            <div class="d-flex align-items-center pt-2">
                                            </div>
                                        </div>
                                    </div><!-- end input-box -->

                                    <div class="input-box pt-2">

                                        <div class="btn-box">
                                            <button type="submit" class="btn theme-btn" name="submitquiz">Update Bio</button>
                                        </div>
                                    </div>
                                </form>
                               
                               
                            </div><!-- end user-panel-main-bar -->
                        </div><!-- end tab-pane -->
                        
                    </div>
                </div><!-- end col-lg-9 -->
                 
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end user-details-area -->
    <!--======================================
        END HERO AREA
======================================-->


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