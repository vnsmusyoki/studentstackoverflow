<?php

require('student-account.php');
?>
<?php $message = $update_bio = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Student | Dashboard</title>

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
    <section class="user-details-area pt-30px pb-60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab">
                            <div class="user-panel-main-bar">
                                <div class="user-panel mb-30px">
                                    <p class="pb-2"><?php echo $userbio; ?></p>
                                    
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-30px pt-30px border-top border-top-gray">
                                    <ul class="generic-list-item generic-list-item-bullet">
                                        <li class="pl-3"><a href="#" class="d-inline-block">ardensmith.com</a></li>
                                        <li class="pl-3"><a href="#" class="d-inline-block">Facebook</a></li>
                                        <li class="pl-3"><a href="#" class="d-inline-block">Twitter</a></li>
                                        <li class="pl-3"><a href="#" class="d-inline-block">Instagram</a></li>
                                    </ul>
                                </div><!-- end user-panel -->
                                <form method="post" class="card-body" action="">
                                    <?php
                                    if (isset($_POST['submitquiz'])) {
                                        require 'functions/edit-profile.php';
                                    }
                                    ?>
                                    <?php echo $message; ?> 
                                    <div class="input-box">
                                        <label class="fs-14 text-black fw-medium mb-0">Update Bio</label>
                                        <div class="form-group">
                                            <textarea class="form-control form--control user-text-editor" rows="10" cols="40" name="update_bio"><?php echo $update_bio; ?></textarea>
                                            <div class="d-flex align-items-center pt-2">
                                            </div>
                                        </div>
                                    </div><!-- end input-box -->

                                    <div class="input-box pt-2">

                                        <div class="btn-box">
                                            <button type="submit" class="btn theme-btn" name="submitquiz">Update Bio</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="user-panel mb-30px">
                                    <div class="row">
                                        <div class="col-lg-4 responsive-column-half">
                                            <div class="media media-card align-items-center shadow-none border border-gray p-3">
                                                <div class="icon-element icon-element-sm mr-3 bg-1">
                                                    <svg class="svg-icon-color-white" width="25" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-19 0 136 136.54819">
                                                        <g id="surface1">
                                                            <path d="M 21.710938 27.703125 L 76.128906 27.703125 C 77.15625 27.703125 77.988281 26.867188 77.988281 25.839844 C 77.988281 24.808594 77.15625 23.972656 76.128906 23.972656 L 21.710938 23.972656 C 20.679688 23.972656 19.84375 24.808594 19.84375 25.839844 C 19.84375 26.867188 20.679688 27.703125 21.710938 27.703125 Z M 21.710938 27.703125 " />
                                                            <path d="M 0.273438 18.625 L 0.273438 130.699219 C 0.285156 133.925781 2.898438 136.539062 6.121094 136.546875 L 91.710938 136.546875 C 94.941406 136.539062 97.554688 133.925781 97.558594 130.699219 L 97.558594 18.625 C 97.554688 15.394531 94.941406 12.78125 91.710938 12.777344 L 63.289062 12.777344 C 62.351562 4.839844 55.160156 -0.835938 47.222656 0.101562 C 40.574219 0.882812 35.332031 6.128906 34.546875 12.777344 L 6.121094 12.777344 C 2.894531 12.78125 0.277344 15.394531 0.273438 18.625 Z M 93.816406 130.699219 C 93.816406 131.867188 92.871094 132.8125 91.703125 132.8125 L 6.121094 132.8125 C 4.953125 132.8125 4.007812 131.867188 4.007812 130.699219 L 4.007812 36.6875 L 93.832031 36.6875 Z M 48.917969 3.695312 C 54.207031 3.703125 58.695312 7.554688 59.519531 12.777344 L 38.367188 12.777344 C 39.183594 7.574219 43.648438 3.726562 48.917969 3.695312 Z M 91.710938 16.503906 C 92.882812 16.503906 93.832031 17.457031 93.832031 18.625 L 93.832031 32.953125 L 4.007812 32.953125 L 4.007812 18.625 C 4.007812 17.457031 4.953125 16.503906 6.121094 16.503906 Z M 91.710938 16.503906 " />
                                                            <path d="M 37.96875 57.25 L 82.085938 57.25 C 83.113281 57.25 83.949219 56.414062 83.949219 55.386719 C 83.949219 54.351562 83.113281 53.519531 82.085938 53.519531 L 37.96875 53.519531 C 36.9375 53.519531 36.105469 54.351562 36.105469 55.386719 C 36.105469 56.414062 36.9375 57.25 37.96875 57.25 Z M 37.96875 57.25 " />
                                                            <path d="M 37.96875 76.722656 L 82.085938 76.722656 C 83.113281 76.722656 83.949219 75.886719 83.949219 74.855469 C 83.949219 73.824219 83.113281 72.988281 82.085938 72.988281 L 37.96875 72.988281 C 36.9375 72.988281 36.105469 73.824219 36.105469 74.855469 C 36.105469 75.886719 36.9375 76.722656 37.96875 76.722656 Z M 37.96875 76.722656 " />
                                                            <path d="M 37.96875 96.179688 L 82.085938 96.179688 C 83.113281 96.179688 83.949219 95.339844 83.949219 94.3125 C 83.949219 93.28125 83.113281 92.445312 82.085938 92.445312 L 37.96875 92.445312 C 36.9375 92.445312 36.105469 93.28125 36.105469 94.3125 C 36.105469 95.339844 36.9375 96.179688 37.96875 96.179688 Z M 37.96875 96.179688 " />
                                                            <path d="M 37.96875 115.632812 L 82.085938 115.632812 C 83.113281 115.632812 83.949219 114.800781 83.949219 113.765625 C 83.949219 112.738281 83.113281 111.90625 82.085938 111.90625 L 37.96875 111.90625 C 36.9375 111.90625 36.105469 112.738281 36.105469 113.765625 C 36.105469 114.800781 36.9375 115.632812 37.96875 115.632812 Z M 37.96875 115.632812 " />
                                                            <path d="M 19.359375 58.292969 C 19.652344 58.710938 20.101562 58.988281 20.601562 59.066406 L 20.878906 59.066406 C 21.289062 59.066406 21.691406 58.925781 22.023438 58.667969 L 33.910156 49.378906 C 34.804688 48.859375 35.109375 47.71875 34.59375 46.828125 C 34.078125 45.933594 32.9375 45.628906 32.046875 46.148438 C 31.890625 46.234375 31.75 46.347656 31.625 46.476562 L 21.285156 54.566406 L 19.480469 51.992188 C 18.890625 51.148438 17.726562 50.9375 16.882812 51.53125 C 16.039062 52.121094 15.828125 53.285156 16.421875 54.128906 Z M 19.359375 58.292969 " />
                                                            <path d="M 19.359375 77.476562 C 19.652344 77.894531 20.101562 78.175781 20.601562 78.253906 L 20.878906 78.253906 C 21.289062 78.25 21.691406 78.109375 22.023438 77.851562 L 33.910156 68.558594 C 34.746094 67.949219 34.921875 66.78125 34.308594 65.949219 C 33.699219 65.121094 32.53125 64.941406 31.699219 65.558594 C 31.671875 65.578125 31.640625 65.601562 31.613281 65.625 L 21.285156 73.722656 L 19.480469 71.148438 C 19.019531 70.226562 17.898438 69.851562 16.980469 70.308594 C 16.058594 70.769531 15.683594 71.890625 16.144531 72.816406 C 16.21875 72.960938 16.308594 73.101562 16.421875 73.222656 Z M 19.359375 77.476562 " />
                                                            <path d="M 19.359375 96.714844 C 19.652344 97.128906 20.101562 97.40625 20.601562 97.484375 L 20.878906 97.484375 C 21.289062 97.484375 21.691406 97.34375 22.023438 97.085938 L 33.910156 87.792969 C 34.746094 87.179688 34.921875 86.011719 34.308594 85.183594 C 33.699219 84.351562 32.53125 84.179688 31.699219 84.789062 C 31.671875 84.8125 31.640625 84.832031 31.613281 84.855469 L 21.273438 92.929688 L 19.472656 90.355469 C 18.878906 89.511719 17.714844 89.304688 16.871094 89.894531 C 16.023438 90.488281 15.820312 91.652344 16.410156 92.496094 Z M 19.359375 96.714844 " />
                                                            <path d="M 19.359375 116.171875 C 19.652344 116.585938 20.101562 116.867188 20.601562 116.945312 L 20.878906 116.945312 C 21.289062 116.9375 21.691406 116.796875 22.023438 116.546875 L 33.910156 107.25 C 34.785156 106.703125 35.046875 105.546875 34.5 104.675781 C 33.945312 103.800781 32.792969 103.546875 31.921875 104.09375 C 31.816406 104.160156 31.714844 104.238281 31.625 104.328125 L 21.285156 112.414062 L 19.480469 109.839844 C 18.890625 108.992188 17.726562 108.789062 16.882812 109.378906 C 16.039062 109.96875 15.828125 111.132812 16.421875 111.976562 Z M 19.359375 116.171875 " />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="fw-medium">1,979</h5>
                                                    <p class="fs-15">Answers</p>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column-half">
                                            <div class="media media-card align-items-center shadow-none border border-gray p-3">
                                                <div class="icon-element icon-element-sm mr-3 bg-2">
                                                    <svg class="svg-icon-color-white" width="25" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path d="M405.333,42.667h-44.632c-4.418-12.389-16.147-21.333-30.035-21.333h-32.229C288.417,8.042,272.667,0,256,0
                                                                    s-32.417,8.042-42.438,21.333h-32.229c-13.888,0-25.617,8.944-30.035,21.333h-44.631C83.146,42.667,64,61.802,64,85.333v384
                                                                    C64,492.865,83.146,512,106.667,512h298.667C428.854,512,448,492.865,448,469.333v-384C448,61.802,428.854,42.667,405.333,42.667
                                                                    z M170.667,53.333c0-5.885,4.792-10.667,10.667-10.667h37.917c3.792,0,7.313-2.021,9.208-5.302
                                                                    c5.854-10.042,16.146-16.031,27.542-16.031s21.688,5.99,27.542,16.031c1.896,3.281,5.417,5.302,9.208,5.302h37.917
                                                                    c5.875,0,10.667,4.781,10.667,10.667V64c0,11.76-9.563,21.333-21.333,21.333H192c-11.771,0-21.333-9.573-21.333-21.333V53.333z
                                                                     M426.667,469.333c0,11.76-9.563,21.333-21.333,21.333H106.667c-11.771,0-21.333-9.573-21.333-21.333v-384
                                                                    c0-11.76,9.563-21.333,21.333-21.333h42.667c0,23.531,19.146,42.667,42.667,42.667h128c23.521,0,42.667-19.135,42.667-42.667
                                                                    h42.667c11.771,0,21.333,9.573,21.333,21.333V469.333z" />
                                                                    <path d="M160,170.667c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                                                    C192,185.021,177.646,170.667,160,170.667z M160,213.333c-5.875,0-10.667-4.781-10.667-10.667
                                                                    c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667C170.667,208.552,165.875,213.333,160,213.333z" />
                                                                    <path d="M160,277.333c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                                                    C192,291.688,177.646,277.333,160,277.333z M160,320c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667
                                                                    s10.667,4.781,10.667,10.667C170.667,315.219,165.875,320,160,320z" />
                                                                    <path d="M160,384c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32C192,398.354,177.646,384,160,384z
                                                                     M160,426.667c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667
                                                                    C170.667,421.885,165.875,426.667,160,426.667z" />
                                                                    <path d="M373.333,192h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                                                    c5.896,0,10.667-4.771,10.667-10.667C384,196.771,379.229,192,373.333,192z" />
                                                                    <path d="M373.333,298.667h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                                                    c5.896,0,10.667-4.771,10.667-10.667C384,303.438,379.229,298.667,373.333,298.667z" />
                                                                    <path d="M373.333,405.333h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                                                    c5.896,0,10.667-4.771,10.667-10.667C384,410.104,379.229,405.333,373.333,405.333z" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="fw-medium">11</h5>
                                                    <p class="fs-15">Questions</p>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column-half">
                                            <div class="media media-card align-items-center shadow-none border border-gray p-3">
                                                <div class="icon-element icon-element-sm mr-3 bg-3">
                                                    <svg class="svg-icon-color-white" viewBox="0 0 24 24" width="25" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m11.861 19.066c-.128 0-.256-.049-.354-.146l-6.427-6.427c-.188-.188-.196-.489-.02-.687l4.817-5.396c3.367-3.939 8.85-6.488 13.631-6.407.267.006.482.221.488.488.111 4.784-2.467 10.264-6.416 13.638l-5.387 4.81c-.094.085-.214.127-.332.127zm-5.74-6.946 5.759 5.759 5.043-4.502c3.606-3.082 6.001-7.994 6.075-12.375-4.381.073-9.292 2.468-12.368 6.066z" />
                                                        <path d="m13.776 22.726c-.048 0-.097-.007-.143-.022-.18-.06-.328-.198-.354-.386l-.686-4.787c-.039-.273.151-.526.424-.566.273-.043.526.15.566.424l.536 3.74c1.752-2.095 2.726-4.751 2.726-7.459 0-.276.224-.5.5-.5s.5.224.5.5c0 3.313-1.342 6.556-3.682 8.895-.1.1-.246.161-.387.161z" />
                                                        <path d="m6.541 11.412c-.023 0-.047-.001-.071-.005l-4.787-.686c-.188-.027-.345-.158-.404-.339-.059-.18-.011-.379.124-.512 2.373-2.373 5.615-3.715 8.928-3.715.276 0 .5.224.5.5s-.224.5-.5.5c-2.721 0-5.391.983-7.464 2.725l3.745.537c.273.04.463.292.424.566-.037.249-.251.429-.495.429z" />
                                                        <path d="m17.133 9.366c-.641 0-1.281-.244-1.768-.731-.974-.975-.974-2.561 0-3.536.975-.975 2.561-.975 3.536 0 .974.975.974 2.561 0 3.536-.488.488-1.128.731-1.768.731zm0-3.998c-.384 0-.769.146-1.061.438-.584.585-.584 1.537 0 2.122.585.584 1.537.583 2.122 0 .584-.585.584-1.537 0-2.122-.293-.291-.677-.438-1.061-.438zm1.414 2.914h.01z" />
                                                        <path d="m.5 24c-.131 0-.258-.051-.354-.146-.13-.13-.178-.321-.125-.497.164-.547 1.633-5.381 2.703-6.451 1.205-1.205 3.166-1.206 4.371 0 1.205 1.205 1.205 3.166 0 4.371-1.07 1.07-5.904 2.539-6.451 2.703-.048.013-.096.02-.144.02zm4.41-6.999c-.536 0-1.071.204-1.479.611-.577.578-1.537 3.159-2.171 5.128 1.968-.634 4.55-1.594 5.127-2.171.815-.815.815-2.142 0-2.957-.407-.407-.942-.611-1.477-.611z" />
                                                    </svg>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="fw-medium">~46.3m</h5>
                                                    <p class="fs-15">People reached</p>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                    </div><!-- end row -->
                                </div><!-- end user-panel -->

                                <div class="user-panel mb-30px">
                                    <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                        <h3 class="fs-17">Top posts <span>(865)</span></h3>
                                        <div class="filter-option-box w-100px lh-1">
                                            <select class="select-container">
                                                <option selected="selected" value="Votes">Votes</option>
                                                <option value="Newest">Newest</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="vertical-list">
                                        <div class="item p-0">
                                            <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                <div class="votes py-2 answered-accepted">
                                                    <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                        <span class="vote-counts">6475</span>
                                                        <span class="vote-icon"></span>
                                                    </div>
                                                    <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                        <span class="vote-counts">22</span>
                                                        <span class="answer-icon"></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h5><a href="question-details.html">How to make Git “forget” about a file that was tracked but is now in .gitignore?</a></h5>
                                                    <small class="meta">
                                                        <span>May 12 '20</span>
                                                    </small>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end item -->
                                        <div class="item p-0">
                                            <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                <div class="votes py-2 answered-accepted">
                                                    <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                        <span class="vote-counts">4711</span>
                                                        <span class="vote-icon"></span>
                                                    </div>
                                                    <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                        <span class="vote-counts">-2</span>
                                                        <span class="answer-icon"></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h5><a href="question-details.html">Undoing a git rebase</a></h5>
                                                    <small class="meta">
                                                        <span>May 12 '20</span>
                                                    </small>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end item -->
                                        <div class="item p-0">
                                            <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                <div class="votes py-2 answered-accepted">
                                                    <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                        <span class="vote-counts">4448</span>
                                                        <span class="vote-icon"></span>
                                                    </div>
                                                    <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                        <span class="vote-counts">11</span>
                                                        <span class="answer-icon"></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h5><a href="question-details.html">Difference between “git add -A” and “git add .”</a></h5>
                                                    <small class="meta">
                                                        <span>May 12 '20</span>
                                                    </small>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end item -->
                                        <div class="item p-0">
                                            <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                <div class="votes py-2 answered-accepted">
                                                    <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                        <span class="vote-counts">3274</span>
                                                        <span class="vote-icon"></span>
                                                    </div>
                                                    <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                        <span class="vote-counts">33</span>
                                                        <span class="answer-icon"></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h5><a href="question-details.html">How to find and restore a deleted file in a Git repository</a></h5>
                                                    <small class="meta">
                                                        <span>May 12 '20</span>
                                                    </small>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end item -->
                                        <div class="item p-0">
                                            <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                <div class="votes py-2 answered-accepted">
                                                    <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                        <span class="vote-counts">2822</span>
                                                        <span class="vote-icon"></span>
                                                    </div>
                                                    <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                        <span class="vote-counts">11</span>
                                                        <span class="answer-icon"></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h5><a href="question-details.html">How to undo “git commit --amend” done instead of “git commit”</a></h5>
                                                    <small class="meta">
                                                        <span>May 12 '20</span>
                                                    </small>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end item -->
                                        <div class="item p-0">
                                            <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                <div class="votes py-2 answered-accepted">
                                                    <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                        <span class="vote-counts">2741</span>
                                                        <span class="vote-icon"></span>
                                                    </div>
                                                    <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                        <span class="vote-counts">33</span>
                                                        <span class="answer-icon"></span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h5><a href="question-details.html">Branch from a previous commit using Git</a></h5>
                                                    <small class="meta">
                                                        <span>May 12 '20</span>
                                                    </small>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end item -->
                                        <div class="view-more pt-3 px-3">
                                            <a href="#" class="btn-text fs-15">View all questions and answers <i class="la la-arrow-right icon ml-1"></i></a>
                                        </div>
                                    </div><!-- end vertical-list -->
                                </div><!-- end user-panel -->

                            </div><!-- end user-panel-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="user-activity" role="tabpanel" aria-labelledby="user-activity-tab">
                            <div class="user-panel-main-bar">
                                <div class="user-panel mb-40px">
                                    <div class="bg-gray p-3 rounded-rounded mb-3">
                                        <h3 class="fs-17">Reputation</h3>
                                    </div>
                                    <div class="media media-card align-items-center shadow-none border border-gray p-3 text-center">
                                        <div class="media-body">
                                            <h5 class="fw-medium">224,110</h5>
                                            <p class="fs-15">top 0.01% overall</p>
                                        </div>
                                    </div>
                                    <div class="user-stats d-flex flex-wrap align-items-center">
                                        <div class="stat flex-grow-1 my-1">
                                            <h4 class="fs-15 text-gray pb-2">Next tag badge:</h4>
                                            <span class="badge badge-md badge-gray"><span class="ball"></span> function-pointers</span>
                                        </div>
                                        <div class="stat text-center mr-3 my-1">
                                            <small class="d-block lh-15 pb-1">149/100 score</small>
                                            <div class="progress progress-slim bg-gray-2">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="stat text-center ml-0 my-1">
                                            <small class="d-block lh-15 pb-1">19/20 answers</small>
                                            <div class="progress progress-slim bg-gray-2">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-40px">
                                    <div class="bg-gray p-3 rounded-rounded mb-3">
                                        <h3 class="fs-17">Badges</h3>
                                    </div>
                                    <div class="badge-stats d-flex align-items-center mb-4 text-center">
                                        <div class="stat flex-grow-1">
                                            <span class="badge d-block mr-2 badge-md badge-gold" title="Gold"><span class="ball gold"></span> 91</span>
                                        </div>
                                        <div class="stat flex-grow-1">
                                            <span class="badge d-block mr-2 badge-md badge-gray" title="Silver"><span class="ball silver"></span> 560</span>
                                        </div>
                                        <div class="stat flex-grow-1">
                                            <span class="badge d-block badge-md badge-bronze" title="Bronze"><span class="ball"></span> 632</span>
                                        </div>
                                    </div><!-- end badge-stats -->
                                    <div class="user-stats d-flex align-items-center">
                                        <div class="stat flex-grow-1">
                                            <h4 class="fs-15 text-gray pb-2">Newest</h4>
                                            <a href="#" class="badge badge-md badge-dark"><span class="ball silver"></span> Good Answer</a>
                                        </div>
                                        <div class="stat flex-grow-1">
                                            <div class="d-flex align-items-center justify-content-between pb-2">
                                                <h4 class="fs-15 text-gray">Next badge</h4>
                                                <span class="count fs-14">72/80</span>
                                            </div>
                                            <div class="progress progress-fat">
                                                <div class="progress-bar bg-gray-2" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span class="text-black">Deputy</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-10px">
                                    <div class="bg-gray p-3 rounded-rounded mb-3">
                                        <h3 class="fs-17">Impact</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="media media-card align-items-center shadow-none border border-gray p-3 text-center">
                                                <div class="media-body">
                                                    <h5 class="fw-medium">~46.3m</h5>
                                                    <p class="fs-15">people reached</p>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3">
                                            <div class="media media-card align-items-center shadow-none border border-gray p-3 text-center">
                                                <div class="media-body">
                                                    <h5 class="fw-medium">122</h5>
                                                    <p class="fs-15">posts edited</p>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3">
                                            <div class="media media-card align-items-center shadow-none border border-gray p-3 text-center">
                                                <div class="media-body">
                                                    <h5 class="fw-medium">72</h5>
                                                    <p class="fs-15">helpful flags</p>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                        <div class="col-lg-3">
                                            <div class="media media-card align-items-center shadow-none border border-gray p-3 text-center">
                                                <div class="media-body">
                                                    <h5 class="fw-medium">1,351</h5>
                                                    <p class="fs-15">votes cast</p>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                    </div><!-- end row -->
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-40px">
                                    <div class="bg-gray p-3 rounded-rounded">
                                        <div class="filter-option-box w-20">
                                            <select class="select-container">
                                                <option value="summary" selected="">Summary</option>
                                                <option value="answers">Answers</option>
                                                <option value="questions">Questions</option>
                                                <option value="tags">Tags</option>
                                                <option value="badges">Badges</option>
                                                <option value="bookmarks">Bookmarks</option>
                                                <option value="bounties">Bounties</option>
                                                <option value="reputation">Reputation</option>
                                                <option value="activity">All actions</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="summary-panel">
                                        <div class="border-bottom border-bottom-gray p-3 d-flex align-items-center justify-content-between">
                                            <h4 class="fs-15 fw-regular">Answers <span>(1,979)</span></h4>
                                            <div class="filter-option-box flex-grow-1 d-flex align-items-center justify-content-end lh-1">
                                                <label class="fs-14 fw-medium mr-2 mb-0">Sort</label>
                                                <div class="w-100px">
                                                    <select class="select-container">
                                                        <option selected="selected" value="Votes">Votes</option>
                                                        <option value="Activity">Activity</option>
                                                        <option value="Newest">Newest</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-list">
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">999k</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">How to make Git “forget” about a file that was tracked but is now in .gitignore?</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">4714</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">Undoing a git rebase</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">4448</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">Difference between “git add -A” and “git add .”</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">3275</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">How to find and restore a deleted file in a Git repository</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">2822</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">Branch from a previous commit using Git</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="pager pt-30px">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination generic--pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-2">Showing 1-5 of (1,979) results</p>
                                            </div>
                                        </div>
                                    </div><!-- end summary-panel -->
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-40px">
                                    <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                        <h3 class="fs-17">Questions <span>(50)</span></h3>
                                        <div class="filter-option-box flex-grow-1 d-flex align-items-center justify-content-end lh-1">
                                            <label class="fs-14 fw-medium mr-2 mb-0">Sort</label>
                                            <div class="w-100px">
                                                <select class="select-container">
                                                    <option selected="selected" value="Votes">Votes</option>
                                                    <option value="Activity">Activity</option>
                                                    <option value="Newest">Newest</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-panel">
                                        <div class="vertical-list">
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">2653</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">What are the correct version numbers for C#?</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">563</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">Curious null-coalescing operator custom implicit conversion behaviour</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">363</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">What's your most controversial programming opinion?</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">336</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">Performance surprise with “as” and nullable types</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">322</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">What's the strangest corner case you've seen in C# or .NET? [closed]</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="pager pt-30px">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination generic--pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-2">Showing 1-5 of (50) results</p>
                                            </div>
                                        </div>
                                    </div><!-- end summary-panel -->
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-40px">
                                    <div class="bg-gray p-3 rounded-rounded">
                                        <h3 class="fs-17">Tags <span>(4,654)</span></h3>
                                    </div>
                                    <div class="summary-panel">
                                        <div class="vertical-list">
                                            <div class="item tags d-flex align-items-center">
                                                <span class="tag-stat mr-2 fs-14">244k</span>
                                                <div class="flex-grow-1">
                                                    <a href="#" class="tag-link tag-link-md tag-link-blue mb-0 lh-20">c#</a>
                                                </div>
                                                <span class="item-multiplier fs-14">
                                                    <span>×</span>
                                                    <span>19616</span>
                                                </span>
                                            </div><!-- item -->
                                            <div class="item tags d-flex align-items-center">
                                                <span class="tag-stat mr-2 fs-14">146k</span>
                                                <div class="flex-grow-1">
                                                    <a href="#" class="tag-link tag-link-md tag-link-blue mb-0 lh-20">java</a>
                                                </div>
                                                <span class="item-multiplier fs-14">
                                                    <span>×</span>
                                                    <span>10512</span>
                                                </span>
                                            </div><!-- item -->
                                            <div class="item tags d-flex align-items-center">
                                                <span class="tag-stat mr-2 fs-14">89k</span>
                                                <div class="flex-grow-1">
                                                    <a href="#" class="tag-link tag-link-md tag-link-blue mb-0 lh-20">.net</a>
                                                </div>
                                                <span class="item-multiplier fs-14">
                                                    <span>×</span>
                                                    <span>5569</span>
                                                </span>
                                            </div><!-- item -->
                                            <div class="item tags d-flex align-items-center">
                                                <span class="tag-stat mr-2 fs-14">34k</span>
                                                <div class="flex-grow-1">
                                                    <a href="#" class="tag-link tag-link-md tag-link-blue mb-0 lh-20">linq</a>
                                                </div>
                                                <span class="item-multiplier fs-14">
                                                    <span>×</span>
                                                    <span>2982</span>
                                                </span>
                                            </div><!-- item -->
                                            <div class="item tags d-flex align-items-center">
                                                <span class="tag-stat mr-2 fs-14">23k</span>
                                                <div class="flex-grow-1">
                                                    <a href="#" class="tag-link tag-link-md tag-link-blue mb-0 lh-20">string</a>
                                                </div>
                                                <span class="item-multiplier fs-14">
                                                    <span>×</span>
                                                    <span>999</span>
                                                </span>
                                            </div><!-- item -->
                                            <div class="pager pt-30px">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination generic--pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-2">Showing 1-5 of (4,654) results</p>
                                            </div>
                                        </div>
                                    </div><!-- end summary-panel -->
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-40px">
                                    <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                        <h3 class="fs-17">Badges <span>(765)</span></h3>
                                        <div class="filter-option-box flex-grow-1 d-flex align-items-center justify-content-end lh-1">
                                            <label class="fs-14 fw-medium mr-2 mb-0">Sort</label>
                                            <div class="w-100px">
                                                <select class="select-container">
                                                    <option selected="selected" value="Recent">Recent</option>
                                                    <option value="Class">Class</option>
                                                    <option value="Name">Name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-panel">
                                        <div class="vertical-list">
                                            <div class="item">
                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center mr-1"><span class="ball silver"></span> Good Answer</a>
                                                <span class="item-multiplier fs-14 fw-medium">
                                                    <span>×</span>
                                                    <span>4142</span>
                                                </span>
                                            </div><!-- item -->
                                            <div class="item">
                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center mr-1"><span class="ball"></span> Nice Answer</a>
                                                <span class="item-multiplier fs-14 fw-medium">
                                                    <span>×</span>
                                                    <span>586</span>
                                                </span>
                                            </div><!-- item -->
                                            <div class="item">
                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center mr-1"><span class="ball gold"></span> Great Answer</a>
                                                <span class="item-multiplier fs-14 fw-medium">
                                                    <span>×</span>
                                                    <span>1310</span>
                                                </span>
                                            </div><!-- item -->
                                            <div class="item">
                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center mr-1"><span class="ball silver"></span> Enlightened</a>
                                                <span class="item-multiplier fs-14 fw-medium">
                                                    <span>×</span>
                                                    <span>2863</span>
                                                </span>
                                            </div><!-- item -->
                                            <div class="item">
                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center mr-1"><span class="ball silver"></span> Guru</a>
                                                <span class="item-multiplier fs-14 fw-medium">
                                                    <span>×</span>
                                                    <span>131</span>
                                                </span>
                                            </div><!-- item -->
                                            <div class="pager pt-30px">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination generic--pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-2">Showing 1-5 of (765) results</p>
                                            </div>
                                        </div>
                                    </div><!-- end summary-panel -->
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-40px">
                                    <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                        <h3 class="fs-17">Followed posts <span>(20)</span></h3>
                                        <div class="filter-option-box flex-grow-1 d-flex align-items-center justify-content-end lh-1">
                                            <label class="fs-14 fw-medium mr-2 mb-0">Sort</label>
                                            <div class="w-100px">
                                                <select class="select-container">
                                                    <option value="Votes">Votes</option>
                                                    <option selected="selected" value="Activity">Activity</option>
                                                    <option value="Newest">Newest</option>
                                                    <option value="Views">Views</option>
                                                    <option value="Added">Added</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-panel">
                                        <div class="vertical-list">
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <svg aria-hidden="true" class="svg-icon ml-3 icon-question" width="18" height="18" viewBox="0 0 18 18">
                                                        <path fill="#7d848c" d="M4 14l-3 3V3c0-1.1.9-2 2-2h12a2 2 0 012 2v9a2 2 0 01-2 2H4zm7.75-3.97c.32-.37.55-.75.7-1.15.18-.51.28-1.11.28-1.79 0-1.29-.35-2.29-1.03-3a3.66 3.66 0 00-2.78-1.07 3.7 3.7 0 00-2.8 1.07c-.73.82-1.1 1.9-1.03 3 0 1.29.35 2.29 1.03 3a3.76 3.76 0 002.85 1.07c.62 0 1.2-.11 1.71-.34.65.44 1 .68 1.06.7.23.13.46.23.7.3l.59-1.13a5.2 5.2 0 01-1.28-.66zm-1.27-.9a5.4 5.4 0 00-1.5-.8l-.45.9c.33.12.66.29.98.5-.2.07-.42.11-.65.11-.61 0-1.12-.23-1.52-.68-.4-.46-.6-1.15-.6-2.07 0-.9.2-1.58.6-2.04a2 2 0 011.57-.67 2 2 0 011.58.67c.4.45.6 1.13.6 2.04 0 .44-.05.83-.16 1.17-.1.34-.25.63-.45.87z"></path>
                                                    </svg>
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">1203</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">git: undo all working dir changes including new files</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <svg aria-hidden="true" class="svg-icon ml-3 icon-answer" width="18" height="18" viewBox="0 0 18 18">
                                                        <path fill="#7d848c" d="M14 14H3a2 2 0 01-2-2V3c0-1.1.9-2 2-2h12a2 2 0 012 2v14l-3-3zm-1.02-3L9.82 3H8.14l-3.06 8h1.68l.65-1.79h3.15l.69 1.79h1.73zm-2.93-3.12H7.9l1.06-2.92 1.09 2.92z"></path>
                                                    </svg>
                                                    <div class="votes">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">1117</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">How to revert uncommitted changes including files and folders?</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <svg aria-hidden="true" class="svg-icon ml-3 icon-answer" width="18" height="18" viewBox="0 0 18 18">
                                                        <path fill="#7d848c" d="M14 14H3a2 2 0 01-2-2V3c0-1.1.9-2 2-2h12a2 2 0 012 2v14l-3-3zm-1.02-3L9.82 3H8.14l-3.06 8h1.68l.65-1.79h3.15l.69 1.79h1.73zm-2.93-3.12H7.9l1.06-2.92 1.09 2.92z"></path>
                                                    </svg>
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">76</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">Detected package downgrade warning (dotnet core, vs 2017)</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <svg aria-hidden="true" class="svg-icon ml-3 icon-answer" width="18" height="18" viewBox="0 0 18 18">
                                                        <path fill="#7d848c" d="M14 14H3a2 2 0 01-2-2V3c0-1.1.9-2 2-2h12a2 2 0 012 2v14l-3-3zm-1.02-3L9.82 3H8.14l-3.06 8h1.68l.65-1.79h3.15l.69 1.79h1.73zm-2.93-3.12H7.9l1.06-2.92 1.09 2.92z"></path>
                                                    </svg>
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">73</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">What is the difference between a variable, object, and reference? [duplicate]</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <svg aria-hidden="true" class="svg-icon ml-3 icon-question" width="18" height="18" viewBox="0 0 18 18">
                                                        <path fill="#7d848c" d="M4 14l-3 3V3c0-1.1.9-2 2-2h12a2 2 0 012 2v9a2 2 0 01-2 2H4zm7.75-3.97c.32-.37.55-.75.7-1.15.18-.51.28-1.11.28-1.79 0-1.29-.35-2.29-1.03-3a3.66 3.66 0 00-2.78-1.07 3.7 3.7 0 00-2.8 1.07c-.73.82-1.1 1.9-1.03 3 0 1.29.35 2.29 1.03 3a3.76 3.76 0 002.85 1.07c.62 0 1.2-.11 1.71-.34.65.44 1 .68 1.06.7.23.13.46.23.7.3l.59-1.13a5.2 5.2 0 01-1.28-.66zm-1.27-.9a5.4 5.4 0 00-1.5-.8l-.45.9c.33.12.66.29.98.5-.2.07-.42.11-.65.11-.61 0-1.12-.23-1.52-.68-.4-.46-.6-1.15-.6-2.07 0-.9.2-1.58.6-2.04a2 2 0 011.57-.67 2 2 0 011.58.67c.4.45.6 1.13.6 2.04 0 .44-.05.83-.16 1.17-.1.34-.25.63-.45.87z"></path>
                                                    </svg>
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">24</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">I've found a bug in the JIT/CLR - now how do I debug or reproduce it?</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="pager pt-30px">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination generic--pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-2">Showing 1-5 of (20) results</p>
                                            </div>
                                        </div>
                                    </div><!-- end summary-panel -->
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-40px">
                                    <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                        <h3 class="fs-17">Bookmarks <span>(12)</span></h3>
                                        <div class="filter-option-box flex-grow-1 d-flex align-items-center justify-content-end lh-1">
                                            <label class="fs-14 fw-medium mr-2 mb-0">Sort</label>
                                            <div class="w-100px">
                                                <select class="select-container">
                                                    <option value="Votes">Votes</option>
                                                    <option selected="selected" value="Activity">Activity</option>
                                                    <option value="Newest">Newest</option>
                                                    <option value="Views">Views</option>
                                                    <option value="Added">Added</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-panel">
                                        <div class="vertical-list">
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">1203</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">git: undo all working dir changes including new files</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">1117</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">How to revert uncommitted changes including files and folders?</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">76</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">Detected package downgrade warning (dotnet core, vs 2017)</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">73</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">What is the difference between a variable, object, and reference? [duplicate]</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item post p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block" title="Votes">
                                                            <span class="vote-counts">24</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="fs-15"><a href="question-details.html">I've found a bug in the JIT/CLR - now how do I debug or reproduce it?</a></h5>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="pager pt-30px">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination generic--pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-2">Showing 1-5 of (12) results</p>
                                            </div>
                                        </div>
                                    </div><!-- end summary-panel -->
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-40px">
                                    <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                        <h3 class="fs-17">Active bounties <span>(20)</span></h3>
                                        <div class="filter-option-box flex-grow-1 d-flex align-items-center justify-content-end lh-1">
                                            <label class="fs-14 fw-medium mr-2 mb-0">Sort</label>
                                            <div class="w-100px">
                                                <select class="select-container">
                                                    <option selected="selected" value="Active">Active</option>
                                                    <option value="Offered">Offered</option>
                                                    <option value="Earned">Earned</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-panel">
                                        <div class="vertical-list">
                                            <div class="item p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes">
                                                        <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                            <span class="vote-counts">6475</span>
                                                            <span class="vote-icon"></span>
                                                        </div>
                                                        <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                            <span class="vote-counts">22</span>
                                                            <span class="answer-icon"></span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5><a href="question-details.html" class="d-flex align-items-center"><span class="badge bg-12 mr-2 text-white">+100</span> How to make Git “forget” about a file that was tracked but is now in .gitignore?</a></h5>
                                                        <small class="meta">
                                                            <span class="pr-1">yesterday</span>
                                                            <a href="#" class="author">edublog</a>
                                                        </small>
                                                        <div class="tags">
                                                            <a href="#" class="tag-link">git</a>
                                                            <a href="#" class="tag-link">gitignore</a>
                                                        </div>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                            <span class="vote-counts">4711</span>
                                                            <span class="vote-icon"></span>
                                                        </div>
                                                        <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                            <span class="vote-counts">-2</span>
                                                            <span class="answer-icon"></span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5><a href="question-details.html" class="d-flex align-items-center"><span class="badge bg-12 mr-2 text-white">+500</span> Catching errors being thrown within module</a></h5>
                                                        <small class="meta">
                                                            <span class="pr-1">1 hour ago</span>
                                                            <a href="#" class="author">edublog</a>
                                                        </small>
                                                        <div class="tags">
                                                            <a href="#" class="tag-link">python</a>
                                                            <a href="#" class="tag-link">error-handling</a>
                                                            <a href="#" class="tag-link">gevent</a>
                                                        </div>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes answered-accepted">
                                                        <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                            <span class="vote-counts">4448</span>
                                                            <span class="vote-icon"></span>
                                                        </div>
                                                        <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                            <span class="vote-counts">11</span>
                                                            <span class="answer-icon"></span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5><a href="question-details.html" class="d-flex align-items-center"><span class="badge bg-12 mr-2 text-white">+200</span> Alien Dictionary Python</a></h5>
                                                        <small class="meta">
                                                            <span class="pr-1">2 days ago</span>
                                                            <a href="#" class="author">edublog</a>
                                                        </small>
                                                        <div class="tags">
                                                            <a href="#" class="tag-link">python</a>
                                                            <a href="#" class="tag-link">algorithm</a>
                                                            <a href="#" class="tag-link">graph</a>
                                                        </div>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes">
                                                        <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                            <span class="vote-counts">3274</span>
                                                            <span class="vote-icon"></span>
                                                        </div>
                                                        <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                            <span class="vote-counts">33</span>
                                                            <span class="answer-icon"></span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5><a href="question-details.html" class="d-flex align-items-center"><span class="badge bg-12 mr-2 text-white">+50</span> How to parse JS code into one-operation-per-line with fewest temp variables?</a></h5>
                                                        <small class="meta">
                                                            <span class="pr-1">May 12 '20</span>
                                                            <a href="#" class="author">edublog</a>
                                                        </small>
                                                        <div class="tags">
                                                            <a href="#" class="tag-link">javascript</a>
                                                            <a href="#" class="tag-link">compilation</a>
                                                            <a href="#" class="tag-link">register-allocation</a>
                                                        </div>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="item p-0">
                                                <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                    <div class="votes">
                                                        <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                            <span class="vote-counts">2822</span>
                                                            <span class="vote-icon"></span>
                                                        </div>
                                                        <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                            <span class="vote-counts">11</span>
                                                            <span class="answer-icon"></span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5><a href="question-details.html" class="d-flex align-items-center"><span class="badge bg-12 mr-2 text-white">+50</span> vue 3 Server Side Rendering with Vuex and Router</a></h5>
                                                        <small class="meta">
                                                            <span class="pr-1">May 12 '20</span>
                                                            <a href="#" class="author">edublog</a>
                                                        </small>
                                                        <div class="tags">
                                                            <a href="#" class="tag-link">vue.js</a>
                                                            <a href="#" class="tag-link">vuex</a>
                                                            <a href="#" class="tag-link">vuejs3</a>
                                                            <a href="#" class="tag-link">router</a>
                                                        </div>
                                                    </div>
                                                </div><!-- end media -->
                                            </div><!-- end item -->
                                            <div class="pager pt-30px">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination generic--pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-2">Showing 1-5 of (20) results</p>
                                            </div>
                                        </div>
                                    </div><!-- end summary-panel -->
                                </div><!-- end user-panel -->
                                <div class="user-panel mb-40px">
                                    <div class="bg-gray p-3 rounded-rounded">
                                        <h3 class="fs-17">Votes cast <span>(18,850)</span></h3>
                                    </div>
                                    <div class="summary-panel">
                                        <div class="vertical-list">
                                            <div class="item">
                                                <p class="fs-14">Of the votes cast, <span class="text-black">18,808</span> were upvotes and <span class="text-black">42</span> were downvotes. <span class="text-black">Arden Smith</span> voted on questions <span class="text-black">7,553</span> times and <span class="text-black">11,297</span> times on answers.</p>
                                            </div><!-- end item -->
                                            <div class="item">
                                                <p class="fs-14"><span class="text-black">50</span> votes in the last month</p>
                                            </div><!-- end item -->
                                            <div class="item">
                                                <p class="fs-14"><span class="text-black">62</span> votes in the last week</p>
                                            </div><!-- end item -->
                                            <div class="item">
                                                <p class="fs-14"><span class="text-black">1</span> vote in the last day</p>
                                            </div><!-- end item -->
                                        </div>
                                    </div><!-- end summary-panel -->
                                </div><!-- end user-panel -->
                            </div><!-- end user-panel-main-bar -->
                        </div><!-- end tab-pane -->
                    </div>
                </div><!-- end col-lg-9 -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="fs-17 pb-3">Number Achievement</h3>
                                <div class="divider"><span></span></div>
                                <div class="row no-gutters text-center">
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color">980k</span>
                                            <p class="fs-14">Questions</p>
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color-2">610k</span>
                                            <p class="fs-14">Answers</p>
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color-3">650k</span>
                                            <p class="fs-14">Answer accepted</p>
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color-4">320k</span>
                                            <p class="fs-14">Users</p>
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-12 pt-3">
                                        <p class="fs-14">To get answer of question <a href="signup.html" class="text-color hover-underline">Join<i class="la la-arrow-right ml-1"></i></a></p>
                                    </div>
                                </div><!-- end row -->
                            </div>
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="fs-17 pb-3">Trending Questions</h3>
                                <div class="divider"><span></span></div>
                                <div class="sidebar-questions pt-3">
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Using web3 to call precompile contract</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 mins ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">Sudhir Kumbhare</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Is it true while finding Time Complexity of the algorithm [closed]</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">48 mins ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">wimax</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">image picker and store them into firebase with flutter</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 hour ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">Antonin gavrel</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end sidebar-questions -->
                            </div>
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h3 class="fs-17 pb-3">Trending Tags</h3>
                                <div class="divider"><span></span></div>
                                <div class="tags pt-4">
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">analytics</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">computer</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">python</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">javascript</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">c#</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="collapse" id="showMoreTags">
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">java</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">swift</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">html</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">angular</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">flutter</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">machine-language</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                    </div><!-- end collapse -->
                                    <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags" role="button" aria-expanded="false" aria-controls="showMoreTags">
                                        <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                        <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end card -->
                        <div class="ad-card">
                            <h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
                            <div class="ad-banner mb-4 mx-auto">
                                <span class="ad-text">290x500</span>
                            </div>
                            <div class="ad-banner mb-4 ad-banner-2 mx-auto">
                                <span class="ad-text">290x300</span>
                            </div>
                        </div><!-- end ad-card -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end user-details-area -->
    <!--======================================
        END HERO AREA
======================================-->


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