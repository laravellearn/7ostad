<!-- Top Header Area -->
<header class="top-header-area d-flex align-items-center justify-content-between">
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <a href="dashboard.blade.php"><img src="/img/core-img/small-logo.png" alt="آرم موبایل"></a>
        </div>

        <!-- Triggers -->
        <div class="ecaps-triggers mr-1 mr-sm-3">
            <div class="menu-collasped" id="menuCollasped">
                <i class="zmdi zmdi-menu"></i>
            </div>
            <div class="mobile-menu-open" id="mobileMenuOpen">
                <i class="zmdi zmdi-menu"></i>
            </div>
        </div>
        سامانه مشاورین تحصیلی 7 استاد
    </div>

    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class="ti-align-left"></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center">
            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/img/member-img/3.png" alt=""></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <div class="user-profile-heading">
                            <!-- Thumb -->
                            <div class="profile-img">
                                <img class="chat-img mr-2" src="/img/member-img/3.png" alt="">
                            </div>
                            <!-- Profile Text -->
                            <div class="profile-text">
                                <h6>نام کاربر</h6>
                                <span>توسعه دهنده</span>
                            </div>
                        </div>
                        <a href="#" class="dropdown-item"><i class="zmdi zmdi-account profile-icon bg-primary" aria-hidden="true"></i> پروفایل من</a>
                        <!--                                    <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open profile-icon bg-success" aria-hidden="true"></i> پیام ها</a>-->
                        <!--                                    <a href="#" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon bg-info" aria-hidden="true"></i> تنظیمات حساب</a>-->
                        <!--                                    <a href="#" class="dropdown-item"><i class="zmdi zmdi-mouse profile-icon bg-danger" aria-hidden="true"></i> وظایف من</a>-->
                        <!--                                    <a href="#" class="dropdown-item"><i class="zmdi zmdi-wifi-alt profile-icon bg-purple" aria-hidden="true"></i> پشتیبانی</a>-->
                        <form action="{{ route('logout') }}" method="POST">
                            @CSRF
                            <button type="submit" class="dropdown-item"><i class="ti-unlink profile-icon bg-warning" aria-hidden="true"></i> خروج از سیستم</button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
