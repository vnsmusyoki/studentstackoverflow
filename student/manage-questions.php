<?php

require('student-account.php');
?>
<?php
$message = $description = $question = $category = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Student | My Questions</title>

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
    <link rel="stylesheet" href="../css/jquery-te-1.4.0.css">
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
    <!--======================================
        END HERO AREA
======================================-->
    <section class="question-area pt-40px pb-40px">
        <div class="container">
            <div class="row">
                <?php
                $addstudent = "SELECT * FROM `questions` WHERE `posted_by` = ?";
                $checkadd = $conn->prepare($addstudent);
                $checkadd->execute([$userid]);
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
                        <div class='col-lg-12'>
                    <div class='question-main-bar mb-50px'>
                        <div class='question-highlight'>
                            <div class='media media-card shadow-none rounded-0 mb-0 bg-transparent p-0'>
                                <div class='media-body'>
                                    <h5 class='fs-20'><a href='question-details.html'>$quiztitle</a></h5>
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
                                    ";
                                    if (!empty($postimage)) {
                                        echo "<img  style='height:50vh;width:50%;' src='../quiz_images/$postimage' >";
                                    }
                                    echo "
                                </div>
                            </div><!-- end media -->
                        </div><!-- end question-highlight -->

                    </div><!-- end question-main-bar -->
                </div><!-- end col-lg-9 -->
                        
                        ";
                    }
                }
                ?>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end question-area -->

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
    <script src="../js/jquery-te-1.4.0.min.js"></script>
    <script src="../js/jquery.multi-file.min.js"></script>
</body>

</html>