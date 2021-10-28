<?php
session_start();

include('./includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
// Add Category Code
if(isset($_POST['update']))
{
  $cid=substr(base64_decode($_GET['catid']),0,-5);    
//Getting Post Values
  $catID = $_POST['Id'];  
  $catname = $_POST['category'];
  $query=mysqli_query($con,"update Category set CategoryName='$catname' where id='$cid'"); 
  if ($query) {
      echo "<script>alert('Category updated successfully.');</script>";   
      echo "<script>window.location.href='./DeleteCategoryManagment.php'</script>";
    } else {
      echo "<script>alert('Something went wrong. Please try again.');</script>";
      echo "<script>window.location.href='./DeleteCategoryManagment.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <p><a href="./dasboard.php"></a>Home</p>

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
                    </a>
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
        <div class="container-upCa">
            <div class="header-up">
                <h4 class="header-item-up">
                    <i class="fas fa-folder"></i>
                    <span>Update Category</span>
                </h4>
            </div>
            <div class="row-up">
                <div class="col-xl-8">
                    <section class="hk-sec-wrapper">
                        <div class="roww">
                            <div class="col">
                                <form class="needs-validation" method="post" novalidate>
                                    <?php
                                        $cid=substr(base64_decode($_GET['catid']),0,-5);
                                        $ret=mysqli_query($con,"select * from Category where Id='$cid'");
                                        $cnt=1;
                                        while ($row=mysqli_fetch_array($ret)) 
                                    {?>
                                  
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="validationCustom03">Category Name</label>
                                            <input type="text" class="form-control" id="validationCustom03"
                                                value="<?php echo $row['CategoryName'];?>" name="category" required>
                                            <div class="invalid-feedback">Please provide a valid category code.</div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <button class="btn btn-warning btn-lg btn-block" type="submit" name="update">Update</button>
                                </form>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
</body>

</html>
<?php } ?>