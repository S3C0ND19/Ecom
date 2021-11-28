<?php
include('./config/db.php'); 
$wishlist_details = '
<table class="wishlist__content-table">
<thead>
    <tr>
        <th class="wishlist__product-remove">&nbsp;</th>
        <th class="wishlist__product-img">&nbsp;</th>
        <th class="wishlist__product-name">PRODUCT NAME</th>
        <th class="wishlist__product-price">UNIT PRICE</th>
        <th class="wishlist__product-status">STOCK STATUS</th>
        <th class="wishlist__product-add">&nbsp;</th>
    </tr>';
    if(!empty($_SESSION["wishlist"]))
    {
        foreach($_SESSION["wishlist"] as $keys => $values)
        {
            $wishlist_details .= ' 
            <form method="post" action="shop_paging.php?action=add&id='.$values["item_id"].'" class="form-submit">  
                <tbody class="wishlist__items-wrapper">
                <tr>
                    <td class="wishlist__product-remove">
                        <a href="wishlist.php?action=delete&id='.$values["item_id"].'" class="product-remove__item">x</a>
                    </td>
                    <td class="wishlist__product-img">
                        <a href="product_details.php?id='.$values["item_id"].'" class="wishlist__product-img-link">
                            <img src="./admin/upload/'.$values["item_img"].'" alt="" width="80px" height="80px" style="object-fit:cover;"> 
                        </a>
                    </td>
                    <td class="wishlist__product-name">
                        <p class="wishlist__product-name-text">'.$values["item_name"].'</p>
                    </td>
                    <td class="wishlist__product-price">
                        <p class="wishlist__product-price-number">'.$values["item_price"].'$</p>
                    </td>
                    <td class="wishlist__product-status">
                        <span class="wishlist-in-stock">In Stock</span>
                    </td>
                    <td class="wishlist__product-add">
                        <a href=""></a>
                    </td>
                </tr>
                
        </tbody>
        </form>
            ';
        }
    }
    $wishlist_details .= '</table>';
if(isset($_GET["action"]))  
{  
     if($_GET["action"] == "delete")  
     {  
          foreach($_SESSION["wishlist"] as $keys => $values)  
          {  
               if($values["item_id"] == $_GET["id"])  
               {  
                    unset($_SESSION["wishlist"][$keys]);  
                    echo '<script>window.location="wishlist.php"</script>';  
               }  
          }  
     }  
}
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="wish-container">
                <div class="wishlist__heading">
                    <h5>Wishlist</h5>
                    <div class="wishlist__path">
                        <a href="" class="wishlist__path-home">Home</a>
                        <span>></span>
                        <p>Wish list</p>
                    </div>
                </div>
                <div class="wishlist__content">
                    <?php 
                        echo $wishlist_details;
                    ?>
                </div>
                    <?php
                          if (isset($_POST['btnSearch'])) { 
                            $keyword = $_POST['search'];
                            $query = ("SELECT * FROM product WHERE prd_name LIKE '%$keyword%' ORDER BY prd_name");  
                            $result_tasks = mysqli_query($conn, $query);  
                            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                              <div class="col l-4">
                                  <form method="post" action="shop_paging.php?action=add&<?php echo $row['prd_id']; ?>" class="form-submit">  
                                    <div class="products-details ">
                                      <div class="products-thumb">
                                        <div class="products-label">
                                          <div class="products-sale"><?php echo $row['prd_sale']; ?></div>
                                        </div>
                                        <div class="products-wrapper__img">
                                          <a href="product_details.php?id=<?php echo $row['prd_id']; ?>" class="products-details-link">      
                                            <img src="./admin/upload/<?php echo $row['prd_image']; ?>" alt="" class="products-img" alt="">
                                            <input type="hidden" name="hidden_img" value="'. $row['prd_image'] .'" />  
                                            <!-- <img src="./admin/upload/'. $row['prd_image_2'] .'" alt="" class="products-img hidden" alt=""> -->
                                            <img src="./admin/upload/<?php echo $row['prd_image_2']; ?>" alt=""  class="products-img hidden"alt="">
                                          </a>
                                        </div>                 
                                        <div class="products-button">
                                          <a href="" class="checkcartemty products-link add">
                                            <button type="submit" class="btnAddProductCart" name="add_to_cart">
                                              <i class="products-icon add ti-shopping-cart"></i>
                                              <i class="products-icon added fas fa-check"></i>
                                            </button>         
                                          </a>
                                          <a href="" class="products-link">
                                              <button type="submit" class="btnAddProductCart" name="add_to_wishlist">
                                                <i class="products-icon star far fa-star"></i>
                                              </button> 
                                          </a>
                                          <a href="" class="products-link">
                                            <i class="products-icon ti-search"></i>
                                          </a>
                                        </div>
                                      </div>
                                      <div class="products-description">
                                        <a class="products-name"></a>
                                        <span class="product-quantity-shop old">$<?php echo $row['prd_price_old']; ?></span>
                                        <span class="product-quantity-shop new">$<?php echo $row['prd_price']; ?></span>
                                        <input type="hidden" name="quantity" value="1" />  
                                        <input type="hidden" name="hidden_name" value="'. $row['prd_name'] .'" />  
                                        <input type="hidden" name="hidden_price" value="'. $row['prd_price'] .'" />  
                                      </div>
                                    </div>
                                  </form>
                                </div>
                        
            </div>
        <?php include('includes/footer.php'); ?> 
    </div> 
    <script src="assets/js/cart.js"></script>
    <script src="assets/js/emtycart.js"></script>  
</body>
</html>