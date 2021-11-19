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
            <div class="content-cart">
                <div class="grid">
                    <div class="row">
                        <div class="col l-8">
                            <h3 class="form-heading">Bllling Details</h3>
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