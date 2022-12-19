<?php

require('admin-account.php');
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
                                <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Manage Questions</a>
                            </li>

                        </ul>
                        <div class="tab-content pt-40px" id="myTabContent">
                            <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                                <div class="filters d-flex align-items-center justify-content-between pb-4">


                                </div><!-- end filters -->
                                <div class="question-main-bar">
                                    <div class="questions-snippet">
                                        
                                            <?php
                                            $addstudent = "SELECT * FROM `questions`";
                                            $checkadd = $conn->prepare($addstudent);
                                            $checkadd->execute();
                                            $result = $checkadd->fetchAll(PDO::FETCH_ASSOC);
                                            if (count($result) > 0) {
                                                foreach ($result as $row) {
                                                    $quiztitle = $row['question_title'];
                                                    $quizid = $row['id'];
                                                    $categoryid = $row['category_id'];
                                                    $quizdesc = $row['description'];
                                                    $quizpostedby = $row['posted_by'];
                                                    $quizdate = $row['date_uploaded'];
                                                    $postimage = $row['image'];
                                                    $checkuser = "SELECT * FROM `users` WHERE `id`=?";
                                                    $queryuser = $conn->prepare($checkuser);
                                                    $queryuser->execute([$quizpostedby]);
                                                    $quizresult = $queryuser->fetch();
                                                    $postedby = $quizresult['full_names'];

                                                    $checkcategory = "SELECT * FROM `categories` WHERE `id`=?";
                                                    $querycategory = $conn->prepare($checkcategory);
                                                    $querycategory->execute([$categoryid]);
                                                    $categoryresult = $querycategory->fetch();
                                                    $categoryname = $categoryresult['category_name'];

                                                    $checkanswers = "SELECT * FROM `question_answers` WHERE `quiz_id` = ?";
                                                    $queryanswers = $conn->prepare($checkanswers);
                                                    $queryanswers->execute([$quizid]);
                                                    $queryresult = $queryanswers->fetchAll(PDO::FETCH_ASSOC);
                                                    $answercount = count($queryresult);
                                                    echo "
                        <div class='row'>
                        <div class='col-lg-4'>
                        ";
                                                    if (!empty($postimage)) {
                                                        echo "<img  class='img-fluid' src='../quiz_images/$postimage' >";
                                                    }
                                                    echo "
                        </div>
                        <div class='col-lg-8'>
                    <div class='question-main-bar mb-50px'>
                        <div class='question-highlight'>
                            <div class='media media-card shadow-none rounded-0 mb-0 bg-transparent p-0'>
                                <div class='media-body'>
                                    <h5 class='fs-20'><a href='delete-question-answers.php?quiz=$quizid'>$quiztitle</a></h5>
                                    <div class='meta d-flex flex-wrap align-items-center fs-13 lh-20 py-1'>
                                        <div class='pr-3'>
                                            <span>Posted</span>
                                            <span class='text-black'>$quizdate</span>
                                        </div>
                                        <div class='pr-3'>
                                            <span class='pr-1'>Category</span>
                                            <a href='#' class='text-black'>$categoryname</a>
                                        </div>
                                        <div class='pr-3'>
                                            <span class='pr-1'>Posted By</span>
                                            <span class='text-black'>$postedby</span>
                                        </div>
                                        <div class='pr-3'>
                                        <a href='question-answers.php?id=$quizid'>
                                            <span class='pr-1'>Answers</span>
                                            <span class='text-black'>$answercount</span>
                                            </a>
                                            <a href='delete-question-answers.php?quiz=$quizid'>
                                            <span class='pr-1 badge badge-danger '>Delete Thread</span> 
                                            </a>
                                        </div>
                                    </div>
                                    <p>$quizdesc</p>
                                    
                                </div>
                            </div><!-- end media -->
                        </div><!-- end question-highlight -->

                    </div><!-- end question-main-bar -->
                </div><!-- end col-lg-9 -->
                </div>
                        
                        ";
                                                }
                                            }
                                            ?>

                                        
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