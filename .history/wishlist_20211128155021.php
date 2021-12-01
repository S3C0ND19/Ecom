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
                   
            </div>
            <svg width="60px" height="60px" viewBox="0 0 60 60" cursor="pointer"><svg x="0" y="0" width="60px" height="60px"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g><circle fill="#0A7CFF" cx="30" cy="30" r="30"></circle><svg x="10" y="10"><g transform="translate(0.000000, -10.000000)" fill="#FFFFFF"><g id="logo" transform="translate(0.000000, 10.000000)"><path d="M20,0 C31.2666,0 40,8.2528 40,19.4 C40,30.5472 31.2666,38.8 20,38.8 C17.9763,38.8 16.0348,38.5327 14.2106,38.0311 C13.856,37.9335 13.4789,37.9612 13.1424,38.1098 L9.1727,39.8621 C8.1343,40.3205 6.9621,39.5819 6.9273,38.4474 L6.8184,34.8894 C6.805,34.4513 6.6078,34.0414 6.2811,33.7492 C2.3896,30.2691 0,25.2307 0,19.4 C0,8.2528 8.7334,0 20,0 Z M7.99009,25.07344 C7.42629,25.96794 8.52579,26.97594 9.36809,26.33674 L15.67879,21.54734 C16.10569,21.22334 16.69559,21.22164 17.12429,21.54314 L21.79709,25.04774 C23.19919,26.09944 25.20039,25.73014 26.13499,24.24744 L32.00999,14.92654 C32.57369,14.03204 31.47419,13.02404 30.63189,13.66324 L24.32119,18.45264 C23.89429,18.77664 23.30439,18.77834 22.87569,18.45674 L18.20299,14.95224 C16.80079,13.90064 14.79959,14.26984 13.86509,15.75264 L7.99009,25.07344 Z"></path></g></g></svg></g></g></svg></svg>
        <?php include('includes/footer.php'); ?> 
    </div> 
    <script src="assets/js/cart.js"></script>
    <script src="assets/js/emtycart.js"></script>  
</body>
</html>