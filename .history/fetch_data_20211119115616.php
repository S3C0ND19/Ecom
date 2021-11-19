<?php

//fetch_data.php

include('config/db.php');

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM product
  inner join category on  product.prd_cat_id = category.cat_id
  WHERE prd_status='1'
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
   
   AND cat_id  IN('".$category_filter."')
  ";
 }
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
   <form method="post" action="shop_paging.php?action=add&id='. $row['prd_id'] .'">  
   <div class="products-details ">
     <div class="products-thumb">
       <div class="products-label">
         <div class="products-sale">'. $row['prd_sale'] .'</div>
       </div>
       <div class="products-wrapper__img">
         <a href="" class="products-details-link">      
           <img src="./admin/upload/'. $row['prd_image'] .'" alt="" class="products-img" alt="">
           <input type="hidden" name="hidden_img" value="'. $row['prd_image'] .'" />  
           <img src="./admin/upload/'. $row['prd_image_2'] .'" alt="" class="products-img hidden" alt="">
         </a>
       </div>                 
       <div class="products-button">
         <a href="" class="products-link">
          <button type="submit" class="btnAddProductCart" name="add_to_cart">
            <i class="products-icon ti-shopping-cart"></i>
          </button>         
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
       <span class="product-quantity-shop old">'. $row['prd_price_old'] .'</span>
       <span class="product-quantity-shop new">$'. $row['prd_price'] .'</span>
       <input type="hidden" name="hidden_name" value="'. $row['prd_name'] .'" />  
        <input type="hidden" name="hidden_price" value="'. $row['prd_price'] .'" />  
     </div>
   </div>
   </form> 
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