<?php
session_start();

include('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
// Add Category Code
if(isset($_POST['update']))
{
$cid=substr(base64_decode($_GET['catid']),0,-5);    
//Getting Post Values
$catname=$_POST['category']; 
$catID=$_POST['id'];  
$query=mysqli_query($con,"update Category set CategoryName='$catname', where id='$cid'"); 
echo "<script>alert('Category updated successfully.');</script>";   
echo "<script>window.location.href='DeleteCategoryManagement.php'</script>";
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