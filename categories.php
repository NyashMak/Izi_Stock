<?php 

include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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
        <div class="cat-content">
            <div class="catformdiv">
            <?php
            
            if(isset($_POST['submit'])){
              $cat_title = $_POST['cat_title'];

              $connection = mysqli_connect('localhost', 'root', 'root', 'efd');

              $query = "INSERT INTO categories(cat_title) VALUES ('$cat_title')";
              $result = mysqli_query ($connection, $query);

              if($result) {
                echo $cat_title. " Category Created Succesfully";
              }


            }
            ?>
                <form class="addcategoryform" method="POST" action="categories.php">
                    <label for="description">Description</label><br>
                    <input style="width: 300px;" type="text" name="cat_title" value="">
                    <input id="submit_button" type="submit" name="submit" value="Add Category">
                </form>
            </div> <!-- Form Container -->
            <div class="category-table">
                <table>
                
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                          <?php 
                          // SELECT FROM CATEGORIES
                          $query = "SELECT * FROM categories";
                          $result = mysqli_query($connection, $query);
                          
                          while ($row = mysqli_fetch_assoc($result)){
                            $dbCat_id = $row['cat_id'];
                            $dbCat_title = $row['cat_title'];

                            ?>
                            <tr>
                            <td><?php echo $dbCat_id ?></td>
                            <td><?php echo $dbCat_title ?></td>
                            </tr>

                            <?php
                          }
                          ?>
                            
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- Main Div -->
  
</div> <!-- Wrapper Div-->
</body>
</html>