<?php
session_start();

// error_reporting(0);

include('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
// Add Category Code
if(isset($_POST['submit']))
{
//Getting Post Values
$catID=$_POST['id']; 
$catcategoryid=$_POST['categoryid']; 
$catproductName=$_POST['productName'];  
$catPrice=$_POST['Price']; 
$catStatusProduct=$_POST['StatusProduct']; 
$catimportNum=$_POST['importNum']; 
$catexportNum=$_POST['exportNum']; 

// Query implements
$query=mysqli_query($con,"insert into Product(id,CategoryId,productName,Price,StatusProduct,importNum,exportNum) values('$catID','$catcategoryid','$catproductName','$catPrice','$catStatusProduct','$catimportNum','$catexportNum')"); 
if($query) {
  echo "<script>alert('Category added successfully.');</script>";   
  echo "<script>window.location.href='./AddProduct.php'</script>"; 
} 
else {
  echo "<script>alert('Something went wrong. Please try again.');</script>";   
  echo "<script>window.location.href='./AddProduct.php'</script>";    
 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    

            <!-- TODO: Write html -->
            
</body>
</html>
<?php } ?>