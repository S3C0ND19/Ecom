<?php

//fetch_data.php

include('config/db.php');

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM product
  inner join category on product.prd_cat_id = category.cat_id;
    WHERE prd_cat_id = '1'
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

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output .= '
  <div class="col l-4">
   <div class="products-details ">
     <div class="products-thumb">
       <div class="products-label">
         <div class="products-sale">'. $row['prd_sale'] .'</div>
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
       <a class="products-name">'. $row['prd_name'] .'</a>
       <span class="quantity old">'. $row['prd_price_old'] .'</span>
       <span class="quantity new">'. $row['prd_price'] .'</span>
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