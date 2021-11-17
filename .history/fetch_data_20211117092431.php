<?php

//fetch_data.php

include('config/db.php');

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM product
 ";
//  if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
//  {
//   $query .= "
//    AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
//   ";
//  }
 if(isset($_POST["category"]))
 {
  $category_filter = implode("','", $_POST["category"]);
  $query .= "
   AND 	prd_cat_id IN('".$category_filter."')
  ";
 }
//  if(isset($_POST["ram"]))
//  {
//   $ram_filter = implode("','", $_POST["ram"]);
//   $query .= "
//    AND product_ram IN('".$ram_filter."')
//   ";
//  }
//  if(isset($_POST["storage"]))
//  {
//   $storage_filter = implode("','", $_POST["storage"]);
//   $query .= "
//    AND product_storage IN('".$storage_filter."')
//   ";
//  }

 $statement = $conn->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="col-sm-4 col-lg-3 col-md-3">
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
     <img src="image/'. $row['product_image'] .'" alt="" class="img-responsive" >
     <p align="center"><strong><a href="#">'. $row['product_name'] .'</a></strong></p>
     <h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .'</h4>
     <p>Camera : '. $row['product_camera'].' MP<br />
     Brand : '. $row['product_brand'] .' <br />
     RAM : '. $row['product_ram'] .' GB<br />
     Storage : '. $row['product_storage'] .' GB </p>
    </div>

   </div>

   <div class="col l-4">
   <div class="products-details ">
     <div class="products-thumb">
       <div class="products-label">
         <div class="products-sale">'. $row['product_sale'] .'</div>
       </div>
       <div class="products-wrapper__img">
         <a href="" class="products-details-link">      
           <img src="./admin/upload/'. $row['prd_image'] .'" alt="" class="products-img" alt="">
           <img src="./admin/upload/'. $row['prd_image_2'] .'" alt="" class="products-img hidden" alt="">
         </a>
       </div>                 
       <div class="products-button">
         <a href="" class="products-link">
           <i class="products-icon ti-shopping-cart"></i>
         </a>
         <a href="" class="products-link">
           <i class="products-icon far fa-star"></i>
         </a>
         <a href="" class="products-link">
           <i class="products-icon ti-search"></i>
         </a>
       </div>
     </div>
     <div class="products-description">
       <a class="products-name">'. $row['product_name'] .'</a>
       <span class="quantity old">'. $row['product_price_old'] .'</span>
       <span class="quantity new">'. $row['product_price'] .'</span>
     </div>
   </div>
 </div>
   ';
  }
 }
 else
 {
  $output = '<h3>No Data Found</h3>';
 }
 echo $output;
}

?>