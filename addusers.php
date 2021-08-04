<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
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
      <div class="form-container">
          <form class="stockform" method="" action="">
              <label for="station">Station</label><br>
                <select name="station" id="station">
                  <option value="durbaville">Durbanville</option>
                  <option value="factory">Factory</option>
                  <option value="woodstock">Woodstock</option>                
                </select><br>
              <label for="firstname">Firstname</label><br>
              <input type="text" name="firstname" value=""><br>
              <label for="lastname">Lastname</label><br>
              <input type="text" name="lastname" value=""><br>
              <label for="email">Email</label><br>
              <input type="email" name="email" value=""><br>
              <label for="password">Password</label><br>
              <input type="text" name="password" value=""><br>
              <label for="role">User Role</label><br>
                <select name="role" id="role">
                  <option value="master">Master Administrator</option>
                  <option value="sales">Sales</option>
                  <option value="floor_man">Floor Man</option>
                  <option value="office_admin">Office Admin</option>                
                </select><br>
              <input id="submit_button" type="submit" name="submit" value="Add User">
          </form>
      </div> <!-- Form Container -->
    </div> <!-- Table Div-->
  
</div> <!-- Wrapper Div-->
</body>
</html>