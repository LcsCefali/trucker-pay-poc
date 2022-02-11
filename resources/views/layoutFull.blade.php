<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/fullcalendar.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="css/vendor/select2.min.css" />
    <link rel="stylesheet" href="css/vendor/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="css/vendor/dropzone.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/nouislider.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-stars.css" />
    <link rel="stylesheet" href="css/vendor/cropper.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="search" data-search-path="Pages.Search.html?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div>

            <a class="btn btn-sm btn-outline-primary ml-3 d-none d-md-inline-block"
                href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a>
        </div>

        <a class="navbar-logo" href="Dashboard.Default.html">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">

                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1" 
                        data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>

                <div class="position-relative d-none d-sm-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-equalizer d-block"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-male-female d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-puzzle d-block"></i>
                            <span>Components</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-bar-chart-4 d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-file d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                        <div class="scroll">
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/profiles/l-2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/1.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 ">
                                <a href="#">
                                    <img src="img/notifications/3.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                        </p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Sarah Kortney</span>
                    <span>
                        <img alt="Profile Picture" src="img/profiles/l-1.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Features</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <a class="dropdown-item" href="#">Sign out</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li>
                        <a href="#dashboard">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="#layouts">
                            <i class="iconsminds-digital-drawing"></i> Pages
                        </a>
                    </li>
                    <li>
                        <a href="#applications">
                            <i class="iconsminds-air-balloon-1"></i> Applications
                        </a>
                    </li>
                    <li class="active">
                        <a href="#ui">
                            <i class="iconsminds-pantone"></i> UI
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                            <i class="iconsminds-three-arrow-fork"></i> Menu
                        </a>
                    </li>
                    <li>
                        <a href="Blank.Page.html">
                            <i class="iconsminds-bucket"></i> Blank Page
                        </a>
                    </li>
                    <li>
                        <a href="https://dore-jquery-docs.coloredstrategies.com" target="_blank">
                            <i class="iconsminds-library"></i> Docs
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li>
                        <a href="Dashboard.Default.html">
                            <i class="simple-icon-rocket"></i> <span class="d-inline-block">Default</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Analytics.html">
                            <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Ecommerce.html">
                            <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Ecommerce</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Content.html">
                            <i class="simple-icon-doc"></i> <span class="d-inline-block">Content</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Authorization</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Auth.Login.html">
                                        <i class="simple-icon-user-following"></i> <span
                                            class="d-inline-block">Login</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Auth.Register.html">
                                        <i class="simple-icon-user-follow"></i> <span
                                            class="d-inline-block">Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Auth.ForgotPassword.html">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Forgot
                                            Password</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true"
                            aria-controls="collapseProduct" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Product</span>
                        </a>
                        <div id="collapseProduct" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Product.List.html">
                                        <i class="simple-icon-credit-card"></i> <span class="d-inline-block">Data
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Thumbs.html">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Thumb
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Images.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Image
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Detail.html">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="true"
                            aria-controls="collapseProfile" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Profile</span>
                        </a>
                        <div id="collapseProfile" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Profile.Social.html">
                                        <i class="simple-icon-share"></i> <span class="d-inline-block">Social</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Profile.Portfolio.html">
                                        <i class="simple-icon-link"></i> <span class="d-inline-block">Portfolio</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true"
                            aria-controls="collapseBlog" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Blog</span>
                        </a>
                        <div id="collapseBlog" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Blog.html">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Blog.Detail.html">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Blog.Detail.Alt.html">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Detail
                                            Alt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMisc" aria-expanded="true"
                            aria-controls="collapseMisc" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Miscellaneous</span>
                        </a>
                        <div id="collapseMisc" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Misc.Coming.Soon.html">
                                        <i class="simple-icon-hourglass"></i> <span class="d-inline-block">Coming
                                            Soon</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Error.html">
                                        <i class="simple-icon-exclamation"></i> <span
                                            class="d-inline-block">Error</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Faq.html">
                                        <i class="simple-icon-question"></i> <span class="d-inline-block">Faq</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Invoice.html">
                                        <i class="simple-icon-bag"></i> <span class="d-inline-block">Invoice</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Knowledge.Base.html">
                                        <i class="simple-icon-graduation"></i> <span class="d-inline-block">Knowledge
                                            Base</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Mailing.html">
                                        <i class="simple-icon-envelope-open"></i> <span
                                            class="d-inline-block">Mailing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Pricing.html">
                                        <i class="simple-icon-diamond"></i> <span class="d-inline-block">Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Search.html">
                                        <i class="simple-icon-magnifier"></i> <span class="d-inline-block">Search</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="applications">
                    <li>
                        <a href="Apps.MediaLibrary.html">
                            <i class="simple-icon-picture"></i> <span class="d-inline-block">Library</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Todo.List.html">
                            <i class="simple-icon-check"></i> <span class="d-inline-block">Todo</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Survey.List.html">
                            <i class="simple-icon-calculator"></i> <span class="d-inline-block">Survey</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Chat.html">
                            <i class="simple-icon-bubbles"></i> <span class="d-inline-block">Chat</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="ui">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true"
                            aria-controls="collapseForms" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Forms</span>
                        </a>
                        <div id="collapseForms" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li class="active">
                                    <a href="Ui.Forms.Components.html">
                                        <i class="simple-icon-event"></i> <span class="d-inline-block">Components</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Layouts.html">
                                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Layouts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Validation.html">
                                        <i class="simple-icon-check"></i> <span class="d-inline-block">Validation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Wizard.html">
                                        <i class="simple-icon-magic-wand"></i> <span
                                            class="d-inline-block">Wizard</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseDataTables" aria-expanded="true"
                            aria-controls="collapseDataTables" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Datatables</span>
                        </a>
                        <div id="collapseDataTables" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Datatables.Rows.html">
                                        <i class="simple-icon-screen-desktop"></i> <span class="d-inline-block">Full
                                            Page UI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Scroll.html">
                                        <i class="simple-icon-mouse"></i> <span class="d-inline-block">Scrollable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Pagination.html">
                                        <i class="simple-icon-notebook"></i> <span
                                            class="d-inline-block">Pagination</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Default.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Default</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="true"
                            aria-controls="collapseComponents" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Components</span>
                        </a>
                        <div id="collapseComponents" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Components.Alerts.html">
                                        <i class="simple-icon-bell"></i> <span class="d-inline-block">Alerts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Badges.html">
                                        <i class="simple-icon-badge"></i> <span class="d-inline-block">Badges</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Buttons.html">
                                        <i class="simple-icon-control-play"></i> <span
                                            class="d-inline-block">Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Cards.html">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Cards</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="Ui.Components.Carousel.html">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Carousel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Charts.html">
                                        <i class="simple-icon-chart"></i> <span class="d-inline-block">Charts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Collapse.html">
                                        <i class="simple-icon-arrow-up"></i> <span
                                            class="d-inline-block">Collapse</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Dropdowns.html">
                                        <i class="simple-icon-arrow-down"></i> <span
                                            class="d-inline-block">Dropdowns</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Editors.html">
                                        <i class="simple-icon-book-open"></i> <span
                                            class="d-inline-block">Editors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Icons.html">
                                        <i class="simple-icon-star"></i> <span class="d-inline-block">Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.InputGroups.html">
                                        <i class="simple-icon-note"></i> <span class="d-inline-block">Input
                                            Groups</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Jumbotron.html">
                                        <i class="simple-icon-screen-desktop"></i> <span
                                            class="d-inline-block">Jumbotron</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Modal.html">
                                        <i class="simple-icon-docs"></i> <span class="d-inline-block">Modal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Navigation.html">
                                        <i class="simple-icon-cursor"></i> <span
                                            class="d-inline-block">Navigation</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="Ui.Components.PopoverandTooltip.html">
                                        <i class="simple-icon-pin"></i> <span class="d-inline-block">Popover &
                                            Tooltip</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Sortable.html">
                                        <i class="simple-icon-shuffle"></i> <span class="d-inline-block">Sortable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Tables.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

                <ul class="list-unstyled" data-link="menu" id="menuTypes">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                            aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Types</span>
                        </a>
                        <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Menu.Default.html">
                                        <i class="simple-icon-control-pause"></i> <span
                                            class="d-inline-block">Default</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Subhidden.html">
                                        <i class="simple-icon-arrow-left mi-subhidden"></i> <span
                                            class="d-inline-block">Subhidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Hidden.html">
                                        <i class="simple-icon-control-start mi-hidden"></i> <span
                                            class="d-inline-block">Hidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Mainhidden.html">
                                        <i class="simple-icon-control-rewind mi-hidden"></i> <span
                                            class="d-inline-block">Mainhidden</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                            aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>
                        </a>
                        <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2"
                                        aria-expanded="true" aria-controls="collapseMenuLevel2"
                                        class="rotate-arrow-icon collapsed">
                                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another
                                            Level</span>
                                    </a>
                                    <div id="collapseMenuLevel2" class="collapse">
                                        <ul class="list-unstyled inner-level-menu">
                                            <li>
                                                <a href="#">
                                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                                        Level</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true"
                            aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                        </a>
                        <div id="collapseMenuDetached" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="dont-close-menu">
                            <a href="#">
                                <i class="simple-icon-arrow-right"></i> <span class="d-inline-block">Keep Sub Open</span>
                            </a>
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
    <main>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12">

                    <h1>Form Components</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>


                </div>
            </div>

            <div class="row">

                <div class="col-12">

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Custom Inputs</h5>


                            <h6>Checkbox</h6>
                            <div class="mb-4">
                                <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" id="customCheckThis">
                                    <label class="custom-control-label" for="customCheckThis">Check this custom
                                        checkbox</label>
                                </div>
                            </div>

                            <h6>Radios</h6>
                            <div class="mb-4">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Toggle this custom
                                        radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom
                                        radio</label>
                                </div>
                            </div>

                            <h6>Disabled</h6>
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckDisabled"
                                        disabled>
                                    <label class="custom-control-label" for="customCheckDisabled">Check this custom
                                        checkbox</label>
                                </div>

                                <div class="custom-control custom-radio">
                                    <input type="radio" id="radio3" name="radioDisabled" class="custom-control-input"
                                        disabled>
                                    <label class="custom-control-label">Toggle this custom radio</label>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Select 2</h5>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>State Single</label>
                                    <select class="form-control select2-single" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>

                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>
                                    </select>
                                </div>

                                <div class="col-sm-6">

                                    <label>State Multiple</label>
                                    <select class="form-control select2-multiple" multiple="multiple" data-width="100%">
                                        <option label="&nbsp;">&nbsp;</option>

                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                        <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                        <option value="TPZ">The Panic Zone</option>
                                        <option value="TTZ">The Twilight Zone</option>

                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Typeahead</h5>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group typeahead-container">
                                        <input type="text" class="form-control typeahead" name="query" id="query"
                                            placeholder="Start typing something to search..." data-provide="typeahead"
                                            autocomplete="off">
                                        <div class="input-group-append ">
                                            <button type="submit" class="btn btn-primary default">
                                                <i class="simple-icon-magnifier"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="mb-4">Date Picker</h5>
                                    <div class="form-group mb-3">
                                        <label>Date</label>
                                        <input class="form-control datepicker" placeholder="Date">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Date Range</label>
                                        <div class="input-daterange input-group" id="datepicker">
                                            <input type="text" class="input-sm form-control" name="start"
                                                placeholder="Start" />
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="input-sm form-control" name="end"
                                                placeholder="End" />
                                        </div>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label>Date Component</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text input-group-append input-group-addon">
                                                <i class="simple-icon-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="mb-4">Date Picker Embeded</h5>
                                    <div class="form-group">
                                        <div class="date-inline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Image Picker</h5>

                            <p class="mb-5">
                                This component is intended to be used as a bridge between library and forms to select
                                images.
                            </p>
                            <h6>Multiple Select</h6>

                            <div class="select-from-library-container mb-1">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-xl-4">
                                        <div class="select-from-library-button sfl-multiple mb-5"
                                            data-library-id="#libraryModal" data-count="-1">
                                            <div
                                                class="card d-flex flex-row mb-4 media-thumb-container justify-content-center align-items-center">
                                                Select from library
                                            </div>
                                        </div>


                                        <div class="selected-library-item sfl-selected-item mb-5">
                                            <div class="card d-flex flex-row media-thumb-container">
                                                <a class="d-flex align-self-center">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                        alt="uploaded image"
                                                        class="list-media-thumbnail responsive border-0 sfl-selected-item-image" />
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div
                                                        class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                                        <a class="w-100">
                                                            <p
                                                                class="list-item-heading mb-1 truncate sfl-selected-item-label">
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="pl-1 align-self-center">
                                                        <a href="#"
                                                            class="btn-link delete-library-item sfl-delete-item"><i
                                                                class="simple-icon-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <h6>Single Select</h6>

                            <div class="select-from-library-container mb-1">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-xl-4">
                                        <div class="select-from-library-button sfl-single mb-5"
                                            data-library-id="#libraryModal" data-count="1">
                                            <div
                                                class="card d-flex flex-row mb-4 media-thumb-container justify-content-center align-items-center">
                                                Select an item from library
                                            </div>
                                        </div>


                                        <div class="selected-library-item sfl-selected-item mb-5">
                                            <div class="card d-flex flex-row media-thumb-container">
                                                <a class="d-flex align-self-center">
                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                        alt="uploaded image"
                                                        class="list-media-thumbnail responsive border-0 sfl-selected-item-image" />
                                                </a>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div
                                                        class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                                        <a class="w-100">
                                                            <p
                                                                class="list-item-heading mb-1 truncate sfl-selected-item-label">
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="pl-1 align-self-center">
                                                        <a href="#"
                                                            class="btn-link delete-library-item sfl-delete-item"><i
                                                                class="simple-icon-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Dropzone</h5>
                            <form action="/file-upload">
                                <div class="dropzone">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Cropper</h5>
                            <label class="btn btn-outline-primary btn-upload" for="inputImage"
                                title="Upload image file">
                                <input type="file" class="sr-only" id="inputImage" name="file"
                                    accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                Select File
                            </label>
                            <div class="row">
                                <div class="col-4">
                                    <div id="cropperContainer">
                                        <img id="cropperImage" alt="Cropper Image"
                                            src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="cropper-preview"></div>
                                </div>
                                <div class="col-2">
                                    <div class="cropper-preview"></div>
                                </div>
                                <div class="col-1">
                                    <div class="cropper-preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Tags</h5>
                            <input data-role="tagsinput" type="text">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Switch</h5>
                            <div class="row">
                                <div class="col-12 col-xs-6">
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Primary</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-primary mb-2">
                                                <input class="custom-switch-input" id="switch" type="checkbox">
                                                <label class="custom-switch-btn" for="switch"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Secondary</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-secondary mb-2">
                                                <input class="custom-switch-input" id="switch2" type="checkbox" checked>
                                                <label class="custom-switch-btn" for="switch2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6">
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Primary Inverse</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-primary-inverse mb-2">
                                                <input class="custom-switch-input" id="switch3" type="checkbox" checked>
                                                <label class="custom-switch-btn" for="switch3"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Secondary Inverse</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-secondary-inverse mb-2">
                                                <input class="custom-switch-input" id="switch4" type="checkbox">
                                                <label class="custom-switch-btn" for="switch4"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-xs-6">
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Primary Small</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS" type="checkbox">
                                                <label class="custom-switch-btn" for="switchS"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Secondary Small</label>
                                        <div class="col-12">
                                            <div class="custom-switch custom-switch-secondary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS2" type="checkbox"
                                                    checked>
                                                <label class="custom-switch-btn" for="switchS2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6">
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Primary Inverse Small</label>
                                        <div class="col-12">
                                            <div
                                                class="custom-switch custom-switch-primary-inverse mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS3" type="checkbox"
                                                    checked>
                                                <label class="custom-switch-btn" for="switchS3"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <label class="col-12 col-form-label">Secondary Inverse Small</label>
                                        <div class="col-12">
                                            <div
                                                class="custom-switch custom-switch-secondary-inverse mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS4" type="checkbox">
                                                <label class="custom-switch-btn" for="switchS4"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Slider</h5>
                            <div class="row">
                                <div class="col-12 col-xs-6 mb-3">
                                    <div class="form-group mb-4">
                                        <label>Double Slider</label>
                                        <div>
                                            <div class="slider" id="doubleSlider"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 mb-3">
                                    <div class="form-group mb-4">
                                        <label>Single Slider</label>
                                        <div>
                                            <div class="slider" id="singleSlider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Rating</h5>
                            <div class="row">
                                <div class="col-12 col-xs-6">
                                    <div class="form-group mb-1">
                                        <label class="d-block">Readonly</label>
                                        <select class="rating" data-current-rating="5" data-readonly="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6">
                                    <div class="form-group mb-1">
                                        <label class="d-block">Empty</label>
                                        <select class="rating" data-current-rating="-1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Select from Library Modal -->
        <div class="modal fade modal-right select-from-library" id="libraryModal" tabindex="-1" role="dialog"
            aria-labelledby="libraryModal" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Select from Library</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body scroll pt-0 pb-0 mt-4 mb-4">
                        <div class="accordion" id="accordion">
                            <div class="mb-2">
                                <button class="btn btn-link p-0 folder-button-collapse" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="icon-container">
                                        <i class="simple-icon-arrow-down"></i>
                                    </span>
                                    <span class="folder-name">Cakes</span>
                                </button>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="list disable-text-selection">
                                        <div class="row">

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/chocolate-cake-thumb.jpg"
                                                data-path="img/products/chocolate-cake-thumb.jpg"
                                                data-label="chocolate-cake-thumb.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/chocolate-cake-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">chocolate-cake-thumb.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/marble-cake-thumb.jpg"
                                                data-path="img/products/marble-cake-thumb.jpg" data-label="marble-cake.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/marble-cake-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">marble-cake.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/fruitcake-thumb.jpg"
                                                data-path="img/products/fruitcake-thumb.jpg" data-label="fruitcake.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/fruitcake-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">fruitcake.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/fat-rascal-thumb.jpg"
                                                data-path="img/products/fat-rascal-thumb.jpg" data-label="fat-rascal.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/fat-rascal-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">fat-rascal.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/chocolate-cake-thumb.jpg"
                                                data-path="img/products/chocolate-cake-thumb.jpg"
                                                data-label="chocolate-cake-thumb.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/chocolate-cake-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">chocolate-cake-thumb.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/marble-cake-thumb.jpg"
                                                data-path="img/products/marble-cake-thumb.jpg" data-label="marble-cake.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/marble-cake-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">marble-cake.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-link p-0 folder-button-collapse collapsed" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="icon-container">
                                        <i class="simple-icon-arrow-down"></i>
                                    </span>
                                    <span class="folder-name">Cupcakes</span>
                                </button>

                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="list disable-text-selection">
                                        <div class="row">
                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/streuselkuchen-thumb.jpg"
                                                data-path="img/products/streuselkuchen-thumb.jpg"
                                                data-label="streuselkuchen-thumb.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/streuselkuchen-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">streuselkuchen-thumb.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-1 sfl-item-container"
                                                data-preview-path="img/products/cremeschnitte-thumb.jpg"
                                                data-path="img/products/cremeschnitte-thumb.jpg"
                                                data-label="cremeschnitte-thumb.jpg">
                                                <div class="card d-flex mb-2 p-0 media-thumb-container">
                                                    <div class="d-flex align-self-stretch">
                                                        <img src="img/products/cremeschnitte-thumb.jpg" alt="uploaded image"
                                                            class="list-media-thumbnail responsive border-0" />
                                                    </div>
                                                    <div class="d-flex flex-grow-1 min-width-zero">
                                                        <div
                                                            class="card-body pr-1 pt-2 pb-2 align-self-center d-flex min-width-zero">
                                                            <div class="w-100">
                                                                <p class="truncate mb-0">cremeschnitte-thumb.jpg</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                            <label class="custom-control custom-checkbox mb-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary sfl-submit">Select</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/moment.min.js"></script>
    <script src="js/vendor/fullcalendar.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/bootstrap-notify.min.js"></script>
    <script src="js/vendor/select2.full.js"></script>
    <script src="js/vendor/bootstrap-datepicker.js"></script>
    <script src="js/vendor/dropzone.min.js"></script>
    <script src="js/vendor/bootstrap-tagsinput.min.js"></script>
    <script src="js/vendor/nouislider.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/cropper.min.js"></script>
    <script src="js/vendor/typeahead.bundle.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/dore-plugins/select.from.library.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>