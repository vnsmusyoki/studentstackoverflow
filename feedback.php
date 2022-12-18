<?php
$message = $description = $title = $email = '';

if (isset($_GET['success'])) {
    $check = $_GET['success'];
    if ($check) {
       echo  $msg = "
    <script>
    toastr.success('Feddback submited successfully. Login for more details.');
    </script>
    ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Student Stack Overflow -Send Feedback</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/selectize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/toastr-btn.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/toastr-options.js"></script>
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
    <section class="hero-area pt-80px pb-80px hero-bg-1">
        <div class="overlay"></div>
        <span class="stroke-shape stroke-shape-1"></span>
        <span class="stroke-shape stroke-shape-2"></span>
        <span class="stroke-shape stroke-shape-3"></span>
        <span class="stroke-shape stroke-shape-4"></span>
        <span class="stroke-shape stroke-shape-5"></span>
        <span class="stroke-shape stroke-shape-6"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="hero-content">
                        <h2 class="section-title pb-3 text-white">Any Question or Feedback to Give? </h2>
                        <p class="section-desc text-white">Provide the details below and we will get back to you in less than 24 hours.
                        </p>
                        <div class="hero-btn-box py-4">
                            <a href="sign-in.php" class="btn theme-btn theme-btn-white">Ask a Question <i class="la la-arrow-right icon ml-1"></i></a>
                        </div>
                    </div><!-- end hero-content -->
                </div><!-- end col-lg-9 -->
                <div class="col-lg-3">
                    <div class="hero-list hero-list-bg">
                        <div class="d-flex align-items-center pb-30px">
                            <img src="images/anonymousHeroQuestions.svg" alt="question icon" class="mr-3">
                            <p class="fs-15 text-white lh-20">Anybody can ask a question</p>
                        </div>
                        <div class="d-flex align-items-center pb-30px">
                            <img src="images/anonymousHeroAnswers.svg" alt="question answer icon" class="mr-3">
                            <p class="fs-15 text-white lh-20">Anybody can answer</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <img src="images/anonymousHeroUpvote.svg" alt="vote icon" class="mr-3">
                            <p class="fs-15 text-white lh-20">The best answers are voted up and rise to the top</p>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
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
                        <ul class="generic-list-item generic-list-item-highlight fs-15">
                            <li class="lh-26 active"><a href="index.php"><i class="la la-home mr-1 text-black"></i> Home</a></li>
                            <?php
                            require 'db-connection.php';
                            $checkcategory = "SELECT * FROM `categories`";
                            $querycategory = $conn->prepare($checkcategory);
                            $querycategory->execute();
                            $result = $querycategory->fetchAll(PDO::FETCH_ASSOC);
                            if (count($result) > 0) {
                                foreach ($result as $row) {

                                    $catid = $row['id'];
                                    $catname = $row['category_name'];

                                    echo "
                                    <li class='lh-26'><a href='index.php?cat=$catid'><i class='la la-pencil mr-1 text-black'></i> $catname</a></li>
                                    ";
                                }
                            }
                            ?>

                        </ul>
                        
                        
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-2 -->
                <div class="col-lg-7">

                    <div class="question-tabs mb-50px">
                        <ul class="nav nav-tabs generic-tabs justify-content-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <div class="anim-bar"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Questions</a>
                            </li>

                        </ul>
                        <div class="tab-content pt-40px" id="myTabContent">
                            <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                                <div class="filters d-flex align-items-center justify-content-between pb-4">
                                    <h3 class="fs-17 fw-medium">Talk To Us</h3>

                                </div><!-- end filters -->
                                <div class="question-main-bar">
                                    <div class="questions-snippet">

                                        <form action="#" class="card card-item" method="POST" autocomplete="off">
                                            <?php
                                            if (isset($_POST['sign-up-btn'])) {
                                                require 'feedback-validate.php';
                                            }
                                            ?>
                                            <div class="card-body row p-0">

                                                <div class="col-lg-12 mx-auto">
                                                    <div class="form-action-wrapper py-5">
                                                        <div class="form-group">
                                                            <h3 class="fs-22 pb-3 fw-bold">Provide the details below</h3>
                                                            <div class="divider"><span></span></div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="fs-14 text-black fw-medium lh-18">Email Address</label>
                                                            <input type="text" name="email" value="<?php echo $email; ?>" class="form-control form--control" placeholder="Email address">
                                                        </div><!-- end form-group -->
                                                        <div class="form-group">
                                                            <label class="fs-14 text-black fw-medium lh-18">Message Title</label>
                                                            <input type="text" name="message_title" value="<?php echo $title; ?>" class="form-control form--control" placeholder="Message title goes here....">
                                                        </div><!-- end form-group -->

                                                        <div class="form-group">
                                                            <label class="fs-14 text-black fw-medium lh-18">Message Description</label>
                                                            <textarea name="description" value="" cols="2" rows="5" class="form-control form--control" placeholder="Briefly describe your issue here....."><?php echo $description; ?></textarea>
                                                        </div><!-- end form-group -->

                                                        <div class="form-group">
                                                            <button id="send-message-btn" name="sign-up-btn" class="btn theme-btn w-100" type="submit">Send Message <i class="la la-arrow-right icon ml-1"></i></button>

                                                        </div><!-- end form-group -->

                                                        <?php echo $message; ?>
                                                    </div><!-- end form-action-wrapper -->
                                                </div><!-- end col-lg-5 -->
                                            </div><!-- end row -->
                                        </form>
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
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/selectize.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>