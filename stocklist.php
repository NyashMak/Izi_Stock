<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connection = mysqli_connect('localhost','root','root','efd');

if (!$connection){
    echo "CONNECTION FAILED";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stocklist</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" 
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
      crossorigin="anonymous"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
      <div class="table-nav">

        <div class="box-1" id="blk-options">
          <label for="search">Search</label>
          <select name="blk-options" id="">
            <option value="sell">Sell</option>
            <option value="reserve">Reserve</option>
            <option value="request">Request</option>
            <option value="delete">Delete</option>
          </select>
          <input id="bulk_button" type="submit" name="submit" value="Select">
        </div><br> <!-- Bulk Options Div-->
    
        <div class="box-2" id="search-bar">
          <label for="search">Search</label>
          <input type="text" name="search" value="Search">
          <input id="search_button" type="submit" name="submit" value="Search">
        </div><br><!-- Search Bar Div -->
    
        <div class="box-3" id="shop-links">
          <ul>
            <li><button id="woodstock" name="woodstock" value="Woodstock">Woodstock</button></li>
            <li><button id="durbanville" name="durbanville" value="Durbanville">Durbanville</button></li>
            <li><button id="factory" name="factory" value="Factory">Factory</button></li>
          </ul>
        </div><!-- Shop Links Div -->
    
    </div> <!-- Table-Nav Div -->
      
        <div id="table-content" class="table-content">          
        </div> <!-- Table Content Div-->
        
    </div> <!-- Main Div -->
    
</div> <!-- Wrapper Div-->

<script>

document.getElementById('woodstock').addEventListener('click', loadStocklist);
function loadStocklist (){
  var xhr = new XMLHttpRequest();
  xhr.open ('GET', 'snippets/woodstocklist_snip.php', true);
  xhr.onload = function () {
    if (this.status = 200){
     var output = this.responseText;

     document.getElementById('table-content').innerHTML = output;
    }

    else {
      console.log('Error Loading');
    }
  }
 xhr.send ();
} //End of Woodstock Snippet

document.getElementById('durbanville').addEventListener('click', loadDStocklist);
function loadDStocklist (){
  var xhr = new XMLHttpRequest();
  xhr.open ('GET', 'snippets/durbanvillestocklist_snip.php', true);
  xhr.onload = function () {
    if (this.status = 200){
     var output = this.responseText;

     document.getElementById('table-content').innerHTML = output;
    }

    else {
      console.log('Error Loading');
    }
  }
 xhr.send ();
} //End of Durbanville Snippet


</script>

</body>
</html>