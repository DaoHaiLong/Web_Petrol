<?php
session_start();

include('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
// Add Category Code
if(isset($_POST['update']))
{
   // get input id your put in the data
    $pid=substr(base64_decode($_GET['pcatid']),0,-5);    

    //Getting Post Values

    $catID=$_POST['id']; 
    $catcategoryid=$_POST['categoryid']; 
    $catproductName=$_POST['productName'];  
    $catPrice=$_POST['Price']; 
    $catStatusProduct=$_POST['StatusProduct']; 
    $catimportNum=$_POST['importNum']; 
    $catexportNum=$_POST['exportNum']; 

    // Query implements
    $query=mysqli_query($con,"update Product set CategoryId='$catcategoryid',productName='$catproductName',Price='$catPrice',StatusProduct='$catStatusProduct',importNum='$catimportNum' ,exportNum='$catexportNum',where id='$pid'"); 
    // windowns  box information
    echo "<script>alert('Delete product successfully.');</script>";   
    echo "<script>window.location.href='DeleteProductManagement.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
           <!-- TODO: Write html -->
</body>
</html>
<?php } ?>