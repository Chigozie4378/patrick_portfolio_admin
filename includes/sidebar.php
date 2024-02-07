<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">

                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2 text-uppercase">admin</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Home Page</span></li>

                    <!-- User interface -->
                    <li class="menu-item <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/carousel.php') || ($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/introduction.php')) {
                                                echo "active";
                                            } ?>">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="User interface">Home</div>
                        </a>
                        <ul class="menu-sub">


                            <li class="menu-item <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/carousel.php')) {
                                                        echo "active";
                                                    } ?>">
                                <a href="carousel.php" class="menu-link">
                                    <div data-i18n="Collapse">Slider</div>
                                </a>
                            </li>


                            <li class="menu-item <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/introduction.php')) {
                                                        echo "active";
                                                    } ?>">
                                <a href="introduction.php" class="menu-link">
                                    <div data-i18n="Progress">Introduction</div>
                                </a>
                            </li>
                            <li class="menu-item <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/services.php')) {
                                                        echo "active";
                                                    } ?>">
                                <a href="services.php" class="menu-link">
                                    <div data-i18n="Progress">Services</div>
                                </a>
                            </li>
                            <li class="menu-item <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/mission.php')) {
                                                        echo "active";
                                                    } ?>">
                                <a href="mission.php" class="menu-link">
                                    <div data-i18n="Progress">Mission</div>
                                </a>
                            </li>

                        </ul>
                    </li>



                    <!-- About -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">About Page</span></li>
                    <!-- Forms -->
                    <li class="menu-item  <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/about.php')) {
                                                echo "active";
                                            } ?> open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Elements">About</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item  <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/about.php')) {
                                                        echo "active";
                                                    } ?>">
                                <a href="about.php" class="menu-link">
                                    <div data-i18n="about.php">About Us</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- Services -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Services Page</span></li>
                    <!-- Forms -->
                    <li class="menu-item  <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/big_data.php') || ($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/warehouse.php') || ($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/data_analysis.php')) {
                                                echo "active";
                                            } ?> open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Elements">Services</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item  <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/big_data.php')) {
                                                        echo "active";
                                                    } ?>">
                                <a href="big_data.php" class="menu-link">
                                    <div data-i18n="big_data.php">Big Data</div>
                                </a>
                            </li>
                            <li class="menu-item  <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/warehouse.php')) {
                                                        echo "active";
                                                    } ?>">
                                <a href="warehouse.php" class="menu-link">
                                    <div data-i18n="warehouse.php">Data Warehouse</div>
                                </a>
                            </li>
                            <li class="menu-item  <?php if (($_SERVER['PHP_SELF'] == '/patrick_portfolio_admin/views/data_analysis.php')) {
                                                        echo "active";
                                                    } ?>">
                                <a href="data_analysis.php" class="menu-link">
                                    <div data-i18n="data_analysis.php">Data Analysis</div>
                                </a>
                            </li>

                        </ul>
                    </li>



                </ul>
            </aside>
            <!-- / Menu -->