<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
        <div class="content">
            <div class="container">
                <div class="content__navigation">
                        <ul class="content__navigation-item">
                            <li class="content__navigation-list">
                                <a href="cart.php" class="content__navigation-link active">SHOPPING CART</a>
                            </li>
                            <li class="content__navigation-list">
                                <a href="checkout.php" class="content__navigation-link">CHECKOUT</a>
                            </li>
                            <li class="content__navigation-list">
                                <a href="" class="content__navigation-link">ORDER TRACKING</a>
                            </li>
                        </ul>
                </div>
                <div class="content-form">
                    <div class="grid">
                        <div class="row">
                            <div class="col l-8">
                                <h3 class="form-heading">Bllling Details</h3>
                                <form action="">
                                    <div class="form-group">
                                        <label  for="form-firstname" class="form-title">Firt name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" name=firtname class="form-control form__input" id="form-firstname" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="form-lastname" class="form-title">Last name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" name=lastname class="form-control form__input" id="form-lastname" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="form-address" class="form-title">Address <abbr class="required" title="required">*</abbr> </label>
                                        <input type="text" name=address class="form-control form__input" id="form-address" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="form-city" class="form-title">City <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" name=city class="form-control form__input" id="form-city" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="form-postcode" class="form-title">Postcode</label>
                                        <input type="number" name=postcode class="form-control form__input" id="form-postcode">
                                    </div>                               
                                    <div class="form-group">
                                        <label  for="form-email" class="form-title">Email <abbr class="required" title="required">*</abbr></label>
                                        <input type="email" name=email class="form-control form__input" id="form-email" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="form-phone" class="form-title">Phone <abbr class="required" title="required">*</abbr></label>
                                        <input type="number" name=phone class="form-control form__input" id="form-phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label  for="form-note" class="form-title">Order notes (optional)</label>
                                        <textarea name=note class="form-control form__input" id="form-note" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="col l-4">
                                <div class="cart-total-checkout">
                                   <div class="cart-checkout-container">
                                   <p class="cart-checkout-heading">PRODUCT</p>
                                    <div class="cart-total__content">
                                        <div class="cart-checkout-product">
                                            <div class="cart-item">
                                                <div class="info-product">
                                                    <div class="cart-product-thumble">
                                                        <img src="./assets/img/filter-latest3.1.jpg" alt=""> 
                                                    </div>
                                                    <div class="cart-product-name">
                                                        <p>DELLA CHAIR - NAVY </p>
                                                        <span class="cart-product-quantity">Quantity: 1</span>
                                                    </div>
                                                </div>
                                                <div class="cart-product-total">
                                                    <span>$990.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="info-product">
                                                    <div class="cart-product-thumble">
                                                        <img src="./assets/img/filter-latest3.1.jpg" alt=""> 
                                                    </div>
                                                    <div class="cart-product-name">
                                                        <p>DELLA CHAIR - NAVY </p>
                                                        <span class="cart-product-quantity">Quantity: 1</span>
                                                    </div>
                                                </div>
                                                <div class="cart-product-total">
                                                    <span>$990.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-checkout-subtotal">
                                            <p>Subtotal</p>
                                            <p class="cart-checkout-subtotal-value">$9999</p>
                                        </div>
                                        <div class="cart-checkout-ship">
                                            <p class="cart-total__title">Shipping</p>
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
                                        </div>
                                        <div class="checkout-total">
                                            <p class="cart-total__title">Total</p>
                                            <p class="total__value">$293,05</p>
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
        </div>
        <?php include('includes/footer.php'); ?>
    </div>
    <script src="assets/js/cart.js"></script> 
</body>
</html>