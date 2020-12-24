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
        موسسه کنکور 7 استاد
    </div>

    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class="ti-align-left"></i>
        </div>
    <?php
    $user = \Illuminate\Support\Facades\Auth::user();
    ?>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center">
            <div class="dashboard-clock ltr">
                                <span>
                                    <?php
                                    $v = new Verta(); //1396-02-02 15:32:08
                                    echo $v->format('Y/n/j');
                                    ?>
                                </span>
                <ul class="d-flex align-items-center justify-content-end">
                    <li id="hours">12</li>
                    <li>:</li>
                    <li id="min">10</li>
                    <li>:</li>
                    <li id="sec">14</li>
                </ul>
            </div>

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if($user->gender == "man")
                        <img class="chat-img mr-2" src="/img/member-img/3.png" alt="">
                    @else
                        <img class="chat-img mr-2" src="/img/member-img/4.png" alt="">
                    @endif
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <div class="user-profile-heading">
                            <!-- Thumb -->
                            <div class="profile-img">
                                @if($user->gender == "man")
                                    <img class="chat-img mr-2" src="/img/member-img/3.png" alt="">
                                @else
                                    <img class="chat-img mr-2" src="/img/member-img/4.png" alt="">
                                @endif
                            </div>
                            <!-- Profile Text -->
                            <div class="profile-text">
                                <h6>{{ $user->name }}</h6>
                                <span>
                                    @if($user->user_type == 'admin')
                                        مدیریت
                                    @else
                                        مشاور
                                    @endif
                                </span>
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
