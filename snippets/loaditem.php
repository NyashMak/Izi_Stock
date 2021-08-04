
<!-- <style>
#searchlist {
list-style: none; 
width: 400px; 
height: 30px;
border: 1px solid;
border-radius: 5px;
background-color: whitesmoke;
position: relative;
left: 208px;
bottom: 20px;


#searchlist a{
    background-color: whitesmoke;
    text-decoration: none;
    color: black;


#searchlist:hover a {
    font-size: 18px;
    text-decoration: none;
    padding-left: 20px;
    color: brown;
    transition: .4s;    

</style> -->
<?php 


if (isset($_POST['item'])){

    $connection = mysqli_connect('localhost','root','root','efd');

 $input_item = $_POST['item'];

 $query = "SELECT * FROM products WHERE product_name LIKE '%$input_item%' ";
 $result = mysqli_query($connection, $query);

 if (!$result){
     die ("<h1>BULLSHIT</h1>");
 }

 while ($row = mysqli_fetch_assoc($result)){
     $db_id = $row['product_id'];
     $db_sku = $row['sku'];
     $db_product = $row['product_name'];
     $db_dimensions = $row['dimensions'];
     $db_pineR = $row['sa_pine'];
     $db_salignaR = $row['saligna'];
     $db_blackwoodR = $row['blackwood'];
     $db_oakR = $row['oak'];

?> 

         <option value="<?php echo $db_product; ?>">

     <?php
      }
}

/*
if (isset($_POST['prod'])){
    $connection = mysqli_connect('localhost','root','root','efd');

    $prod_item = $_POST['prod'];
   
    $query = "SELECT * FROM products WHERE product_name = $prod_item ";
    $result = mysqli_query($connection, $query);
   
    if(!$result){
        echo "<h1> SOMETHING WENT WRONG";
    }

}*/
?>