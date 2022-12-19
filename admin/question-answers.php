<?php

require('admin-account.php');
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

    <title>Admin | Question Answers</title>

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
                                <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Question Answers</a>
                            </li>

                        </ul>
                        <div class="tab-content pt-40px" id="myTabContent">
                            <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                                <div class="filters d-flex align-items-center justify-content-between pb-4">


                                </div><!-- end filters -->
                                <div class="question-main-bar">
                                    <div class="questions-snippet">

                                       
                                            <?php
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
                                            $querycategory->execute([$quizid]);
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
                                                    echo "<img  class='img-fluid' src='../quiz_images/$postimage' >";
                                                }
                                                echo "
                        </div>
                        <div class='col-lg-8'>
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
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end media -->
                        </div><!-- end question-highlight -->

                    </div><!-- end question-main-bar -->
                </div><!-- end col-lg-9 -->
                        
                        ";
                                            echo "Answers";
                                            if (count($queryresult) > 0) {
                                                foreach ($queryresult as $row) {
                                                    $anwer = $row['answer'];
                                                    $answeredby  = $row['answered_by'];
                                                    $timeanswered  = $row['date_uploaded'];
                                                    $postimages = $row['image'];
                                                    $ansid = $row['id'];

                                                    $answeruser = "SELECT * FROM `users` WHERE `id`=?";
                                                    $queryansweruser = $conn->prepare($answeruser);
                                                    $queryansweruser->execute([$answeredby]);
                                                    $answeuserresult = $queryansweruser->fetch();
                                                    $answeredname = $answeuserresult['full_names'];


                                                    echo "
                                <div class='row'>
                                <div class='col-lg-6'>
                                ";
                                                        if (!empty($postimages)) {
                                                            echo "<img  class='img-fluid' src='../quiz_images/$postimages' >";
                                                        }
                                                        echo "
                                </div>
                                <div class='col-lg-6'>
                                <div class='question-main-bar mb-50px'>
                                <div class='media media-card user-media owner align-items-center'>
                                <a href='#' class='media-img d-block'>
                                    <img src='https://ui-avatars.com/api/?name=$answeredname' alt='avatar'>
                                </a>
                                <div class='media-body d-flex flex-column align-items-start justify-content-column'>
                                    <div class='d-flex flex-row justify-content-between'>
                                    <div>
                                    <h5 class='pb-1'><a href='#'>$answeredname</a></h5>
                                    </div>
                                    <div class='d-flex  justify-content-end'>
                                        ";
                                                   
                                                        echo "<a href='delete-answer.php?answer=$ansid' class='ml-5 text-danger' style='float:right;'>Delete answer</a>";
                                                    

                                                    echo "
                                    </div>
                                        
                                        
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


                                            ?>
                                            <form method="post" class="card-body" action="" enctype="multipart/form-data">
                                                <?php
                                                if (isset($_POST['submitquiz'])) {
                                                    require 'functions/add-answer.php';
                                                }
                                                ?>
                                                <?php echo $message; ?>
                                                <input type="hidden" name="quiz_id" value="<?php echo $_GET['id']; ?>">
                                                <div class="input-box">
                                                    <label class="fs-14 text-black fw-medium mb-0"> Answer Image</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control" name="post_image" type="file">

                                                    </div>
                                                </div><!-- end input-box -->
                                                <div class="input-box">
                                                    <label class="fs-14 text-black fw-medium mb-0">Post Answer</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control form--control user-text-editor" rows="10" cols="40" name="question_description"><?php echo $description; ?></textarea>
                                                        <div class="d-flex align-items-center pt-2">
                                                        </div>
                                                    </div>
                                                </div><!-- end input-box -->

                                                <div class="input-box pt-2">

                                                    <div class="btn-box">
                                                        <button type="submit" class="btn theme-btn" name="submitquiz">Publish your question</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div><!-- end row -->
                                    </div><!-- end questions-snippet -->

                                </div><!-- end question-main-bar -->
                            </div><!-- end tab-pane -->

                        </div><!-- end tab-content -->
                    </div><!-- end question-tabs -->
                

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