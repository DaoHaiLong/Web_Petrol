<?php
session_start();
//error_reporting(0);

include('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
// Code for deletion       
if(isset($_GET['del']))
{    
    // get input id your put in the data
    $inputppid=substr(base64_decode($_GET['del']),0,-5); 
    // Query implements
    $query=mysqli_query($con,"delete from Product where id='$inputppid'");
    // windowns  box information
    echo "<script>alert('Products element deleted.');</script>";   
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