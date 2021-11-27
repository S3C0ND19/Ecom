<?php
session_start();
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
            <tbody class="wishlist__items-wrapper">
            <tr>
                <td class="wishlist__product-remove">
                    <a href="wishlist.php?action=delete&id='.$values["item_id"].'" class="product-remove__item">x</a>
                </td>
                <td class="wishlist__product-img">
                    <a href="" class="wishlist__product-img-link">
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
                    <a  href="shop_paging.php?action=add&id='.$values["item_id"].'" name="add_to_cart" class="wishlist__product-add-link">Add to Cart</a>
                </td>
            </tr>
        </tbody>
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
            </div>
        <?php include('includes/footer.php'); ?> 
    </div> 
    <script src="assets/js/cart.js"></script>    
</body>
</html>