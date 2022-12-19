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
                                <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Dashboard</a>
                            </li>

                        </ul>
                        <div class="tab-content pt-40px" id="myTabContent">
                            <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                                <div class="filters d-flex align-items-center justify-content-between pb-4">


                                </div><!-- end filters -->
                                <div class="question-main-bar">
                                    <div class="questions-snippet">
                                        <table class="table table-bordered" id="example">
                                            <thead>
                                                <tr>
                                                    <th>#</th> 
                                                    <th>Full Name</th>
                                                    <th>Email Address</th>
                                                    <th>Username</th>
                                                    <th>Date Joined</th>
                                                    <th>Bio</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $addstudent = "SELECT * FROM `users`";
                                                $checkadd = $conn->prepare($addstudent);
                                                $checkadd->execute();
                                                $result = $checkadd->fetchAll(PDO::FETCH_ASSOC);
                                                if (count($result) > 0) {
                                                    foreach ($result as $row) {
                                                        $fullname = $row['full_names'];
                                                        $userid = $row['id'];
                                                        $email = $row['email'];
                                                        $username = $row['username'];
                                                        $category = $row['category'];
                                                        $date = $row['date_joined'];
                                                        $bio = $row['bio'];

                                                        echo "
                                                        
                                                            <tr>
                                                                <td>$userid</td>
                                                                <td>$fullname</td>
                                                                <td>$email</td>
                                                                <td>$username</td> 
                                                                <td>$date</td>
                                                                <td>$bio</td>
                                                                <td><a href='delete-user.php?id=$userid'>Delete</a></td>
                                                            </tr>
                                                        ";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
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