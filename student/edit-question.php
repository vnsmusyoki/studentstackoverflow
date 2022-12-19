<?php

require('admin-account.php');
$message = $description = $question = $category = '';

if (isset($_GET['quiz'])) {
    $questionid = $_GET['quiz'];

    $addstudent = "SELECT * FROM `questions` WHERE `id`=?";
    $checkadd = $conn->prepare($addstudent);
    $checkadd->execute([$questionid]);
    $result = $checkadd->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) > 0) {
        foreach ($result as $row) {
            $globalquiztitle = $row['question_title'];
            $globalquizid = $row['id'];
            $globalcategoryid = $row['category_id'];
            $globalquizdesc = $row['description'];
            $globalquizpostedby = $row['posted_by'];
            $globalquizdate = $row['date_uploaded'];
            $globalpostimage = $row['image'];


            global $globalquiztitle; global $globalquizid; global $globalcategoryid; global $globalquizdesc; global $globalquizpostedby; global $globalquizdate;
        }
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
                                <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Post Quiz</a>
                            </li>

                        </ul>
                        <div class="tab-content pt-40px" id="myTabContent">
                            <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                                <div class="filters d-flex align-items-center justify-content-between pb-4">


                                </div><!-- end filters -->
                                <div class="question-main-bar">
                                    <div class="questions-snippet">
                                        <form method="post" class="card-body" action="" enctype="multipart/form-data">
                                            <?php
                                            ini_set('display_errors', 1);
                                            ini_set('display_startup_errors', 1);
                                            error_reporting(E_ALL);
                                            if (isset($_POST['submitquiz'])) {
                                                require 'functions/edit-quiz.php';
                                            }
                                            ?>
                                            <?php echo $message; ?>
                                            <div class="input-box">
                                                <label class="fs-14 text-black fw-medium mb-0">Question Title</label>
                                                <p class="fs-13 pb-3 lh-20">Be specific and imagine you’re asking a question to another person</p>
                                                <div class="form-group">
                                                    <input class="form-control form--control" type="text" name="question_title" placeholder="e.g. Is there an R function for finding the index of an element in a vector?" value="<?php echo $globalquiztitle; ?>">
                                                </div>
                                            </div><!-- end input-box -->
                                            <div class="input-box">
                                                <label class="fs-14 text-black fw-medium mb-0"> Question Image</label>
                                                <div class="form-group">
                                                    <input class="form-control form--control" name="answer_image" type="file">
                                                </div>
                                            </div><!-- end input-box -->
                                            <div class="input-box">
                                                <label class="fs-14 text-black fw-medium mb-0">Category</label>
                                                <p class="fs-13 pb-3 lh-20">Please choose the appropriate section so the question can be searched easily.</p>
                                                <div class="form-group">

                                                    <select class="form-control" data-placeholder="Select a Category" name="category_id">
                                                        <option selected value="">Select a Category</option>
                                                        <?php
                                                        $addstudent = "SELECT * FROM `categories`";
                                                        $checkadd = $conn->prepare($addstudent);
                                                        $checkadd->execute();
                                                        $result = $checkadd->fetchAll(PDO::FETCH_ASSOC);
                                                        if (count($result) > 0) {
                                                            foreach ($result as $row) {

                                                                $category = $row['category_name'];
                                                                $catid = $row['id'];
                                                                echo '<option value="' . $catid . '">' . $category . '</option>';
                                                              
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div><!-- end input-box -->
                                            <div class="input-box">
                                                <label class="fs-14 text-black fw-medium mb-0">Details</label>
                                                <p class="fs-13 pb-3 lh-20">Include all the information someone would need to answer your question</p>
                                                <div class="form-group">
                                                    <textarea class="form-control form--control user-text-editor" rows="10" cols="40" name="question_description"><?php echo $globalquizdesc; ?></textarea>
                                                    <div class="d-flex align-items-center pt-2">
                                                    </div>
                                                </div>
                                            </div><!-- end input-box -->

                                            <div class="input-box pt-2">

                                                <div class="btn-box">
                                                    <button type="submit" class="btn theme-btn" name="submitquiz">Update your question</button>
                                                </div>
                                            </div>
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
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/selectize.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>