<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Student Stack Overflow - Social Questions and Answers</title>

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
                        <h2 class="section-title pb-3 text-white">Share & grow knowledge with us!</h2>
                        <p class="section-desc text-white">If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            <br> isn't anything embarrassing hidden in the middle of text.
                        </p>
                        <div class="hero-btn-box py-4">
                            <a href="ask-question.html" class="btn theme-btn theme-btn-white">Ask a Question <i class="la la-arrow-right icon ml-1"></i></a>
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
                <div class="col-lg-10">
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
                                    <h3 class="fs-17 fw-medium">All Questions</h3>

                                </div><!-- end filters -->
                                <div class="question-main-bar">
                                    <div class="questions-snippet">
                                        <?php
                                        require 'db-connection.php';

                                        if (isset($_GET['id'])) {
                                            $question = $_GET['id'];
                                            global $question;
                                            $addstudent = "SELECT * FROM `questions` WHERE `id` = ?";
                                            $checkadd = $conn->prepare($addstudent);
                                            $checkadd->execute([$question]);
                                            $selectedquiz = $checkadd->fetch();

                                            $quiztitle = $selectedquiz['question_title'];
                                            $quizid = $selectedquiz['id'];
                                            $categoryid = $selectedquiz['category_id'];
                                            $quizdesc = $selectedquiz['description'];
                                            $quizpostedby = $selectedquiz['posted_by'];
                                            $quizdate = $selectedquiz['date_uploaded'];
                                            $postimage = $selectedquiz['image'];
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
                                            $queryanswers->execute([$question]);
                                            $queryresult = $queryanswers->fetchAll(PDO::FETCH_ASSOC);
                                            $answercount = count($queryresult);
                                            echo "
                                            <div class='row'>
                                            <div class='col-lg-4'>
                                            ";
                                                                    if (!empty($postimage)) {
                                                                        echo "<img  class='img-fluid' src='./quiz_images/$postimage' >";
                                                                    }
                                                                    echo "
                                            </div>
                                            <div class='col-lg-8'>
                    <div class='question-main-bar mb-50px'>
                        <div class='question-highlight'>
                            <div class='media media-card shadow-none rounded-0 mb-0 bg-transparent p-0'>
                                <div class='media-body'>
                                    <h5 class='fs-20 text-success'>$quiztitle</h5>
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
                                        <a href='#'>
                                            <span class='pr-1'>Answers</span>
                                            <span class='text-black'>$answercount</span>
                                            </a>
                                        </div>
                                    </div>
                                    </p>$quizdesc</p>
                                </div>
                            </div><!-- end media -->
                        </div><!-- end question-highlight -->

                    </div><!-- end question-main-bar -->
                </div><!-- end col-lg-9 -->
                        
                        ";


                                            echo "<div class='text-center'><h4 class='text-warning' style=';margin-bottom:10px;'>Answers</h4></div>";
                                            if (count($queryresult) > 0) {
                                                foreach ($queryresult as $row) {
                                                    $anwer = $row['answer'];
                                                    $answeredby  = $row['answered_by'];
                                                    $timeanswered  = $row['date_uploaded'];
                                                    $answerimg = $row['image'];

                                                    $answeruser = "SELECT * FROM `users` WHERE `id`=?";
                                                    $queryansweruser = $conn->prepare($answeruser);
                                                    $queryansweruser->execute([$answeredby]);
                                                    $answeuserresult = $queryansweruser->fetch();
                                                    $answeredname = $answeuserresult['full_names'];


                                                    echo "
                                <div class='row mt-2' style='width:100%;border:1px solid #ced4da;'>
                                <div class='col-6'>
                                <img  class='img-fluid'  src='./quiz_images/$answerimg' >    
                                </div>
                                <div class='col-6'>
                                <div class='question-main-bar mb-50px'>
                                <div class='media media-card user-media owner align-items-center'>
                                <a href='#' class='media-img d-block'>
                                    <img src='https://ui-avatars.com/api/?name=$answeredname' alt='avatar'>
                                </a>
                                <div class='media-body d-flex flex-column align-items-start justify-content-column'>
                                    <div>
                                        <h5 class='pb-1'><a href='#'>$answeredname</a></h5>
                                        
                                    </div>
                                    <small class='meta d-block text-right'>
                                        
                                        <span class='d-block lh-18 fs-12'>$timeanswered</span>
                                    </small>
                                    <p>$anwer</p>
                                </div>
                            </div>
                                </div>
                                </div>
                                ";
                                                }
                                            }
                                        } elseif (isset($_GET['cat'])) {
                                            $checkselected = $_GET['cat'];
                                            $addstudent = "SELECT * FROM `questions` WHERE `category_id` = ?";
                                            $checkadd = $conn->prepare($addstudent);
                                            $checkadd->execute([$checkselected]);
                                            $result = $checkadd->fetchAll(PDO::FETCH_ASSOC);
                                            if (count($result) > 0) {
                                                foreach ($result as $row) {
                                                    $quiztitle = $row['question_title'];
                                                    $quizid = $row['id'];
                                                    $categoryid = $row['category_id'];
                                                    $quizdesc = $row['description'];
                                                    $quizpostedby = $row['posted_by'];
                                                    $quizdate = $row['date_uploaded'];
                                                    $checkuser = "SELECT * FROM `users` WHERE `id`=?";
                                                    $queryuser = $conn->prepare($checkuser);
                                                    $queryuser->execute([$quizpostedby]);
                                                    $quizresult = $queryuser->fetch();
                                                    $postedby = $quizresult['full_names'];

                                                    $checkcategory = "SELECT * FROM `categories` WHERE `id`=?";
                                                    $querycategory = $conn->prepare($checkcategory);
                                                    $querycategory->execute([$quizid]);
                                                    $categoryresult = $querycategory->fetch();
                                                    $categoryname = $categoryresult['category_name'];

                                                    $checkanswers = "SELECT * FROM `question_answers` WHERE `quiz_id` = ?";
                                                    $queryanswers = $conn->prepare($checkanswers);
                                                    $queryanswers->execute([$quizid]);
                                                    $queryresult = $queryanswers->fetchAll(PDO::FETCH_ASSOC);
                                                    $answercount = count($queryresult);
                                                    echo "
                                                    <div class='col-lg-12'>
                                                <div class='question-main-bar mb-50px'>
                                                    <div class='question-highlight'>
                                                        <div class='media media-card shadow-none rounded-0 mb-0 bg-transparent p-0'>
                                                            <div class='media-body'>
                                                                <h5 class='fs-20'>$quiztitle</h5>
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end media -->
                                                    </div><!-- end question-highlight -->
                            
                                                </div><!-- end question-main-bar -->
                                            </div><!-- end col-lg-9 -->
                                                    
                                                    ";
                                                }
                                            }
                                        } else {
                                            require 'db-connection.php';
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
                        <div class='col-lg-12'>
                    <div class='question-main-bar mb-50px'>
                        <div class='question-highlight'>
                            <div class='media media-card shadow-none rounded-0 mb-0 bg-transparent p-0'>
                                <div class='media-body'>
                                    <h5 class='fs-20'>$quiztitle</h5>
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
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end media -->
                        </div><!-- end question-highlight -->

                    </div><!-- end question-main-bar -->
                </div><!-- end col-lg-9 -->
                        
                        ";
                                                }
                                            }
                                        }
                                        ?>
                                        
                                    </div><!-- end questions-snippet -->
                                    <center><a href="sign-in.php">Please login to answer</a></center>
                                    
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