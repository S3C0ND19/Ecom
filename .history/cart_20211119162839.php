<?php
include('./config/db.php');
$product = mysqli_query($conn,"SELECT * FROM product  WHERE prd_id IN (2,3,4)");
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <!-- header -->
        <?php include('includes/nav.php'); ?>
        <!-- content -->
        <div class="content">
            <div class="container">
              <!-- Nav -->
                <div class="content__navigation">
                    <ul class="content__navigation-item">
                        <?php
                            $quantity = $quantity + floatval($value['prd_id']);
                        ?>
                        <li class="content__navigation-list">
                            <a href="" class="content__navigation-link active">SHOPPING CART</a>
                        </li>
                        <li class="content__navigation-list">
                            <a href="" class="content__navigation-link">CHECKOUT</a>
                        </li>
                        <li class="content__navigation-list">
                            <a href="" class="content__navigation-link">ORDER TRACKING</a>
                        </li>
                    </ul>
                </div>
                <!-- Cart -->
                <div class="content_cart">
                    <div class="grid">
                        <div class="row">
                            <div class="col l-8">
                              <!-- Form Cart -->
                                <form class="content_cart-products">
                                    <table class="content__cart-table">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">PRODUCT</th>
                                                <th class="product-price">PRICE</th>
                                                <th class="product-quantity">QUANTITY</th>
                                                <th class="product-subtotal">SUBTOTAL</th>
                                                <th class="product-remove">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($product as $key => $value): ?> 
                                          <?php  
                                            $subtotal = floatval(($value['prd_price'])) * floatval(($value['prd_id']));
                                            $total = $total + floatval($subtotal);
                                               
                                          ?>
                                            <tr class="content__cart-items">                                               
                                                <td class="product-thumbnail">
                                                    <a href="" class="content__cart-link-img">
                                                        <img src="./admin/upload/<?php echo $value['prd_image']; ?>" alt="" class="content__cart-img" alt="">  
                                                    </a>
                                                    <div class="content__cart-name">
                                                        <a href="" class="content cart-name-link"><?php echo $value['prd_name'];?></a>
                                                    </div>
                                                </td>
                                                <td class="product-price">
                                                    <span class="product-price__value">$<?php echo $value['prd_price'];?></span>
                                                </td>
                                                <td class="product-quantity">
                                                 <div class="quantity">
                                                  <button type="button" class="plus">+</button>
                                                  <input type="number" class="input-number" value="<?php echo $value['prd_id'];?>">
                                                  <button type="button" class="minus">-</button>
                                                 </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="product-subtotal__value">$<?php echo number_format($subtotal, 2); ?></span>
                                                </td>
                                                <td class="product-remove">
                                                    <a href="" class="product-remove__item">x</a>
                                                </td>
                                            </tr>
                                            <?php  endforeach ?>                                            
                                            <tr class="content__cart-actions">
                                                <td colspan="6" class="actions">
                                                    <div class="content__cart-bottom">
                                                        <div class="coupon">
                                                            <input type="text" class="coupon-input" placeholder="Coupon code">
                                                            <button type="submit" class="btn-submit__coupon" name="apply-coupon" value="Apply coupon">APPLY COUPON</button>
                                                        </div>
                                                        <div class="content__continue">
                                                           <a href="" class="content__continue-link">Continue Shopping</a>
                                                        </div>
                                                        <button type="submit" class="btn-submit__update" name="update-cart" value="Update cart">UPDATE CART</button>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="col l-4">
                              <!-- Total -->
                              <div class="cart-total">
                                <h3 class="cart-total__heading">CART TOTALS</h3>
                                <div class="cart-total__content">
                                  <div class="cart-total__sub">
                                    <p class="cart-total__title">Subtotal</p>
                                    <p class="cart-total__sub-value">$<?php echo number_format($total, 2); ?></p>
                                  </div>
                                  <div class="cart-total__ship">
                                    <p class="cart-total__title">Shipping</p>
                                    <div class="cart-total__ship-wrapper">
                                      <ul class="cart-total__ship-options">
                                        <li class="cart-total__ship-list">
                                          <input type="radio" name="freeShipping" value="" id="btnFreeShipping" class="btnFreeShipping">
                                          <label for="freeShipping" class="cart-total__ship-label">Free shipping</label>
                                        </li>
                                        <li class="cart-total__ship-rate">
                                          <input type="radio" name="flatRate" value="" id="flatRate" class="btnFlatRate">
                                          <label for="flatRate" class="cart-total__ship-label">Flat rate</label>
                                        </li>
                                      </ul>
                                      <p class="cart-total__ship-description">Shipping options will be updated during checkout.</p>
                                      <a href="" class="cart-total__ship-calculator">Calculate shipping</a>
                                    </div>
                                  </div>
                                  <div class="total">
                                    <p class="cart-total__title">Total</p>
                                    <p class="total__value">$<?php echo number_format($total, 2); ?></p>
                                  </div>
                                  <div class="checkout">
                                    <a href="" class="checkout-link">PROCEED TO CHECKOUT</a>
                                  </div>                          
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include('includes/footer.php'); ?>
    </div>
    <script src="assets/js/cart.js"></script> 
</body>
</html>