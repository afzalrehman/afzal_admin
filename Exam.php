<!DOCTYPE html>
<html lang="ur">

<!-- ============header============== -->
<?php include "header.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->


                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12 ">
                            <div class="card">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 text-end py-3 px-4">
                                        <p class="font student"> EXAM</p>
                                    </div>
                                    <div class="col-lg-9 col-md-9 py-3 ">
                                        <div class="btn-edit-delete text-start px-1">
                                            <a href="">
                                                <span class="fa-regular fa-trash-can export-btn delete">
                                                    <span>Delete</span></span></a>
                                            <a href=""> <span class="edit export-btn">Edit</span></a>
                                            <a href="">
                                                <span class="fa-solid fa-cloud-arrow-down export export-btn">
                                                    <span>Export</span></span></a>
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0 ">

                                <div class="dov">
                                    <div class="table-wrapper">
                                        <table class="contain-table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <!-- <input class="chack" type="checkbox"> -->
                                                        <i class="fa-solid fa-plus "></i>
                                                    </th>
                                                    <th>STD ID<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>Student Name <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>Voucher <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>CNIC<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>Optained Marks<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>Percentage<i class="fa-solid fa-arrow-down px-2"></i>
                                                    </th>
                                                    <th>Status<i class="fa-solid fa-arrow-down px-2"></i>
                                                    </th>
                                                    <th>Course<i class="fa-solid fa-arrow-down px-2"></i>
                                                    </th>
                                                    <th class="px-2"></th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="paid"><span class="paid-step">Paid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="un-paid"><span class="unpaid-step">UnPaid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="paid"><span class="paid-step">Paid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="paid"><span class="paid-step">Paid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="un-paid"><span class="unpaid-step">UnPaid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="paid"><span class="paid-step">Paid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="un-paid"><span class="unpaid-step">UnPaid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="paid"><span class="paid-step">Paid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="paid"><span class="paid-step">Paid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="un-paid"><span class="unpaid-step">UnPaid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="paid"><span class="paid-step">Paid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="un-paid"><span class="unpaid-step">UnPaid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="paid"><span class="paid-step">Paid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="paid"><span class="paid-step">Paid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td ><li class="un-paid"><span class="unpaid-step">UnPaid</span>   </li></td>
                                                    <td>Regular text column</td>
                                                    <td>
                                                        <div class="bt dropdown show">
                                                            <a href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Content Wrapper -->

        </div>

        <!-- Bootstrap core JavaScript-->
   <!-- =======foter ============== -->
<?php  include "footer.php"; ?>


</body>

</html>