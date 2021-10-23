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
    $inputpid=substr(base64_decode($_GET['del']),0,-5);
    // Query implements
    $query=mysqli_query($con,"delete from Category where id='$inputpid'");
    // windowns  box information
    echo "<script>alert('Category element deleted.');</script>";   
    echo "<script>window.location.href='./DeleteCategoryManagement.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <link href="./resources/css/styles.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<div class="hk-wrapper hk-vertical-nav">
<!-- Top Navbar -->
<?php include_once('./includes/navbar.php');
include_once('./includes/sidebar.php');
?>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
<li class="breadcrumb-item"><a href="#">Category</a></li>
<li class="breadcrumb-item active" aria-current="page">Manage</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
<div class="hk-pg-header">
 <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Manage Categories</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Category Name</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
$rno=mt_rand(10000,99999);  
$query=mysqli_query($con,"select * from Category");
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>                                                
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['CategoryName'];?></td>
<td>
<a href="./UppdateCategory.php?catid=<?php echo base64_encode($row['id'].$rno);?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i></a>
<a href="./DeleteCategoryManagment.php?del=<?php echo base64_encode($row['id'].$rno);?>" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Do you really want to delete?');"> <i class="icon-trash txt-danger"></i> </a>
</td>
</tr>
<?php 
$cnt++;
} ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->

            <!-- Footer -->
<?php include_once('includes/footer.php');?>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->
    </div>
</body>
</html>
<?php } ?>