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
    <!-- end inject -->
</head>

<body>
 
   <?php include 'header.php'; ?>
  

 
<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-40px pb-40px">
    <div class="container">
        <div class="filters pb-40px d-flex flex-wrap align-items-center justify-content-between">
            <h3 class="fs-22 fw-medium mr-0">Add new post</h3>
            <ul class="breadcrumb-list">
                <li><a href="#">Home</a><span><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"></path></svg></span></li>
                <li>Add new post</li>
            </ul>
        </div><!-- end filters -->
        <form action="#" class="row">
            <div class="col-lg-8">
                <div class="card card-item">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-20">Your Name</label>
                            <input type="text" name="name" class="form-control form--control fs-14" placeholder="e.g. Alex smith">
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-20">Email <span class="text-gray">(Address never made public)</span></label>
                            <input type="email" name="email" class="form-control form--control fs-14" placeholder="e.g. alexsmith@gmail.com">
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-20">Post Title</label>
                            <input type="text" name="text" class="form-control form--control fs-14" placeholder="Please choose an appropriate title for the post.">
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-20">Post Content</label>
                            <textarea name="message" class="form-control form--control user-text-editor" rows="6"></textarea>
                        </div><!-- end form-group -->
                        <div class="form-group">
                            <div class="custom-control custom-checkbox fs-14">
                                <input type="checkbox" class="custom-control-input" id="agreeCheckBox" data-com.bitwarden.browser.user-edited="yes">
                                <label class="custom-control-label custom--control-label" for="agreeCheckBox">By posting, you agreed to the <a href="terms-and-conditions.html" class="text-color hover-underline">Terms of Service </a> and <a href="privacy-policy.html" class="text-color hover-underline">Privacy Policy.</a></label>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <button class="btn theme-btn" type="submit">Publish Your Post</button>
                        </div><!-- end form-group -->
                    </div><!-- end card-body -->
                </div>
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="card card-item">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-20">Category</label>
                            <select class="custom-select custom--select">
                                <option value="0">Select a Category</option>
                                <option value="1">Uncategorized</option>
                                <option value="2">Work</option>
                            </select>
                        </div><!-- end form-group -->
                        <div class="form-group mb-0">
                            <label class="fs-14 text-black fw-medium lh-20">Tags</label>
                            <input class="input-tags input--tags" type="text" name="tags" placeholder="e.g. javascript">
                        </div><!-- end form-group -->
                    </div><!-- end card-body -->
                </div>
                <div class="card card-item">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="fs-14 text-black fw-medium lh-20">Featured Image</label>
                            <div class="file-upload-wrap file-upload-layout-2">
                                <input type="file" name="files[]" class="multi file-upload-input" multiple>
                                <span class="file-upload-text d-flex align-items-center justify-content-center"><i class="la la-cloud-upload mr-2 fs-24"></i>Drop files here or click to upload.</span>
                            </div>
                        </div><!-- end form-group -->
                    </div><!-- end card-body -->
                </div>
            </div><!-- end col-lg-4 -->
        </form>
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