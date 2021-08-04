<?php 

include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stock</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" 
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" 
      crossorigin="anonymous"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        //Jquery Code
        $(document).ready(function(){
            $("#description").keyup(function(){
                $.ajax({
                    url: 'snippets/loaditem.php',
                    type: 'post',
                    data: {item: $(this).val()},
                    success: function(result){
                        $("#descriptions").html(result);
                    }
                });
            });       
        }); // End of Autopopulate from Description Input

        $(document).ready(function(){
          $("#description").change(function(){
            var pname = $("#description").val();
            $.ajax({
              url: 'snippets/data.php',
              type: 'post',
              data: 'pname=' + pname
            }).done(function(result){
              var resultArray = JSON.parse(result);
              console.log(resultArray);
              $("#category").val(resultArray['product_category']);
              $("#sku").val(resultArray['sku']);
              $("#dimensions").val(resultArray['dimensions']);

              var pricennameSP = resultArray['sa_pine']+"#SA Pine";
              $("#SA_Pine").val(pricennameSP);
              console.log(pricennameSP);

              var pricennameMDF = resultArray['saligna']+"#MDF";
              $("#MDF").val(pricennameMDF);
              console.log(pricennameMDF);

              var pricennameB = resultArray['blackwood']+"#Blackwood";
              $("#Blackwood").val(pricennameB);
              console.log(pricennameB);

              var pricennameO = resultArray['oak']+"#Oak";
              $("#Oak").val(pricennameO);
              console.log(pricennameO);

            });
          });
        });

    /*    $("#result").click(function(){

         
                $.ajax({
                    url: 'addstock.php',
                    type: 'post',
                    data: {prod: $(this).text()},
                    success: function(result){
                        $("#result").html(result);
                    }
                });
            });    */
            
        </script>

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

      <!-- Addstock to Database PHP Function Start-->
      <?php

            if(isset($_POST['submit'])){

              $stock_category = $_POST['category'];
              $stock_sku = $_POST['sku'];
              $stock_name = $_POST['description'];
              $stock_dimensions = $_POST['dimensions'];
              $stock_ptimberNprice = $_POST['ptimber'];
                $stock_pTNP = explode("#", $stock_ptimberNprice);
                 $stock_price = $stock_pTNP[0];
                 $stock_ptimber = $stock_pTNP[1];
              $stock_ptfinish = $_POST['ptfinish'];
              $stock_stimber = $_POST['stimber'];
              $stock_stfinish = $_POST['stfinish'];
              $stock_comment = $_POST['comments'];
              $stock_station = "Woodstock"; //This needs to come from login object
              $stock_username = 'Nyasha'; //This needs to come from login object
              $date_logged = date("Y-m-d");
              $date_dispatched = date("Y-m-d"); //This will only be updated when the stock item is released from factory stocklist
              
            

              $query = "INSERT INTO stocklist (stock_category, stock_sku, stock_name, stock_dimensions, stock_ptimber, stock_ptfinish, stock_stimber, stock_stfinish, stock_comments, stock_station, stock_username, date_logged, date_dispatched, stock_price) VALUES ('$stock_category','$stock_sku', '$stock_name', '$stock_dimensions', '$stock_ptimber', '$stock_ptfinish', '$stock_stimber', '$stock_stfinish', '$stock_comment', '$stock_station', '$stock_username', '$date_logged', '$date_dispatched', '$stock_price') ";
              
              $result = mysqli_query($connection, $query);

              if(!$result){
                echo mysqli_error($connection);
                
              }

              else {
                echo "<h3 style='color: green;'>$stock_name has been added Succesfully</h3>";
              }
            }
        ?> <!-- Addstock to Database PHP Function End-->



          <form class="stockform" method="POST" action="addstock.php" >

              <label hidden="" for="category">Category</label><br>
                <input hidden="" type="text" id="category" name="category" value="">

              <label hidden="" for="sku">SKU#</label><br>
              <input hidden="" type="text" id="sku" name="sku" value="">

              <label for="description">Description</label><br>
              <input list="descriptions" id="description" name="description"><br>
                <datalist id="descriptions" >
                  
                </datalist>

              <label for="dimensions">Dimensions</label><br>
              <input type="text" name="dimensions" id="dimensions" value=""><br>

              <label for="ptimber">Primary Timber</label><br>
              <select name="ptimber" id="ptimber" value=""><br>
                <option selected="" disabled="" value="">Select Primary Timber</option>
                <option id="SA_Pine" value="">SA Pine</option>
                <option id="MDF" value="">MDF</option>
                <option id="Blackwood" value="">Blackwood</option>
                <option id="Ash" value="">Ash</option>
                <option id="Oak" value="">Oak</option>
              </select> <br>

              <label for="ptfinish">PT Finish</label><br>
              <input type="text" name="ptfinish" id="ptfinish" value="" placeholder="Enter Primary Finish"><br>
              <label for="stimber">Secondary Timber</label><br>
                <select name="stimber" id="stimber" value=""><br>
                  <option selected="" disabled="" value="">Select Secondary Timber</option>
                  <option id="SA_Pine" value="SA Pine">SA Pine</option>
                  <option id="MDF" value="MDF">MDF</option>
                  <option id="Blackwood" value="Blackwood">Blackwood</option>
                  <option id="Ash" value="Ash">Ash</option>
                  <option id="Oak" value="Oak">Oak</option>
                </select> <br>

              <label for="stfinish">ST Finish</label><br>
              <input type="text" name="stfinish" id="stfinish" value="" placeholder="Enter Secondary Finish"><br>

              <label for="comments">Comments</label><br>
              <input type="textarea" name="comments" value="" id="comments" placeholder="Enter Comments"><br>
              <input id="submit_button" type="submit" name="submit" value="Add Stock">
          </form>
          
      </div> <!-- Form Container -->
    </div> <!-- Table Div-->
  
</div> <!-- Wrapper Div-->


</body>
</html>