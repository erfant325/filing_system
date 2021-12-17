<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow" role="navigation" data-menu="menu-wrapper">
    <div class="navbar-header d-xl-none d-block">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">
                    <div class="brand-logo"><img class="logo" src="<?= BASE_URL ?>view/superadmin/assets/images/logo/logo.png"></div>
                    <h2 class="brand-text mb-0" style="font-family: 'B Arshia'; font-size: 45px;">املاک تمدن</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <!-- Horizontal menu content-->
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <!-- include includes/mixins-->
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="menu-livicon" data-icon="desktop"></i><span data-i18n="Dashboard">صفحه اصلی</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>superadmin" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>صفحه اصلی</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="menu-livicon" data-icon="diagram"></i><span>عملیات</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>اپارتمان</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_add_sale_apartment" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>افزودن فایل فروش</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_add_rent_apartment" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>افزودن فایل اجاره</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ملک های تجاری</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_add_sale_commercial" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>افزودن فایل فروش</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_add_rent_commercial" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>افزودن فایل اجاره</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ملک های کلنگی</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_add_sale_old" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>افزودن فایل فروش</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_add_rent_old" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>افزودن فایل اجاره</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="menu-livicon" data-icon="box"></i><span>ارشیو فایل ها</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>اپارتمان</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_archive_sale_apartment" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های فروش</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_archive_rent_apartment" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های اجاره</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ملک های تجاری</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_archive_sale_commercial" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های فروش</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_archive_rent_commercial" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های اجاره</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ملک های کلنگی</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_archive_sale_old" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های فروش</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_archive_rent_old" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های اجاره</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="menu-livicon" data-icon="ban"></i><span>فایل های غیرفعال</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>اپارتمان</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_disable_sale_apartment" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های فروش</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_disable_rent_apartment" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های اجاره</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ملک های تجاری</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_disable_sale_commercial" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های فروش</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_disable_rent_commercial" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های اجاره</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item align-items-center dropdown-toggle" href="#" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>ملک های کلنگی</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_disable_sale_old" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های فروش</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item align-items-center" href="<?= BASE_URL ?>file_disable_rent_old" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>فایل های اجاره</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="menu-livicon" data-icon="users"></i><span data-i18n="Dashboard">مشتری ها</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li data-menu=""><a class="dropdown-item align-items-center" href="" data-toggle="dropdown"><i class="bx bx-left-arrow-alt"></i>لیست مشتری ها</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /horizontal menu content-->
</div>