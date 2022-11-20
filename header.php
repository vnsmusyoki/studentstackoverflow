<header class="header-area bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="logo-box">
                        <a href="index.php" class="logo"><img src="images/logo.png" alt="logo" style="height:80px;"></a>
                        <div class="user-action">
                            <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Search">
                                <i class="la la-search"></i>
                            </div>
                            <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                <i class="la la-bars"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-2 -->
                <div class="col-lg-10">
                    <div class="menu-wrapper border-left border-left-gray pl-4 justify-content-end">
                        <nav class="menu-bar mr-auto">
                            <ul>
                                <li>
                                    <a href="index.php">Home </a>

                                </li>
                                <li class="is-mega-menu">
                                    <a href="posts.php">Posts </a>

                                </li>
                                <li>
                                    <a href="ask-question.php">Questions </a>
                                </li>
                                <li>
                                    <a href="profile.php">My  Account </a>
                                </li>
                                 
                            </ul><!-- end ul -->
                        </nav><!-- end main-menu -->
                        <form method="post" class="mr-4">
                            <div class="form-group mb-0">
                                <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Type your search words...">
                                <button class="form-btn" type="button"><i class="la la-search"></i></button>
                            </div>
                        </form>
                        <div class="nav-right-button">
                            <a href="sign-in.php" class="btn theme-btn theme-btn-outline mr-2">Login</a>
                            <a href="sign-up.php" class="btn theme-btn" >Sign up</a>
                        </div><!-- end nav-right-button -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-10 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="off-canvas-menu custom-scrollbar-styled">
            <div class="off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
            <ul class="generic-list-item off-canvas-menu-list pt-90px">
                <li>
                    <a href="index.php">Home</a>

                </li>
                <li>
                    <a href="posts.php">Posts</a>

                </li>
                <li>
                    <a href="ask-question.php">Questions</a>

                </li>
                <li>
                    <a href="profile.php">My Account </a>
                </li>
                 
            </ul>
            <div class="off-canvas-btn-box px-4 pt-5 text-center">
                <a href="sign-in.php" class="btn theme-btn theme-btn-sm theme-btn-outline" >Login</a>
                <span class="fs-15 fw-medium d-inline-block mx-2">Or</span>
                <a href="sign-up.php" class="btn theme-btn theme-btn-sm"> Sign up</a>
            </div>
        </div><!-- end off-canvas-menu -->
        <div class="mobile-search-form">
            <div class="d-flex align-items-center">
                <form method="post" class="flex-grow-1 mr-3">
                    <div class="form-group mb-0">
                        <input class="form-control form--control pl-40px" type="text" name="search" placeholder="Type your search words...">
                        <span class="la la-search input-icon"></span>
                    </div>
                </form>
                <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                    <i class="la la-times"></i>
                </div><!-- end off-canvas-menu-close -->
            </div>
        </div><!-- end mobile-search-form -->
        <div class="body-overlay"></div>
    </header><!-- end header-area -->
 