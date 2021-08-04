<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
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
      
    <div class="table-content">
        <h2 style="text-align: center;">SALES</h2><br>

        <div class="table-nav">
            <div class="box-1">
                <label for="Filter By">Filter By</label>
                <form id="filter-sales" action="POST" method="">
                    <select name="filter" id="filter">
                        <option value="Date">Date</option>
                        <option value="category">Category</option>
                        <option value="product">Product</option>
                        <option value="shop">Shop</option>
                    </select>
                    <input id="submit_button" type="submit" name="submit" value="Submit">
                </form>
            </div> <!-- Filter Form -->

            <div>
                <a href=""><button id="submit_button">ADD SALE</button></a>
            </div>
        </div><br>

        

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Dimensions</th>
            <th>Primary Timber</th>
            <th>Shop</th>
            <th>Client Name/<br>Quote #</th>
            <th>Sold By</th>
            <th>Date Sold</th>
            <th>Selling Price</th>
            <th>Sold @ R</th>
            <th>Notes & Comments</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>0001</td>
            <td>Cooper Desk 2 Drawers</td>
            <td>1100x500x750</td>
            <td>Blackwood</td>
            <td>Woodstock</td>
            <td>Jazmine Ahrends</td>
            <td>Nyasha</td>
            <td>19/05/2021</td>
            <td>R3,990</td>
            <td>R2,900</td>
            <td>Peter gave discount</td>
            <td>
              <button style="background-color: orange;">Reverse</button>
              <button style="background-color: midnightblue;">Edit</button>
              <button style="background-color: red;">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>  

    </div> <!-- Table Div-->
  
</div> <!-- Wrapper Div-->
</body>
</html>