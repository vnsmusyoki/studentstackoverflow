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

    <title>Student | My Inputs</title>

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
                $addstudent = "SELECT * FROM `feedback` WHERE `user_id` = ?";
                $checkadd = $conn->prepare($addstudent);
                $checkadd->execute([$userid]);
                $result = $checkadd->fetchAll(PDO::FETCH_ASSOC);
                if (count($result) > 0) {
                    foreach ($result as $row) {
                        $posttitle = $row['title'];
                        $postid = $row['id'];
                        $postmessage = $row['message'];
                        $postresponse = $row['response'];
                        $poststatus = $row['status'];
                        $postcreated = $row['date_created'];
                        $postupdated = $row['date_updated'];

                        echo "
                        <div class='col-lg-12'>
                    <div class='question-main-bar mb-50px'>
                        <div class='question-highlight'>
                            <div class='media media-card shadow-none rounded-0 mb-0 bg-transparent p-0'>
                                <div class='media-body'>
                                    <h5 class='fs-20'><a href='question-details.html'>$posttitle</a></h5>
                                    <div class='meta d-flex flex-wrap align-items-center fs-13 lh-20 py-1'>
                                        <div class='pr-3'>
                                            <span>Posted</span>
                                            <span class='text-black'>$postcreated</span>
                                        </div>
                                        <div class='pr-3'>
                                            <span class='pr-1'>Status</span>
                                            <a href='#' class='text-black'>$poststatus</a>
                                        </div>
                                        <div class='pr-3'>
                                            <span class='pr-1'>Posted On</span>
                                            <span class='text-black'>$postcreated</span>
                                        </div>
                                        <div class='pr-3'>
                                        <a href='delete-comment.php?post=$postid' class='btn btn-danger'>
                                            
                                            <span class='text-black'>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                    <p>My Message - <br/ >
                                    $postmessage</p>
                                    
                                    <div class='media media-card align-items-center hover-s'>
                    <div class='icon-element mr-3 bg-1'>
                    <svg class='svg-icon-color-white' width='32' version='1.1' xmlns='http://www.w3.org/2000/svg' x='0px' y='0px' viewBox='0 0 480 480' xml:space='preserve'>
                    <g>
                        <g>
                            <path d='M240,0c-26.51,0-48,21.49-48,48s21.49,48,48,48c26.499-0.026,47.974-21.501,48-48C288,21.49,266.51,0,240,0z M240,80
                                c-17.673,0-32-14.327-32-32s14.327-32,32-32c17.673,0,32,14.327,32,32S257.673,80,240,80z'></path>
                        </g>
                    </g>
                <g>
                        <g>
                            <path d='M272,104h-1.888l-1.688,0.84c-17.901,8.913-38.947,8.913-56.848,0l-1.688-0.84H208c-22.08,0.026-39.974,17.92-40,40v48
                                c0,13.255,10.745,24,24,24h96c13.255,0,24-10.745,24-24v-48C311.974,121.92,294.08,104.026,272,104z M296,192c0,4.418-3.582,8-8,8
                                h-96c-4.418,0-8-3.582-8-8v-48c0.002-12.592,9.735-23.042,22.296-23.936c21.375,9.92,46.034,9.92,67.408,0
                                c12.56,0.894,22.294,11.344,22.296,23.936V192z'></path>
                        </g>
                    </g>
                <g>
                        <g>
                            <path d='M408,264c-26.51,0-48,21.49-48,48c0,26.51,21.49,48,48,48c26.51,0,48-21.49,48-48
                                C455.974,285.501,434.499,264.026,408,264z M408,344c-17.673,0-32-14.327-32-32c0-17.673,14.327-32,32-32
                                c17.673,0,32,14.327,32,32C440,329.673,425.673,344,408,344z'></path>
                        </g>
                    </g>
                <g>
                        <g>
                            <path d='M440,368h-1.888l-1.688,0.8c-17.901,8.912-38.947,8.912-56.848,0l-1.688-0.8H376c-22.08,0.026-39.974,17.92-40,40v48
                                c0,13.255,10.745,24,24,24h96c13.255,0,24-10.745,24-24v-48C479.974,385.92,462.08,368.026,440,368z M464,456c0,4.418-3.582,8-8,8
                                h-96c-4.418,0-8-3.582-8-8v-48c0.002-12.592,9.735-23.042,22.296-23.936c21.375,9.92,46.033,9.92,67.408,0
                                C454.265,384.958,463.998,395.408,464,408V456z'></path>
                        </g>
                    </g>
                <g>
                        <g>
                            <path d='M72,264c-26.51,0-48,21.49-48,48c0,26.51,21.49,48,48,48s48-21.49,48-48C119.974,285.501,98.499,264.026,72,264z M72,344
                                c-17.673,0-32-14.327-32-32c0-17.673,14.327-32,32-32s32,14.327,32,32C104,329.673,89.673,344,72,344z'></path>
                        </g>
                    </g>
                <g>
                        <g>
                            <path d='M104,368h-1.888l-1.688,0.8c-17.901,8.912-38.947,8.912-56.848,0l-1.688-0.8H40c-22.08,0.026-39.974,17.92-40,40v48
                                c0,13.255,10.745,24,24,24h96c13.255,0,24-10.745,24-24v-48C143.974,385.92,126.08,368.026,104,368z M128,456c0,4.418-3.582,8-8,8
                                H24c-4.418,0-8-3.582-8-8v-48c0.002-12.592,9.735-23.042,22.296-23.936c21.375,9.92,46.033,9.92,67.408,0
                                C118.265,384.958,127.998,395.408,128,408V456z'></path>
                        </g>
                    </g>
                <g>
                        <g>
                            <path d='M319.372,406.276c-0.004-0.009-0.008-0.018-0.012-0.028c-1.732-4.065-6.431-5.956-10.495-4.224c0,0,0,0,0,0
                                c-36.125,15.14-76.245,17.902-114.104,7.856l7.488-2.2c4.242-1.242,6.674-5.686,5.432-9.928s-5.686-6.674-9.928-5.432l-32,9.384
                                c-0.12,0-0.208,0.136-0.32,0.176c-0.741,0.276-1.437,0.662-2.064,1.144c-0.278,0.15-0.545,0.318-0.8,0.504
                                c-0.844,0.753-1.513,1.681-1.96,2.72c-0.434,1.046-0.641,2.172-0.608,3.304c0.195,1.083,0.462,2.152,0.8,3.2
                                c0.048,0.112,0,0.24,0.088,0.352l16,30.616c2.046,3.919,6.881,5.438,10.8,3.392s5.438-6.881,3.392-10.8l-6.512-12.448
                                c43.014,12.93,89.195,10.417,130.552-7.104C319.189,415.039,321.093,410.345,319.372,406.276z'></path>
                        </g>
                    </g>
                <g>
                        <g>
                            <path d='M453.656,210.344c-3.124-3.123-8.188-3.123-11.312,0l-11.32,11.32c-6.624-70.07-51.111-130.876-115.888-158.4
                                c-4.065-1.732-8.764,0.159-10.496,4.224c-1.732,4.065,0.159,8.764,4.224,10.496c58.11,24.697,98.504,78.669,105.816,141.384
                                l-9.024-9.024c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l24,24c3.12,3.128,8.186,3.135,11.314,0.014
                                c0.005-0.005,0.01-0.01,0.014-0.014l24-24C456.791,218.528,456.784,213.464,453.656,210.344z'></path>
                        </g>
                    </g>
                <g>
                        <g>
                            <path d='M175.768,69.272c-0.026-0.467-0.095-0.93-0.208-1.384c0-0.072-0.088-0.12-0.12-0.2c-0.032-0.08,0-0.136,0-0.2
                                c-0.218-0.389-0.47-0.759-0.752-1.104c-0.259-0.469-0.565-0.911-0.912-1.32c-0.473-0.419-0.997-0.776-1.56-1.064
                                c-0.281-0.239-0.581-0.456-0.896-0.648l-32-14.616c-4.087-1.678-8.761,0.275-10.439,4.362c-1.587,3.865,0.068,8.301,3.799,10.182
                                l16.568,7.576C86.875,104.237,47.955,169.256,48,240c0,4.418,3.582,8,8,8s8-3.582,8-8c-0.04-62.293,32.901-119.952,86.584-151.552
                                l-5.784,12.088c-1.907,3.977-0.236,8.747,3.736,10.664c1.079,0.527,2.263,0.801,3.464,0.8c3.072-0.004,5.87-1.767,7.2-4.536
                                l16-33.384c0-0.08,0-0.168,0.064-0.248c0.208-0.547,0.353-1.116,0.432-1.696c0.137-0.431,0.239-0.872,0.304-1.32
                                C175.973,70.295,175.896,69.778,175.768,69.272z'></path>
                        </g>
                    </g>
            </svg>
                    </div>
                    <div class='media-body'>
                        <h5 class='pb-2'><a href='free-demo.html'>Admin Response</a></h5>
                        <p>$postresponse</p>
                          
                                            <p>Date Replied - $postupdated</p>
                                     
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