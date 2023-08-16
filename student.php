<?php
session_start();
include "config.php";
if (!isset($_SESSION['name'])) {
    header("location:login.php");
}
$error = array();
$sucsses = array();
$delete = array();
$data_chacke = array();
$empty_name = false;
$empty_fa_name = false;
$empty_cnic = false;
$empty_phone = false;
$empty_email = false;
$empty_location = false;
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $fa_name = mysqli_real_escape_string($conn, $_POST['fa_name']);
    $cnic = mysqli_real_escape_string($conn, $_POST['cnic']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    if (empty($_POST['name'])) {
        $empty_name  = true;
    } elseif (empty($_POST['fa_name'])) {
        $empty_fa_name  = true;
    } elseif (empty($_POST['cnic'])) {
        $empty_cnic  = true;
    } elseif (empty($_POST['phone'])) {
        $empty_phone  = true;
    } elseif (empty($_POST['email'])) {
        $empty_email  = true;
    } elseif (empty($_POST['location'])) {
        $empty_location  = true;
    } else {

        $sel_ins = "SELECT * FROM student WHERE cnic='$cnic' AND  phone='$phone' AND email='$email'";
        $sqi_ins = mysqli_query($conn, $sel_ins);
        $ins_num_row = mysqli_fetch_row($sqi_ins);
        if ($ins_num_row > 0) {
            // echo "Data is Alrady Exit";
            $error['dataAvleble'] = "Data is Alrady Exit";
        } else {
            $insert = "INSERT INTO student(`name` ,`fa_name` ,`cnic` ,`phone`, `email` ,`location` , `created_date`) VALUES ('$name' ,'$fa_name' , '$cnic' ,'$phone' ,'$email' ,'$location' , NOW())";
            $sql = mysqli_query($conn, $insert);
            if ($sql) {
                $sucsses['datasucses'] = "Data insert SucssesFuly";
            } else {
                echo "data not inser Succses";
            }
        }
    }
}

?>

<!-- ============delates qury ================= -->
<?php

if (isset($_POST['delete'])) {
    if (!isset($_POST['chack_btn']) || empty($_POST['chack_btn'])) {
        // $_SESSION['delete_chacke'] = "Please check the checkboxes to delete";
        $data_chacke['datachack'] = "Please check the checkboxes to delete";
    } else {
        $all_id = $_POST['chack_btn'];
        $extrext_id = implode(',', $all_id);

        $delete_query = "DELETE FROM student WHERE id IN ($extrext_id)";
        $sql = mysqli_query($conn, $delete_query);

        if ($sql) {
            // $_SESSION['Delete'] = "Data Delete Successfully!";
            $delete['datadelet'] = "Data Delete Successfully!'";
        } else {
            // $_SESSION['Delete'] = "Failed to delete data!";
            echo 'Data not Delete Successfully!';
        }
    }
}

?>


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
                    if (isset($delete)) {
                        foreach ($delete as $delete) {
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Well Done!</strong> ' . $delete . '.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                        };
                    };
                    ?>
                    <?php
                    if (isset($data_chacke)) {
                        foreach ($data_chacke as $data_chacke) {
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Well Done!</strong> ' . $data_chacke . '.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                        };
                    };
                    ?>
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>@Warning</strong> ' . $error . '.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                        };
                    };
                    ?>
                    <?php
                    if (isset($sucsses)) {
                        foreach ($sucsses as $sucsses) {
                            echo '
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Well Done!</strong> ' . $sucsses . '.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                        };
                    };
                    ?>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-4 course-card">
                                <div class="card text-center mein-card mb-5">
                                    <h3 class=" font-inter py-4">Add New Student</h3>
                                    <div class="container-fluid">
                                        <div class="in ">
                                            <input type="text" name="name" id="name" class=" input w-100 py-2" placeholder="Full Name">
                                            <?php if ($empty_name) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill The Name</p>';
                                            } ?>
                                        </div>

                                        <div class="in py-3">
                                            <input type="text" name="fa_name" id="fa_name" class=" input w-100 py-2" placeholder="Father Name">
                                            <?php if ($empty_fa_name) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill Father Name</p>';
                                            } ?>
                                        </div>

                                        <div class="in">
                                            <input type="text" name="cnic" class=" input w-100 py-2" placeholder="CNIC">
                                            <?php if ($empty_cnic) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill The CNIC</p>';
                                            } ?>
                                        </div>

                                        <div class="py-3 ">
                                            <input type="tel" name="phone" class="telephone  py-2" id="phone">
                                            <?php if ($empty_phone) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill The Phone</p>';
                                            } ?>
                                        </div>

                                        <div class="in pb-3">
                                            <input type="text" name="email" id="email" class=" input w-100 py-2" placeholder="Email">
                                            <?php if ($empty_email) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill The Email</p>';
                                            } ?>
                                        </div>

                                        <div class="in">
                                            <input type="text" id="location" name="location" class=" input w-100 py-2" placeholder="Location">
                                            <?php if ($empty_location) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill The Location </p>';
                                            } ?>
                                        </div>

                                        <button type="submit" name="submit" class="save py-2">Save</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-8 ">
            <form action="" method="post">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 text-end py-3 px-4">
                            <p class="font student"> Student</p>
                        </div>
                        <div class="col-lg-9 col-md-9 py-3 ">
                            <div class="btn-edit-delete text-start px-1">
                                <button type="submit" name="delete" class="export-btn delete">
                                    <span class="fa-regular fa-trash-can ">
                                        <span>Delete</span></span>
                                </button>
                                <a href=""> <span class="edit export-btn">Edit</span></a>
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
                                        <th>S/no<i class="fa-solid fa-arrow-down px-2"></i></th>
                                        <th>FULL NAME <i class="fa-solid fa-arrow-down px-2"></i></th>
                                        <th>FATHER <i class="fa-solid fa-arrow-down px-2"></i></th>
                                        <th>CNIC<i class="fa-solid fa-arrow-down px-2"></i></th>
                                        <th>Contact <i class="fa-solid fa-arrow-down px-2"></i>
                                        <th>Email<i class="fa-solid fa-arrow-down px-2"></i></th>
                                        <th>Location<i class="fa-solid fa-arrow-down px-2"></i></th>
                                        <th>Created Date<i class="fa-solid fa-arrow-down px-2"></i></th>
                                        </th>
                                        <th class="px-2"></th>

                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $select = "SELECT * FROM student";
                                    $sql_select = mysqli_query($conn, $select);
                                    $sql_num = mysqli_num_rows($sql_select);
                                    // $sql_fach = mysqli_fetch_assoc($sql_select);

                                    $no = 1;
                                    while ($row = mysqli_fetch_assoc($sql_select)) {

                                    ?>
                                        <tr>
                                            <td><input type="checkbox" class="text-input" name="chack_btn[]" value="<?php echo $row['id'] ?>"></td>
                                            <td class="font"><?php echo $no ?></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['fa_name'] ?></td>
                                            <td><?php echo $row['cnic'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['location'] ?></td>
                                            <td><?php echo $row['created_date'] ?></td>


                                        </tr>

                                    <?php

                                        $no = $no + 1;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
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