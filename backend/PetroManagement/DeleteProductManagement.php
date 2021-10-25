<?php
session_start();
//error_reporting(0);

include('./includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
// Code for deletion       
if(isset($_GET['del']))
{    
    // get input id your put in the data
    $pid=substr(base64_decode($_GET['del']),0,-5); 
    // Query implements
    $query=mysqli_query($con,"delete from Product where id='$pid'");
    // windowns  box information
    if ($query){
        echo "<script>alert('Product element deleted successfully');</script>";   
        echo "<script>window.location.href='./DeleteProductManagement.php'</script>";
  }else{
        echo "<script>alert('Something went wrong. Please try again.');</script>";
        echo "<script>window.location.href='./DeleteProductManagement.php'</script>";  
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
                    Petro Management
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

        <div  class="container-edit-pro">
            <div class="header_edit-pro">
                <h4 class="header-item-edit-pro">
                    <i class="fas fa-folder"></i>
                    <span>Manage Product</span>
                </h4>
            </div>
            <div id="scroll" class="row-edit-pro">
                <div class="col-xl-8">
                    <section class="hk-sec-wrapper">
                        <div class="row-pro">
                            <div class="col-sm">
                                <div class="table-wrap">
                                    <table id="datable_1" class="table table-hover w-120 display pb-25">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Id</th>
                                                <th>CategoryId </th>
                                                <th>ProductName</th>
                                                <th>Price</th>
                                                <th>StatusProduct</th>
                                                <th>Import</th>
                                                <th>Export </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $rno=mt_rand(10000,99999);  
                                                $query=mysqli_query($con,"select * from Product");
                                                $cnta=1;
                                                while($row=mysqli_fetch_array($query))
                                                {    
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $cnta;?>
                                                </td>
                                                <td>
                                                    <?php echo $row['id'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['CategoryId'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['productName'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Price'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['StatusProduct'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['importNum'];?>
                                                </td>
                                                <td>
                                                    <?php echo $row['exportNum'];?>
                                                </td>

                                                <td>
                                                    <a href="./UppdateProduct.php?pid=<?php echo base64_encode($row['id'].$rno);?>"
                                                        class="mr-25" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fas fa-pencil-alt"></i></a>
                                                    <a href="./DeleteProductManagement.php?del <?php echo base64_encode($row['id'].$rno);?>"
                                                        data-toggle="tooltip" data-original-title="Delete"
                                                        onclick="return confirm('Do you really want to delete?');"> <i
                                                            class="fas fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                              <?php 
                                                 $cnta++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php } ?>