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
                                                        <h3 class="fs-22 fw-medium">Categories</h3>
                                                        <a href="categories.php" class="btn theme-btn theme-btn-sm">Ask Category</a>
                                                    </div>

                                                </div><!-- end filters -->
                                                <div class="row">
                                                    <?php
                                                    $addstudent = "SELECT * FROM `categories`";
                                                    $checkadd = $conn->prepare($addstudent);
                                                    $checkadd->execute();
                                                    $result = $checkadd->fetchAll(PDO::FETCH_ASSOC);
                                                    if (count($result) > 0) {
                                                        foreach ($result as $row) {

                                                            $category = $row['category_name'];
                                                            $catid = $row['id'];
                                                            $description = $row['description'];
                                                            $checkquestions = "SELECT * FROM `questions` WHERE `category_id`=?";
                                                            $queryquestions = $conn->prepare($checkquestions);
                                                            $queryquestions->execute([$catid]);
                                                            $quizresult = $queryquestions->fetchAll(PDO::FETCH_ASSOC);
                                                            $quizcount = count($quizresult);
                                                            echo "
                               <div class='col-lg-3 responsive-column-half'>
                    <div class='media media-card p-3 align-items-center hover-y'>
                        <div class='icon-element shadow-sm flex-shrink-0 mr-3 border border-gray'>
                            <svg class='svg-icon-color-gray' enable-background='new 0 0 24 24' height='30' viewBox='0 0 24 24' width='30' xmlns='http://www.w3.org/2000/svg'>
                                <g id='XMLID_1_>
                                    <path d='m23.5 11.5c.28 0 .5.22.5.5s-.22.5-.5.5h-.5v-1z' />
                                    <path d='m12.5 11.5h10.5v1h-10.5z' />
                                    <path d='m21.5 24h-9.5c.28 0 .5-.22.5-.5v-.5h9c.83 0 1.5-.67 1.5-1.5v-9h.5c.28 0 .5-.22.5-.5v9.5c0 1.38-1.12 2.5-2.5 2.5z' />
                                    <path d='m24 2.5v9.5c0-.28-.22-.5-.5-.5h-.5v-9c0-.83-.67-1.5-1.5-1.5h-9v-.5c0-.28-.22-.5-.5-.5h9.5c1.38 0 2.5 1.12 2.5 2.5z' />
                                    <path d='m20 6c.28 0 .5.22.5.5s-.22.5-.5.5h-4c-.28 0-.5-.22-.5-.5s.22-.5.5-.5z' />
                                    <path d='m20 16c.28 0 .5.22.5.5s-.22.5-.5.5h-4c-.28 0-.5-.22-.5-.5s.22-.5.5-.5z' />
                                    <path d='m20 19c.28 0 .5.22.5.5s-.22.5-.5.5h-4c-.28 0-.5-.22-.5-.5s.22-.5.5-.5z' />
                                    <path d='m12.5 23v.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5v-.5z' />
                                    <path d='m11.5 12.5h1v10.5h-1z' />
                                    <path d='m11.5 11.5h1v1h-1z' />
                                    <path d='m11.5 1h1v10.5h-1z' />
                                    <path d='m12.5.5v.5h-1v-.5c0-.28.22-.5.5-.5s.5.22.5.5z' />
                                    <path d='m1 11.5h10.5v1h-10.5z' />
                                    <path d='m8 6c.28 0 .5.22.5.5s-.22.5-.5.5h-1.5v-1z' />
                                    <path d='m7.85 19.15c.2.19.2.51 0 .7-.09.1-.22.15-.35.15s-.26-.05-.35-.15l-1.15-1.15.7-.7z' />
                                    <path d='m7.15 16.15c.19-.2.51-.2.7 0 .2.19.2.51 0 .7l-1.15 1.15-.7-.7z' />
                                    <path d='m5.505 17.505h.99v.99h-.99z' transform='matrix(.707 -.707 .707 .707 -10.971 9.515)' />
                                    <path d='m6.5 7v1.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5v-1.5z' />
                                    <path d='m5.5 6h1v1h-1z' />
                                    <path d='m6.5 4.5v1.5h-1v-1.5c0-.28.22-.5.5-.5s.5.22.5.5z' />
                                    <path d='m6 17.3-.7.7-1.15-1.15c-.2-.19-.2-.51 0-.7.19-.2.51-.2.7 0z' />
                                    <path d='m5.5 6v1h-1.5c-.28 0-.5-.22-.5-.5s.22-.5.5-.5z' />
                                    <path d='m4.85 19.85c-.09.1-.22.15-.35.15s-.26-.05-.35-.15c-.2-.19-.2-.51 0-.7l1.15-1.15.7.7z' />
                                    <path d='m1 11.5v1h-.5c-.28 0-.5-.22-.5-.5s.22-.5.5-.5z' />
                                    <path d='m0 2.5c0-1.38 1.12-2.5 2.5-2.5h9.5c-.28 0-.5.22-.5.5v.5h-9c-.83 0-1.5.67-1.5 1.5v9h-.5c-.28 0-.5.22-.5.5z' />
                                    <path d='m1 21.5c0 .83.67 1.5 1.5 1.5h9v.5c0 .28.22.5.5.5h-9.5c-1.38 0-2.5-1.12-2.5-2.5v-9.5c0 .28.22.5.5.5h.5z' />
                                </g>
                            </svg>
                        </div>
                        <div class='media-body'>
                            <h5 class='fs-19 fw-medium mb-1'><a href='#l'>$category</a></h5>
                            <p class='fw-medium fs-15 text-black-50 lh-18'>$quizcount</p>
                        </div><!-- end media-body -->
                    </div><!-- end media -->
                </div><!-- end col-lg-3 -->
                               ";
                                                        }
                                                    }
                                                    ?>


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