
<div id="export-box" class="export-box">
      <button name="download">Download</button>
      <button name="print">Print</button>
</div>        

<table>
<thead>
  <tr>
    <th>SKU</th>
    <th>Category</th>
    <th>Description</th>
    <th>Dimensions</th>
    <th>Primary Timber</th>
    <th>PT Finish</th>
    <th>Secondary Timber</th>
    <th>ST Finish</th>
    <th>Comments</th>
    <th>Logged</th> <!-- This cell will include the Logger's Name & Date Logged-->
    <th>Price</th>
  </tr>
</thead>
<tbody>

<?php 

  //LOAD STOCKLIST
  $shopname = "Durbanville";
  echo "<h1>$shopname</h1>";

  $connection = mysqli_connect('localhost','root','root','efd');
  $query = "SELECT * FROM stocklist WHERE stock_station = '{$shopname}'";
  $result = mysqli_query($connection, $query);

  if(!$result){
    die (mysqli_error($connection));
  }


  while($row = mysqli_fetch_assoc($result)){

    $stockID = $row['stock-id'];
    $db_sku = $row['stock_sku'];
    $db_category = $row['stock_category'];
    $db_stockName = $row['stock_name'];
    $db_dimensions = $row['stock_dimensions'];
    $db_ptimber = $row['stock_ptimber'];
    $db_ptfinish = $row['stock_ptfinish'];
    $db_stimber = $row['stock_stimber'];
    $db_stfinish = $row['stock_stfinish'];
    $db_comments = $row['stock_comments'];
    $db_logDate = $row['date_logged']; 
    $db_price = $row['stock_price'];   
    
    ?> <!-- Discontinued PHP to wrap table row inside loop -->


    <tr>
    <td><?php echo $db_sku; ?></td>
    <td><?php echo $db_category; ?></td>
    <td><?php echo $db_stockName; ?></td>
    <td><?php echo $db_dimensions; ?></td>
    <td><?php echo $db_ptimber; ?></td>
    <td><?php echo $db_ptfinish; ?></td>
    <td><?php echo $db_stimber; ?></td>
    <td><?php echo $db_stfinish; ?></td>
    <td><?php echo $db_comments; ?></td>
    <td>Nyasha<br>On --/--/--</td> <!-- This cell will include the Logger's Name & Date Logged-->
    <td><?php echo $db_price; ?></td>
    <td>
      <button style="background-color: greenyellow;">Sell</button>
      <button style="background-color: orange;">Reserve</button>
      <button style="background-color: midnightblue;">Edit</button>
      <button style="background-color: red;">Delete</button>
    </td>
  </tr>

  <?php 
  
  } //End of While Loop

?>

  


</tbody>
</table>  
