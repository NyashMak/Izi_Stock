<?php

$connection = mysqli_connect('localhost','root','root','efd');

if (!$connection) {
  die ("Connection Failed");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" 
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
      crossorigin="anonymous"> -->

</head>
<body>
<!-- Navigation Bar -->
  <header>
    <h1><img src="#" alt="" width="80px" height="80px"><span>Eco Furniture Design</span></h1>
    <nav>
      <ul class="ul1">
        <li class="li1"><a href="#">HOME</a></li>
        <li class="li1"><a href="#">PORTFOLIO</a></li>
        <li class="li1"><a href="#">ABOUT</a></li>
        <li class="li1"><a href="#">CONTACT</a></li>
      </ul>
    </nav>
  </header>

<div id="wrapper">
      <!-- Side Menu Bar -->
    <div class="sidebar">
      <h2>Izi Stock</h2>
      <ul>
      <li><a href="index.php"><i class="fas fa-chart-line"></i>Dashboard</a></li>
      <li><a href="stocklist.php"><i class="fas fa-book-open"></i>Stocklist</a></li>
      <li><a href="sales.php"><i class="fas fa-bars"></i>Sales</a></li>
      <li><a href="addstock.php"><i class="fas fa-bars"></i>Add Stock</a></li>
      <li><a href="categories.php"><i class="fas fa-bars"></i>Categories</a></li>
      <li><a href="addproduct.php"><i class="fas fa-bars"></i>Add Product</a></li>
      <li><a href="addusers.php"><i class="fas fa-users"></i>Users</a></li>
      <li><a href="#"><i class="fas fa-envelope"></i>Notifications</a></li>
      </ul>
    </div>

    <div id="main">

      <h1>Welcome Nyasha</h1>
      <hr>
      <br>
      <button style="margin-right: 0px;"><a href="" value="">View Products</a></button>
      <div class="form-container">

      <?php

      if(isset($_POST['submit'])){

        $product_category = $_POST['category'];
        $sku = $_POST['sku'];
        $product_name = $_POST['description'];
        $dimensions = $_POST['dimensions'];
        $sa_pine = $_POST['sa_pine'];
        $saligna = $_POST['saligna'];
        $blackwood = $_POST['blackwood'];
        $oak = $_POST['oak'];

        $query = "INSERT INTO products (product_category, sku, product_name, dimensions, sa_pine, saligna, blackwood, oak) VALUES ('$product_category', '$sku', '$product_name', '$dimensions', '$sa_pine', '$saligna', '$blackwood', '$oak')";
        $result = mysqli_query($connection, $query);

        if($result) {
          echo "<h3 style='color: green;'>Product Added Succesfully</h3>";
        }

        else {
          die (mysqli_error($connection). "Query Failed");
        }
      
      }

      ?>
          <form class="productform" method="POST" action="addproduct.php">
              <label for="category">Category</label><br>
              <input type="text" name="category" id=""><br>
              <label for="sku">SKU#</label><br>
              <input type="text" name="sku" value=""><br>
              <label for="description">Description</label><br>
              <input type="text" name="description" value=""><br>
              <label for="dimensions">Dimensions</label><br>
              <input type="text" name="dimensions" value=""><br>
              <label for="sa_pine">SA Pine</label><br>
              <input type="number" name="sa_pine" value=""><br>
              <label for="saligna">Saligna</label><br>
              <input type="number" name="saligna" value=""><br>
              <label for="blackwood">Blackwood</label><br>
              <input type="number" name="blackwood" value=""><br>
              <label for="oak">Oak</label><br>
              <input type="number" name="oak" value=""><br>
              <input id="submit_button" type="submit" name="submit" value="Add Product">
          </form>
      </div> <!-- Form Container -->
    </div> <!-- Main Div-->
  
</div> <!-- Wrapper Div-->
</body>
</html>