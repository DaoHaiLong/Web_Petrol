<?php
session_start();
//error_reporting(0);
include('./includes/config.php');
if (strlen($_SESSION['aid'] == 0)) {
    header('location:logout.php');
} else { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="./resources/css/style1.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        $(document).ready(function () {


            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('activenav_item');

            });

        });
    </script>

    <div class="wrapper">
        <nav id="sidebar">

            <div class="sidebar-header">
                <h4>
                    Petrol Management
                </h4>
            </div>
            <ul class="list-unstyled components">
                <p><a href="./dasboard.php">Home</a></p>

                <li class="activenav_item">
                    <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                        data-target="#categorydrp">Category</a>
                    <ul id="categorydrp" class="collapse list-unstyled">
                        <li>
                            <a href="./AddCategory.php">Add</a>
                        </li>
                        <li>
                            <a href="./DeleteCategoryManagment.php">Manage</a>
                        </li>
                    </ul>

                </li>
                <li class="activenav_item">
                    <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                        data-target="#Productdrp">Product </a>
                    <ul id="Productdrp" class="collapse list-unstyled">
                        <li>
                            <a href="./AddProduct.php">Add</a>
                        </li>
                        <li>
                            <a href="./DeleteProductManagement.php"> Manage</a>
                        </li>
                    </ul>
                
                </li>
               <li class="activenav_item">
                    <a href="javascript:void(0);" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"
                        data-target="#Account">Account </a>
                    <ul id="Account" class="collapse list-unstyled">
                        <li>
                            <a href="./ChangePass.php">Change Password</a>
                        </li>
                        <li>
                            <a href="./logout.php"> Logout</a>
                        </li>
                    </ul>
                    
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>

                </div>
            </nav>
        </div>
        <div class="container-das">
            <!-- <div class="row"> -->
            <div class="row-item">
                <?php
                $query = mysqli_query($con, "select id from AdminUser");
                $listedadmin = mysqli_num_rows($query);
              ?>
                <div class="col-lg-3  ">
                    <div class="card card sm ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span class="d-block font-15 text-dark font-weight-300">Admin</span>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-block display-4 text-dark mb-5">
                                    <?php echo $listedadmin; ?>
                                </span>
                                <small class="d-block"> Admin</small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    $query = mysqli_query($con, "select id from Category");
                    $listedcate = mysqli_num_rows($query);
                ?>
                <div class="col-lg-3 ">
                    <div class="card ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span class="d-block font-15 text-dark font-weight-300">Categories</span>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-block display-4 text-dark mb-5">
                                    <?php echo $listedcate; ?>
                                </span>
                                <small class="d-block">Categories</small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    $sql = mysqli_query($con, "select id from Product");
                    $listedproduct = mysqli_num_rows($sql);
                ?>
                <div class="col-lg-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5">
                                <div>
                                    <span class="d-block font-15 text-dark font-weight-300">Products</span>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-block display-4 text-dark mb-5">
                                    <?php echo $listedproduct; ?>
                                </span>
                                <small class="d-block"> Products</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>


</body>

</html>
<?php } ?>