<?php
require('admin-account.php');

?>
<?php $message = $category_name = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin | Categories</title>

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
    <!--======================================
        END HERO AREA
======================================-->

    <section class="hero-area bg-white shadow-sm overflow-hidden">
        <span class="stroke-shape stroke-shape-1"></span>
        <span class="stroke-shape stroke-shape-2"></span>
        <span class="stroke-shape stroke-shape-3"></span>
        <span class="stroke-shape stroke-shape-4"></span>
        <span class="stroke-shape stroke-shape-5"></span>
        <span class="stroke-shape stroke-shape-6"></span>
        <div class="container">
            <div class="hero-content pt-80px pb-80px">
                <h2 class="section-title">Admin / Manage Categories</h2>
                <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 125">
                    <defs>
                        <style>
                            .cls-3,
                            .cls-6,
                            .cls-7 {
                                fill: none;
                                stroke-miterlimit: 10
                            }

                            .cls-3 {
                                stroke: #3cb1c6
                            }

                            .cls-4 {
                                fill: #fff
                            }

                            .cls-5 {
                                fill: #f9b851
                            }

                            .cls-6 {
                                stroke: #f48024
                            }

                            .cls-7 {
                                stroke: #bbc0c4;
                                stroke-dasharray: 5
                            }
                        </style>
                    </defs>
                    <g opacity=".5">
                        <path fill="#cceaff" d="M232.73 73L217.5 92.89V73h-16V26h64v47H232.73z" />
                        <path class="cls-3" d="M205 47V20.5h14.5M255.5 66.5h-18.51L221 86.06V66.5h-16V58M231.5 20.5H270v46h-6.5" />
                        <path class="cls-4" d="M222.5 40.79v7.3l8.16 7.29 15.84-14.21V33.3l-15.84 14.31-8.16-6.82z" />
                        <path class="cls-5" d="M374.36 76l-9.29 11.42-.26-11.42h-5.31V49h45v27h-30.14z" />
                        <path class="cls-6" d="M379.5 46.5H402V55M402 62v11.5H372.02L363 84.92V73.5h-6v-27h11.5" />
                        <path class="cls-4" d="M377.5 59h5v5h-5zM367.5 59h5v5h-5zM387.5 59h5v5h-5z" />
                        <path class="cls-5" d="M180.25 67l5.16 6.77.14-6.77h2.95V51h-25v16h16.75z" />
                        <path class="cls-6" d="M170.5 65.5h10.73l5.77 6.72V65.5h4V59M170.5 49.5H165V65M191 53v-3.5h-15.5" />
                        <path class="cls-4" transform="rotate(-180 177 58.5)" d="M175.5 57h3v3h-3z" />
                        <path class="cls-4" transform="rotate(-180 183 58.5)" d="M181.5 57h3v3h-3z" />
                        <path class="cls-4" transform="rotate(-180 171 58.5)" d="M169.5 57h3v3h-3z" />
                        <path class="cls-5" d="M486.95 77l15.55 19.89V77h16V30h-65v47H486.95z" />
                        <path class="cls-6" d="M515 51V24.5h-14.5M464.5 70.5h18.51L499 90.06V70.5h16V62M488.5 24.5H450v46h6.5" />
                        <path class="cls-4" d="M470.5 44.71V52l8.16 7.3 15.84-14.21v-7.87l-15.84 14.3-8.16-6.81z" />
                        <path class="cls-3" d="M533.5 34.5h-2.14L527 40.34V34.5h-3v-12h4.5M545 30v5.5h-7.5M533.5 22.5H545V26M534 28.5h2v2h-2z" />
                        <path class="cls-3" d="M529 28.5h2v2h-2zM539 28.5h2v2h-2zM280 30V16.5h7.5M305.5 39.5H296l-8 10v-10h-8V35M293.5 15.5H313v24h-3.5" />
                        <path class="cls-3" d="M289 26.52v3.65l4.08 3.65 7.92-7.11v-3.93l-7.92 7.15-4.08-3.41z" />
                        <path class="cls-6" d="M124.5 27.5h1.41l3.09 4.23V27.5h2v-10h-2.5M115 23v4.5h6.5M124.5 17.5H115V21" />
                        <path class="cls-6" transform="rotate(-180 123 22.5)" d="M122 21.5h2v2h-2z" />
                        <path class="cls-6" transform="rotate(-180 127 22.5)" d="M126 21.5h2v2h-2z" />
                        <path class="cls-6" transform="rotate(-180 119 22.5)" d="M118 21.5h2v2h-2z" />
                        <path class="cls-7" d="M188.5 78.19s4.69 18.91 27.5 16.28M131 32.67s21.64-2 33 15M271.12 69.19c23.92 31.24 55.21 35.18 90.64 19.3M402 43.5c.68-6.28 19.53-30.13 45.26-21M503.45 98.26c5.25.1 37.8-10.84 23.09-54.76M272.34 66.5s10.51 0 15.16-13.88" />
                        <path class="cls-7" d="M97.22 79.67c14.33-2.39 42.51-3.18 55.87 12.65s58.91 20.93 64.49 3" />
                    </g>
                    <path class="cls-3" d="M59.15 84.6v-1.04M71.6 84.81v3.73M53.39 82.51l-3.96-.54 2.96-21.6 27.37 3.75-2.96 21.6-20.05-2.75" />
                    <path class="cls-3" d="M50.22 76.21l-2.31-.32a2 2 0 01-1.73-2.28l.63-4.61a2 2 0 012.3-1.74l2.3.31zM79.88 80.27L77.59 80l1.18-8.64 2.32.32a2 2 0 011.73 2.27l-.64 4.62a2 2 0 01-2.3 1.7zM66.6 79.11l-.2 1.44M69.48 79.5l-.2 1.44M63.72 78.71l-.2 1.44M60.84 78.32l-.2 1.44M57.96 77.93l-.2 1.44" />
                    <ellipse class="cls-3" cx="66.45" cy="70.5" rx="2.87" ry="2.94" transform="rotate(-82.2 66.45 70.504)" />
                    <ellipse class="cls-3" cx="56.76" cy="69.18" rx="2.87" ry="2.94" transform="rotate(-82.2 56.758 69.175)" />
                    <path class="cls-3" d="M55.42 105.96v7.46M72.84 105.96v7.46M76.57 96.01v1.24M66.62 96.01v1.24M54.18 95.38h7.47v4.98h-7.47z" />
                    <path class="cls-3" d="M81.55 100.98v4.36H46.71V87.92h5.28M57.43 79.39l-1.98 3" />
                    <path class="cls-3" d="M54.31 90.61c-2.34-1.55-3.17-4.43-1.85-6.43l1.8-2.73 8.49 5.61L61 89.78c-1.37 2.01-4.34 2.38-6.69.83zM62.27 87.92h19.28v9.33" />
                    <path class="cls-3" d="M88.32 96.44l1.28-4.17a4.4 4.4 0 00-4.45-4.35h-5.47M79.29 104.84l2.68-3.44M82.72 107.53l2.69-3.44M88.32 96.83c2.22 1.73 2.81 4.67 1.33 6.56l-2 2.57-8-6.27 2-2.57c1.47-1.89 4.46-2.02 6.67-.29zM55.3 91.15a6.72 6.72 0 01-1.74.35H46.5" />
                    <path class="cls-5" d="M40.82 46.24l7.96 10 .23-10h4.55V22.6H14.98v23.64h25.84z" />
                    <path class="cls-6" d="M28.67 43.13h14.69l8.33 10.53V43.13h6.22V33.8M26.18 19.49H18.1v24.26M56.67 25.09v-5.6H33.65" />
                    <path class="cls-4" d="M34.17 33.8a5.9 5.9 0 01.34-2.23 4.5 4.5 0 011.24-1.64A6.41 6.41 0 0037 28.62a2.06 2.06 0 00.3-1.07c0-1.12-.52-1.69-1.56-1.69a1.56 1.56 0 00-1.18.46 1.74 1.74 0 00-.46 1.25h-2.9a3.84 3.84 0 011.23-3 4.82 4.82 0 013.31-1.08 4.84 4.84 0 013.29 1 3.64 3.64 0 011.17 2.89 3.57 3.57 0 01-.43 1.62 6.57 6.57 0 01-1.33 1.68l-.81.77a2.78 2.78 0 00-.87 1.71v.61zM34 36.85a1.34 1.34 0 01.43-1 1.64 1.64 0 012.17 0 1.34 1.34 0 01.43 1 1.32 1.32 0 01-.42 1 1.7 1.7 0 01-2.19 0 1.32 1.32 0 01-.42-1z" />
                    <path class="cls-3" d="M79.06 124H66.62v-4.21a6.45 6.45 0 015-6.42 6.29 6.29 0 017.47 6.33zM75.33 122.13v1.25M70.35 122.13v1.25M61.64 124H49.2v-4.21a6.47 6.47 0 015-6.42 6.29 6.29 0 017.47 6.33zM57.91 122.13v1.25M52.93 122.13v1.25" />
                </svg>
            </div><!-- end hero-content -->
        </div><!-- end container -->
    </section>
    <section class="question-area pt-40px pb-40px">
        <div class="container">
            <div class="filters pb-3">
                <div class="d-flex flex-wrap align-items-center justify-content-between pb-3">
                    <h3 class="fs-22 fw-medium">Categories</h3>
                    <a href="categories.php" class="btn theme-btn theme-btn-sm">Ask Category</a>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <form method="post" class="mr-3 w-25">
                        <div class="form-group">
                            <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="search" placeholder="Filter  category">
                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                        </div>
                    </form>
                    <div class="btn-group btn--group mb-3" role="group" aria-label="Filter button group">
                        <a href="#" class="btn active">All</a>
                        <a href="#" class="btn">Popular</a>
                        <a href="#" class="btn">Most visited</a>
                    </div>
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
                        $checkquestions = "SELECT * FROM `categories` WHERE `category_id`=?";
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
                            <h5 class='fs-19 fw-medium mb-1'><a href='category.html'>$category</a></h5>
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
</body>

</html>