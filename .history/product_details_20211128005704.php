<?php 
include('./config/db.php');
if(isset($_GET['id'])) { 
    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE prd_id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $id = $row['prd_id'];
        $name = $row['prd_name'];
        $brand = $row['prd_brand'];
        $category =$row['prd_cat_id'];
        $description = $row['prd_description'];
        $price = $row['prd_price'];
        $price_old = $row['prd_price_old'];
        $old_image = $row['prd_image'];
        $old_image2 = $row['prd_image_2'];
        $sale = $row['prd_sale'];
    }
}
if(isset($_POST["add_to_cart"]))  
{  
     if(isset($_SESSION["shopping_cart2"]))  
     {  
          $item_array_id = array_column($_SESSION["shopping_cart2"], "item_id");  
          if(!in_array($_GET["id"], $item_array_id))  
          {  
               $count = count($_SESSION["shopping_cart"]);  
               $item_array = array(  
                   'item_id'               =>     $_GET["id"],  
                   'item_img'          =>     $_POST["hidden_img"],  
                   'item_name'               =>     $_POST["hidden_name"],  
                   'item_price'          =>     $_POST["hidden_price"],
                   'item_quantity'          =>     $_POST["quantity"]
               );  
               $_SESSION["shopping_cart2"][$count] = $item_array; 
          }  
     }  
     else  
     {  
          $item_array = array(  
               'item_id'               =>     $_GET["id"],
               'item_img'          =>     $_POST["hidden_img"],  
               'item_name'               =>     $_POST["hidden_name"],  
               'item_price'          =>     $_POST["hidden_price"],  
               'item_quantity'          =>     $_POST["quantity"]
          );  
          $_SESSION["shopping_cart2"][0] = $item_array;  
     }
    
}
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="product-details-wrapper">
                <div class="full-screen">
                    <div class="product-details-container">
                        <div class="grid">
                            <div class="row">
                                <form method="post" action="product_details.php?action=add&id='. $row['prd_id'] .'" class="form-submit">  
                                    <div class="col l-7">
                                        <div class="product-details-image">
                                            <div class="product-image-big">
                                                <img src="<?php echo "./admin/upload/" .$row['prd_image'];?>" alt="">
                                                <input type="hidden" name="hidden_img" value="<?php echo $old_image ?>" />  
                                            </div>
                                            <div class="wraper-img-small">
                                                <div class="product-image-small">
                                                    <img src="<?php echo "./admin/upload/" .$row['prd_image_2'];?>" alt="">   
                                                    <img src="<?php echo "./admin/upload/" .$row['prd_image'];?>" alt="">
                                                    <img src="<?php echo "./admin/upload/" .$row['prd_image_2'];?>" alt="">  
                                                    <img src="<?php echo "./admin/upload/" .$row['prd_image'];?>" alt="">  
                                                    <img src="<?php echo "./admin/upload/" .$row['prd_image_2'];?>" alt="">    
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                    <div class="col l-5">
                                        <div class="product-details-information">
                                            <div class="product-details-path">
                                                <a href="index.php" class="product-details-path-home">Home > <span>Details</span></a>
                                            </div>
                                            <div class="product-details-heading">
                                                <p class="product-details-name"><?php echo $name; ?></p>
                                                <div class="price-container">
                                                    <p class="product-details-price-old">$<?php echo $price_old; ?></p>
                                                    <p class="product-details-price">$<?php echo $price; ?></p>
                                                    <p class="product-details-price-sale"><?php echo $sale; ?></p>
                                                    <input type="hidden" name="quantity" value="1" />  
                                                    <input type="hidden" name="hidden_name" value="<?php echo $name; ?>" />  
                                                    <input type="hidden" name="hidden_price" value="<?php echo $price; ?>" />  
                                                </div>
                                            </div>
                                            <div class="product-details-description">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            
                                                    <a href="" class="add-cart">
                                                        <button name="add_to_cart" type="submit" class="product-details-add-cart">
                                                            ADD TO CART
                                                        </button>
                                                    </a>
                                            
                                                <div class="product-details-wishlist">
                                                    <a href="" class="product-details-wishlist-link">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                    <span>Add to Wishlist</span>
                                                </div>
                                            </div>
                                            <div class="product-details-meta">
                                                <span class="meta-title">
                                                    Brand: <span class="meta-title-content"><?php echo $brand; ?></span>
                                                </span>
                                                <span class="meta-title">
                                                    Category: <a href="" class="meta-title-content">
                                                        <?php 
                                                            switch ($row['prd_cat_id'])
                                                            {
                                                                case 1 :
                                                                    echo 'Armchairs';
                                                                    break;
                                                                case 2:
                                                                    echo 'Bath Room';
                                                                    break;
                                                                case 3:
                                                                    echo 'Dining Chairs';
                                                                    break;
                                                                case 4:
                                                                    echo 'Dining Tables';
                                                                    break;
                                                                case 5 :
                                                                    echo 'Lightings';
                                                                    break;
                                                                case 1 :
                                                                    echo 'Armchairs';
                                                                    break;
                                                                case 2:
                                                                    echo 'Bath Room';
                                                                    break;
                                                                case 3:
                                                                    echo 'Dining Chairs';
                                                                    break;
                                                                case 4:
                                                                    echo 'Dining Tables';
                                                                    break;
                                                                case 5 :
                                                                    echo 'Lightings';
                                                                    break;
                                                                case 6 :
                                                                    echo 'Living Room';
                                                                    break;
                                                                case 7:
                                                                    echo 'Office';
                                                                    break;
                                                                case 8:
                                                                    echo 'Seating';
                                                                    break;
                                                                case 9:
                                                                    echo 'Sofas';
                                                                    break;
                                                                case 10 :
                                                                    echo 'Special';
                                                                    break;
                                                                case 11 :
                                                                    echo 'Table';
                                                                    break; 
                                                                default:
                                                                    echo 'Không tìm thấy';
                                                                    break;
                                                            }                               
                                                        ?>
                                                    </a>
                                                </span>
                                                <span class="meta-title">
                                                    Tags: 
                                                    <a href="" class="meta-title-content">Hot</a>
                                                    <a href="" class="meta-title-content">Men</a>
                                                </span>
                                                <div class="social-icon">
                                                    <label class="meta-title-lable" for="">Share: </label>
                                                    <div class="social-share">
                                                        <a href="" class="meta-title-content"><i class="meta-title-content fab fa-facebook-f"></i></a>
                                                        <a href="" class="meta-title-content"><i class="fab fa-twitter"></i></a>
                                                        <a href="" class="meta-title-content"><i class="fab fa-linkedin"></i></a>
                                                        <a href="" class="meta-title-content"><i class="fab fa-pinterest"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-details-content">
                    <div class="product-details-tab-description">
                        <p class="product-details-tab-title">Description</p>
                        <span class="product-details-tab-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </span>                       
                    </div>
                    <div class="product-details-tab-reviews">
                        <p class="product-details-tab-title">Reviews</p>
                        <div class="product-details-tab-reviews-content">
                            <p class="product-details-tab-reviews-heading">Reviews</p>
                            <span class="reviews-history">There are no reviews yet.</span>
                            <div class="review-form">
                                <span class="comment-reply-title">
                                    <i class="far fa-edit"></i>BE THE FIRST TO REVIEW "<?php echo $name ?>"
                                </span>
                                <span class="notes-review">Your email address will not be published. Required fields are marked *</span>
                                <p class="rating">Your rating
                                    <i class="rating-star fas fa-star"></i>
                                    <i class="rating-star fas fa-star"></i>
                                    <i class="rating-star fas fa-star"></i>
                                    <i class="rating-star fas fa-star"></i>
                                    <i class="rating-star fas fa-star"></i>
                                </p>
                                <div class="content-info-reviews">
                                    <div class="content-info-reviews-left">
                                        <input type="text" placeholder="Name*" class="input-reviews input-reviews-name">
                                        <input type="text" placeholder="Email*" class=" input-reviews input-reviews-email">
                                        <?php
                                        if (isset($_SESSION["login"])){
                                                echo "<input type='submit' value='SUBMIT' class='input-reviews-submit'>";
                                        }else {
                                            echo "
                                            <a href='login.php'>
                                                <input type='submit' value='SUBMIT' class='input-reviews-submit'>
                                            </a>
                                            ";
                                        }
                                        ?>
                                    </div>
                                    <div class="content-info-reviews-right">
                                        <textarea class="input-reviews-content" name="" id="" cols="30" rows="10" placeholder="Your Reviews"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="other-reviews">
                        <p class="product-details-tab-title">Other Reviews</p>
                        <ul class="reviews-content">
                            <li class="review-list">                           
                                <p class="review-name">By Lisa</p>
                                <p class="reiew-email">lisa@gmail.com</p>
                                <span class="review-content">Sản phẩm rất tốt !~~</span>
                            </li>
                            <li class="review-list">
                                <p class="review-name">By John</p>
                                <p class="reiew-email">john@gmail.com</p>
                                <span class="review-content">Ghế có độ đàn hồi tốt! 10đ</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php include('includes/footer.php'); ?>
    </div>
    <script src="assets/js/cart.js"></script> 
    <script src="assets/js/reviews.js"></script>
    <script src="assets/js/emtycart.js"></script>
</body>
</html>