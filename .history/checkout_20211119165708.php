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
                </div>
            <div class="content-form">
                <div class="grid">
                    <div class="row">
                        <div class="col l-8">
                            <h3 class="form-heading">Bllling Details</h3>
                            <form action="">
                                <div class="form-group">
                                    <label  for="form-firstname" class="form-title">Firt name *</label>
                                    <input type="text" name=firtname class="form-control form__input" id="form-firstname" required>
                                </div>
                                <div class="form-group">
                                    <label  for="form-lastname" class="form-title">Last name *</label>
                                    <input type="text" name=lastname class="form-control form__input" id="form-lastname" required>
                                </div>
                                <div class="form-group">
                                    <label  for="form-address" class="form-title">Address </label>
                                    <input type="text" name=address class="form-control form__input" id="form-address" required>
                                </div>
                                <div class="form-group">
                                    <label  for="form-city" class="form-title">City</label>
                                    <input type="text" name=city class="form-control form__input" id="form-city" required>
                                </div>
                                <div class="form-group">
                                    <label  for="form-postcode" class="form-title">Postcode</label>
                                    <input type="number" name=postcode class="form-control form__input" id="form-postcode">
                                </div>                               
                                <div class="form-group">
                                    <label  for="form-email" class="form-title">Email</label>
                                    <input type="email" name=email class="form-control form__input" id="form-email" required>
                                </div>
                                <div class="form-group">
                                    <label  for="form-phone" class="form-title">Phone</label>
                                    <input type="number" name=phone class="form-control form__input" id="form-phone" required>
                                </div>
                            </form>
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