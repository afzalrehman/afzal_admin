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
$empty_section_id = false;
$empty_section_name = false;
$empty_section_trade = false;

if (isset($_POST['submit'])) {
    $section_id = mysqli_real_escape_string($conn, $_POST['section_id']);
    $section_name = mysqli_real_escape_string($conn, $_POST['section_name']);
    $section_trade = mysqli_real_escape_string($conn, $_POST['section_trade']);

    if (empty($_POST['section_id'])) {
        $empty_section_id  = true;
    } elseif (empty($_POST['section_name'])) {
        $empty_section_name  = true;
    } elseif (empty($_POST['section_trade'])) {
        $empty_section_trade  = true;
    } else {
        $sel_ins = "SELECT * FROM section WHERE section_id='$section_id' AND section_name='$section_name'";
        $sqi_ins = mysqli_query($conn, $sel_ins);
        $ins_num_row = mysqli_fetch_row($sqi_ins);
        if ($ins_num_row > 0) {
            // echo "Data is Alrady Exit";
            $error['dataAvleble'] = "Data is Alrady Exit";
        } else {
            $insert = "INSERT INTO section(`section_id` ,`section_name` ,`section_trade` ,`created_date`) VALUES ('$section_id','$section_name' ,'$section_trade' , Now())";
            $sql = mysqli_query($conn, $insert);
            if ($sql) {
                // echo "inser sucsses";
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
        // echo "Please check the checkboxes to delete";
        $data_chacke['datachack'] = "Please check the checkboxes to delete";
    } else {
        $all_id = $_POST['chack_btn'];
        $extrext_id = implode(',', $all_id);

        $delete_query = "DELETE FROM section WHERE id IN ($extrext_id)";
        $sql = mysqli_query($conn, $delete_query);

        if ($sql) {
            // $_SESSION['Delete'] = "Data Delete Successfully!";
            // echo 'Data Delete Successfully!';
            $delete['datadelet'] = "Data Delete Successfully!'";
        } else {
            // $_SESSION['Delete'] = "Failed to delete data!";
            echo 'Data not Delete Successfully!';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
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
                            <div class="col-lg-4 course-card ">
                                <div class="card text-center  pb-5 ">
                                    <h3 class=" font-inter">Add New Section</h3>
                                    <div class="container-fluid">
                                        <div class="in py-3">
                                            <input type="text" name="section_id" class=" input w-100 py-2" placeholder="Section ID">
                                            <?php if ($empty_section_id) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill Section Id</p>';
                                            } ?>
                                        </div>

                                        <div class="in">
                                            <input type="text" name="section_name" id="section_name" class=" input w-100 py-2" placeholder="Section Name">
                                            <?php if ($empty_section_name) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill The Section Name</p>';
                                            } ?>
                                        </div>

                                        <select name="section_trade" id="section_trade" class="input  py-2 mt-3 w-100">
                                            <option selected> Section Trade</option>
                                            <option value="Web Development"> Web Development</option>
                                            <option value="graphic designing"> graphic designing</option>
                                            <option value=" Digital Markiting"> Digital Markiting</option>
                                            <?php if ($empty_section_trade) {
                                                echo '<p class="text-danger text-end m-0 p-0  font"> Please Fill Section Trade</p>';
                                            } ?>
                                        </select>



                                        <input type="submit" name="submit" class="save py-2" value="save">



                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-8 ">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 text-end py-3 px-4">
                                            <p class="font student"> Section</p>
                                        </div>
                                        <div class="col-lg-9 col-md-9 py-3 ">
                                            <div class="btn-edit-delete1 text-start px-1">
                                                <button type="submit" name="delete" class="btn_delete export-btn delete">
                                                    <span class="fa-regular fa-trash-can">
                                                        <span>Delete</span>
                                                    </span>
                                                </button>
                                                <a href=""> <span class="edit export-btn">Edit</span></a>
                                                <a href="">
                                                    <span class="fa-solid fa-cloud-arrow-down export export-btn"> <span>Export</span></span>
                                                </a>
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
                                                        <th>Sno<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Section ID<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Section NAME <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Section Course <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Create Date <i class="fa-solid fa-arrow-down px-2"></i></th>

                                                        <th class="px-2"></th>

                                                    </tr>
                                                </thead>





                                                <tbody>
                                                    <?php

                                                    $select = "SELECT * FROM section";
                                                    $sql_select = mysqli_query($conn, $select);
                                                    $sql_num = mysqli_num_rows($sql_select);
                                                    // $sql_fach = mysqli_fetch_assoc($sql_select);

                                                    $no = 1;
                                                    while ($sql_fach = mysqli_fetch_assoc($sql_select)) {

                                                    ?>
                                                        <tr>
                                                            <td><input type="checkbox" name="chack_btn[]" class="text-input" value="<?php echo $sql_fach['id'] ?>"></td>
                                                            <td class="font"><?php echo $no ?></td>
                                                            <td><?php echo $sql_fach['section_id'] ?></td>
                                                            <td><?php echo $sql_fach['section_name'] ?></td>
                                                            <td><?php echo $sql_fach['section_trade'] ?></td>
                                                            <td><?php echo $sql_fach['created_date'] ?></td>


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
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="container-fluid"> -->
                <!-- End of Footer -->

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
        <!-- End of Page Wrapper -->
        <!-- Bootstrap core JavaScript-->
     <!-- =======foter ============== -->
<?php  include "footer.php"; ?>

</body>

</html>