<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
    <div class="ecaps-sidemenu-area">
        <!-- Desktop Logo -->
        <div class="ecaps-logo">
            <a href="/admin"><img class="desktop-logo" src="/img/core-img/logo.png" alt="لوگوی دسک تاپ"> <img class="small-logo" src="/img/core-img/small-logo.png" alt="آرم موبایل"></a>
        </div>

        <!-- Side Nav -->
        <div class="ecaps-sidenav" id="ecapsSideNav">
            <!-- Side Menu Area -->
            <div class="side-menu-area">
                <!-- Sidebar Menu -->
                <nav>
                    <ul class="sidebar-menu" data-widget="tree">
                        <li {{ request()->is('admin') ? 'class=active' : '' }}><a href="/admin"><i class="zmdi zmdi-view-dashboard text-info"></i><span>داشبورد</span></a></li>
                        <li class="treeview <?php if ((request()->is('admin/students/create')) || (request()->is('admin/students'))) {
                                                echo "active menu-open";
                                            } ?>">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-account text-secondary"></i> <span>دانش آموزان</span> <i class="fa fa-angle-left"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('students.create') }}" {{ request()->is('admin/students/create') ? 'style=color:#007bff' : '' }}>افزودن دانش آموز</a></li>
                                <li><a href="{{ route('students.index') }}" {{ request()->is('admin/students') ? 'style=color:#007bff' : '' }}>لیست دانش آموزان</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php if ((request()->is('admin/users/create')) || (request()->is('admin/users'))) {
                                                echo "active menu-open";
                                            } ?>">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-account text-success"></i> <span>کاربران سیستم</span> <i class="fa fa-angle-left"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('users.create') }}" {{ request()->is('admin/users/create') ? 'style=color:#007bff' : '' }}>ثبت کاربر</a></li>
                                <li><a href="{{ route('users.index') }}" {{ request()->is('admin/users') ? 'style=color:#007bff' : '' }}>لیست کاربران</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php if ((request()->is('admin/grades')) || (request()->is('admin/studies')) || (request()->is('admin/lessongroups')) || (request()->is('admin/books')) || (request()->is('admin/topics'))) {
                                                echo "active menu-open";
                                            } ?>">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-book text-warning"></i> <span>مدیریت دروس</span> <i class="fa fa-angle-left"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('studies.index') }}" {{ request()->is('admin/studies') ? 'style=color:#007bff' : '' }}>رشته تحصیلی</a></li>
                                <li><a href="{{ route('grades.index') }}" {{ request()->is('admin/grades') ? 'style=color:#007bff' : '' }}>پایه تحصیلی</a></li>
                                <li><a href="{{ route('lessongroups.index') }}" {{ request()->is('admin/lessongroups') ? 'style=color:#007bff' : '' }}>گروه درسی</a></li>
                                <li><a href="{{ route('books.index') }}" {{ request()->is('admin/books') ? 'style=color:#007bff' : '' }}>کتاب</a></li>
                                <li><a href="{{ route('topics.index') }}" {{ request()->is('admin/topics') ? 'style=color:#007bff' : '' }}>مباحث</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php if ((request()->is('admin/targets')) || (request()->is('admin/subtargets'))) {
                                                echo "active menu-open";
                                            } ?>">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-archive text-info"></i> <span>برنامه هدف</span> <i class="fa fa-angle-left"></i></a>
                            <ul class="treeview-menu <?php if ((request()->is('admin/targets'))) {
                                                            echo "menu-open";
                                                        } ?>">
                                <li><a href="{{ route('targets.index') }}" {{ request()->is('admin/targets') ? 'style=color:#007bff' : '' }}>افزودن برنامه هدف</a></li>
                                <li><a href="{{ route('subtargets.index') }}" {{ request()->is('admin/subtargets') ? 'style=color:#007bff' : '' }}>افزودن درس به برنامه هدف</a></li>
                            </ul>
                        </li>
                        <li class="treeview <?php if ((request()->is('admin/operations'))) {
                                                echo "active menu-open";
                                            } ?>">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-archive text-success"></i> <span>برنامه ریزی</span> <i class="fa fa-angle-left"></i></a>
                            <ul class="treeview-menu <?php if ((request()->is('admin/operations'))) {
                                                            echo "menu-open";
                                                        } ?>">
                                <li><a href="{{ route('operations.index') }}" {{ request()->is('admin/operations') ? 'style=color:#007bff' : '' }}>عملکردها</a></li>
                                <li><a href="#">جدول برنامه ریزی</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="javascript:void(0)"><i class="zmdi zmdi-settings text-primary"></i> <span>تنظیمات</span> <i class="fa fa-angle-left"></i></a>
                            <ul class="treeview-menu">
                            <li><a href="{{ route('motivationals.index') }}" {{ request()->is('admin/motivationals') ? 'style=color:#007bff' : '' }}>سخنان انگیزشی</a></li>
                              
                            </ul>
                        </li>
                        <form action="{{ route('logout') }}" method="POST">
                            @CSRF

                            <li>
                                <a type="submit">
                                    <i class="zmdi zmdi-fullscreen-exit text-danger"></i>

                                    <span class="text-muted">خروج</span>
                                </a>
                            </li>

                        </form>
                    </ul>
                </nav>
            </div>
        </div>
    </div>