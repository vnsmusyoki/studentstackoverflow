<?php

require('admin-account.php');
?>
<?php $message = $emailmessage = $update_bio = $password = $confirm_password = $oldemail = $newemail = $confirmnewemail = '';

if (isset($_GET['updatepassword'])) {
    $newpassword = $_GET['updatepassword'];
    $msg = "
    <script>
    toastr.success('password edited successfully.');
    </script>
    ";
}
if (isset($_GET['updateemail'])) {
    $newemail = $_GET['updateemail'];
    $msg = "
    <script>
    toastr.success('Email address edited successfully.');
    </script>
    ";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin Stack Overflow </title>

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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">


    <!-- end inject -->
</head>

<body>

    <!-- start cssload-loader -->
    <div id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
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
                                <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Admin Secure Account</a>
                            </li>

                        </ul>
                        <div class="tab-content pt-40px" id="myTabContent">
                            <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                                <div class="filters d-flex align-items-center justify-content-between pb-4">


                                </div><!-- end filters -->
                                <div class="question-main-bar">
                                    <div class="questions-snippet">
                                    <div class="user-panel mb-30px">
                                     

                                </div><!-- end user-panel -->

                                <?php
                                if (isset($_GET['updatepassword'])) {
                                    echo $msg;
                                    echo "<script>
                                    window.location.replace('setting.php');
                                    </script>";
                                }
                                if (isset($_GET['updateemail'])) {
                                    echo $msg;
                                    echo "<script>
                                    window.location.replace('setting.php'), 10000;
                                    </script>";
                                }
                                
                                ?>
                              
                                <hr>
                                <form method="post" class="card-body" action="">
                                    <?php
                                    if (isset($_POST['updatepassword'])) {
                                        require 'functions/edit-password.php';
                                    }
                                    ?>
                                    <?php echo $message; ?>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-xs-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="fs-14 text-black fw-medium lh-18">Password</label>
                                                <div class="input-group mb-1">
                                                    <input class="form-control form--control password-field" type="password" name="password" placeholder="Password">
                                                    <div class="input-group-append">
                                                        <button class="btn theme-btn-outline theme-btn-outline-gray toggle-password" type="button">
                                                            <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897">
                                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                                <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z" />
                                                            </svg>
                                                            <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897">
                                                                <path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                                                <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div><!-- end form-group -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="fs-14 text-black fw-medium lh-18">Confirm Password</label>
                                                <div class="input-group mb-1">
                                                    <input class="form-control form--control password-field" type="password" name="confirm_password" placeholder="Confirm Password">
                                                    <div class="input-group-append">
                                                        <button class="btn theme-btn-outline theme-btn-outline-gray toggle-password" type="button">
                                                            <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897">
                                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                                <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z" />
                                                            </svg>
                                                            <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897">
                                                                <path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
                                                                <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div><!-- end form-group -->

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-12 col-xs-12">
                                            <div class="input-box pt-4">

                                                <div class="btn-box">
                                                    <button type="submit" class="btn theme-btn mt-1" name="updatepassword">Update Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </form>
                                <hr>
                                <form method="post" class="card-body" action="">
                                    <?php
                                    if (isset($_POST['updateemail'])) {
                                        require 'functions/edit-email.php';
                                    }
                                    
                                    
                                    ?>
                                    <?php echo $emailmessage; ?>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-xs-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="fs-14 text-black fw-medium lh-18">Old Email Address</label>
                                                <div class="input-group mb-1">
                                                    <input class="form-control form--control" type="text" name="old_email" placeholder="oldemail@gmail.com" value="<?php echo $oldemail; ?>">
                                                </div>
                                            </div><!-- end form-group -->
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="fs-14 text-black fw-medium lh-18">New Email Address</label>
                                                <div class="input-group mb-1">
                                                    <input class="form-control form--control" type="text" name="new_email" placeholder="newwmail@gmail.com" value="<?php echo $newemail; ?>">
                                                </div>
                                            </div><!-- end form-group -->
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="fs-14 text-black fw-medium lh-18">Confirm New Email Address</label>
                                                <div class="input-group mb-1">
                                                    <input class="form-control form--control" type="text" name="confirm_new_email" placeholder="newwmail@gmail.com" value="<?php echo $confirmnewemail; ?>">
                                                </div>
                                            </div><!-- end form-group -->
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-12 col-xs-12">
                                            <div class="input-box pt-4">
                                                <div class="btn-box">
                                                    <button type="submit" class="btn theme-btn mt-1" name="updateemail">Update Email</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
            });
        });
    </script>



</body>

</html>