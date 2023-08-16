<?php
include "config.php";
session_start();
if (!isset($_SESSION['name'])) {
    header("location:login.php");
}
$insert = false;
$cnic_error = false;
$empty_name = false;
$empty_cnic = false;
$empty_num = false;
$empty_email = false;
$empty_loc = false;
if (isset($_POST['submit'])) {


    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $cnic = mysqli_real_escape_string($conn,  $_POST['cnic']);
    $phone = mysqli_real_escape_string($conn,  $_POST['phone']);
    $email = mysqli_real_escape_string($conn,  $_POST['email']);
    $location = mysqli_real_escape_string($conn,  $_POST['location']);

    if (empty($_POST['name'])) {
        $empty_name  = true;
    } elseif (empty($_POST['cnic'])) {
        $empty_cnic  = true;
    } elseif (empty($_POST['phone'])) {
        $empty_num  = true;
    } elseif (empty($_POST['email'])) {
        $empty_email  = true;
    } elseif (empty($_POST['location'])) {
        $empty_loc  = true;
    } else {
        $cnic_chacke = "SELECT * FROM user WHERE cnic='$cnic' AND mobile='$phone' AND email='$email'";

        $cnic_result = mysqli_query($conn, $cnic_chacke);

        $check_cnic = mysqli_fetch_row($cnic_result);
        // $sql_fach = mysqli_fetch_s($cnic_result);
        if ($check_cnic > 0) {
            $cnic_error  = true;
        } else {
            $isert_data = "INSERT INTO user (`name` , `cnic` , `mobile` , `email` , `location`, create_date ) VALUES ('$name' , '$cnic', '$phone' , '$email' , '$location' , NOW())";
            $sql = mysqli_query($conn, $isert_data);
            if ($sql) {
                $insert = true;
            } else {
                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>not insert your data </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
            }
        }
    }
}




?>

<!-- ===============DElete qurey=============== -->
<?php
if (isset($_POST['delete_btn'])) {
    if (!isset($_POST['chack_btn_delete']) || empty($_POST['chack_btn_delete'])) {
        $_SESSION['delete_chacke'] = "Please check the checkboxes to delete";

        // You might want to redirect back to the previous page or handle this case accordingly.
    } else {
        $all_id = $_POST['chack_btn_delete'];
        $extrext_id = implode(',', $all_id);

        $delete_query = "DELETE FROM user WHERE id IN ($extrext_id)";
        $sql = mysqli_query($conn, $delete_query);

        if ($sql) {
            $_SESSION['Delete'] = "Data Delete Successfully!";
        } else {
            $_SESSION['Delete'] = "Failed to delete data!";
        }
    }
}

?>

<!-- ===================edit qurey =================== -->
<!DOCTYPE html>
<html lang="ur">
<!-- ============header============== -->
<?php include "header.php"; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

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
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
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
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
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
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
                    <?php

                    if (isset($warning)) {
                        foreach ($warning as $warning) {
                            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> ' . $warning . '.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
                        };
                    };
                    ?>

                    <?php
                    if (isset($_SESSION['Delete'])) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>!</strong> ' . $_SESSION['Delete'] . '.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                        unset($_SESSION['Delete']);
                    }
                    if (isset($_SESSION['delete_chacke'])) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>!WARNING</strong> ' . $_SESSION['delete_chacke'] . '.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                        unset($_SESSION['delete_chacke']);
                    }


                    ?>
                    <?php
                    if ($insert) {
                        echo '
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <strong>!Succses</strong>   insert your data. 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                    }
                    ?>

                    <?php
                    if ($cnic_error) {
                        echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>!WARNING</strong> data Alrady Exits.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                    }
                    ?>

                    <div class="row">
                        <div class="col-lg-4 course-card">
                            <div class="card text-center mein-card mb-5">
                                <h3 class=" font-inter py-4">Add New User</h3>
                                <div class="container-fluid">
                                    <form action="" method="post">
                                        <!-- <div class="in ">
                                            <input type="text" class=" input w-100 py-2" placeholder="Full Name">
                                        </div> -->

                                        <div class="in py-3">
                                            <input type="text" name="name" id="name" class=" input w-100 py-2" placeholder="Full Name">
                                            <?php if ($empty_name) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill Name</p>';
                                            } ?>
                                        </div>

                                        <div class="in">
                                            <input type="text" name="cnic" id="cnic" class=" input w-100 py-2" placeholder="CNIC">
                                            <?php if ($empty_cnic) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill CNIC</p>';
                                            } ?>
                                        </div>

                                        <div class="py-3 ">
                                            <input type="number" name="phone" class="input w-100 py-2  " id="phone" placeholder="Enter Your Phone">
                                            <?php if ($empty_num) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill Phone</p>';
                                            } ?>
                                        </div>

                                        <div class=" in pb-3">
                                            <input type="email" name="email" id="email" class=" input w-100 py-2 " placeholder="Email">
                                            <?php if ($empty_email) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill Email</p>';
                                            } ?>
                                        </div>

                                        <div class=" in">
                                            <input type="text" name="location" id="location" class="  input w-100 py-2" placeholder="Location (Optional)">
                                            <?php if ($empty_loc) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill Location</p>';
                                            } ?>
                                        </div>

                                        <input type="submit" name="submit" class="save py-2">
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-8 ">
                            <div class="card">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 text-end py-3 px-4">
                                            <p class="font student"> User</p>
                                        </div>

                                        <div class="col-lg-9 col-md-9 py-3 ">

                                            <div class="btn-edit-delete text-start px-1">
                                                <button type="submit" name="delete_btn" class="btn btn danger">
                                                    <span class="fa-regular fa-trash-can export-btn delete">
                                                        <span>Delete</span></span></button>
                                                <button class="edit export-btn" type="submit" name="btn_edit"> <span>Edit</span></button>
                                                <a href="">
                                                    <span class="fa-solid fa-cloud-arrow-down export export-btn"> <span>Export</span></span></a>
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
                                                        <th>ID<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>FULL NAME <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>CNIC<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Role Type <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Contact <i class="fa-solid fa-arrow-down px-2"></i>
                                                        <th>Email<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Location<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Create By <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Create Date <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        </th>
                                                        <th class="px-2"></th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- ==============select qurey============ -->
                                                    <?php
                                                    $select = "SELECT * FROM user";
                                                    $result = mysqli_query($conn, $select);
                                                    $res_num = mysqli_num_rows($result);

                                                    $no = 1;
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                        <tr>
                                                            <td><input type="checkbox" name="chack_btn_delete[]" class="text-input" value="<?php echo $row['id']; ?>"></td>
                                                            <td class="font"><?php echo  $no ?></td>

                                                            <td><?php echo  $row['name']; ?></td>
                                                            <td><?php echo  $row['cnic']; ?></td>
                                                            <td><?php echo  $_SESSION['name']; ?></td>
                                                            <td><?php echo  $row['mobile']; ?></td>
                                                            <td><?php echo  $row['email']; ?></td>
                                                            <td><?php echo  $row['location']; ?></td>
                                                            <td><?php echo  $_SESSION['name']; ?></td>
                                                            <td><?php echo  $row['create_date']; ?></td>


                                                        </tr>
                                                    <?php
                                                        $no = $no + 1;
                                                    }

                                                    ?>




                                                </tbody>
                                            </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Content Wrapper -->

    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
<!-- =======foter ============== -->
<?php  include "footer.php"; ?>


</body>

</html>