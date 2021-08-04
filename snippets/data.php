<?php 
if (isset($_POST['pname'])){

    $connection = mysqli_connect('localhost','root','root','efd');
   
    $fpname = $_POST['pname'];
   
    $query = "SELECT * FROM products WHERE product_name = '$fpname' ";
    $result = mysqli_query($connection, $query);
   if (!$result) {
       die ("<script> console.log('SOMETHING WENT WRONG');</script>");
   }
    $product = mysqli_fetch_assoc($result);
   
    echo json_encode($product);
   }
?>
