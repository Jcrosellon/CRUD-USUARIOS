<div class="navbar-custom">
                    <div class="topbar">
                        <div class="topbar-menu d-flex align-items-center gap-1">

                            <!-- Topbar Brand Logo -->
                            <div class="logo-box">
                                <!-- Brand Logo Light -->
                                <a href="index.html" class="logo-light">
                                    <img src="assets/images/logo-light.png" alt="logo" class="logo-lg">
                                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                                </a>

                                <!-- Brand Logo Dark -->
                                <a href="index.html" class="logo-dark">
                                    <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg">
                                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
                                </a>
                            </div>

                            <!-- Sidebar Menu Toggle Button -->
                            <button class="button-toggle-menu">
                                <i class="mdi mdi-menu"></i>
                            </button>

                            <!-- Dropdown Menu -->
                            <div class="dropdown d-none d-xl-block">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    Create New
                                    <i class="mdi mdi-chevron-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="fe-user me-1"></i>
                                        <span>Create Users</span>
                                    </a>
                                    <div class="dropdown-divider"></div>

                                </div>
                            </div>
                        </div>

                        <ul class="topbar-menu d-flex align-items-center">
                            <!-- Topbar Search Form -->
                            <li class="app-search dropdown me-3 d-none d-lg-block">
                                <form>
                                    <input type="search" class="form-control rounded-pill" placeholder="Search..." id="top-search">
                                    <span class="fe-search search-icon font-16"></span>
                                </form>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow mb-2">Found 22 results</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-home me-1"></i>
                                        <span>Analytics Report</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-aperture me-1"></i>
                                        <span>How can I help you?</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>User profile settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex align-items-start">
                                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                    <span class="font-12 mb-0">UI Designer</span>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="d-flex align-items-start">
                                                <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                                <div class="w-100">
                                                    <h5 class="m-0 font-14">Jacob Deo</h5>
                                                    <span class="font-12 mb-0">Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <!-- Fullscreen Button -->
                            <li class="d-none d-md-inline-block">
                                <a class="nav-link waves-effect waves-light" href="" data-toggle="fullscreen">
                                    <i class="fe-maximize font-22"></i>
                                </a>
                            </li>

                            <!-- Search Dropdown (for Mobile/Tablet) -->
                            <li class="dropdown d-lg-none">
                                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="ri-search-line font-22"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>

                            <!-- Notofication dropdown -->
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fe-bell font-22"></i>
                                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                    <small>Clear All</small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="px-1" style="max-height: 300px;" data-simplebar>

                                        <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                        <!-- item-->

                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-info">
                                                            <i class="mdi mdi-account-plus"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">New user registered</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                        <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon bg-primary">
                                                            <i class="mdi mdi-comment-account-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                            <div class="card-body">
                                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="notify-icon">
                                                            <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 text-truncate ms-2">
                                                        <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                        <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="text-center">
                                            <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                        </div>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <!-- Light/Dark Mode Toggle Button -->
                            <li class="d-none d-sm-inline-block">
                                <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                                    <i class="ri-moon-line font-22"></i>
                                </div>
                            </li>

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="data:image/jpeg;base64,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" alt="user-image" class="rounded-circle">
                                    <span class="ms-1 d-none d-md-inline-block">
                                        Jose Rosellon <i class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-lock"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                            <!-- Right Bar offcanvas button (Theme Customization Panel) -->
                            <li>
                                <a class="nav-link waves-effect waves-light" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                                    <i class="fe-settings font-22"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>