<?php 
include('./config/db.php'); 
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
            <div class="product-details-container">
                <div class="grid">
                    <div class="row">
                        <div class="col l-7">
                            <div class="product-details-image">
                                <div class="product-image-big">
                                    <img src="./assets/img/filter-latest2.jpg" alt="">
                                </div>
                                <div class="product-image-small">
                                    <img src="./assets/img/filter-latest2.jpg" alt="">
                                    <img src="./assets/img/filter-latest2.jpg" alt="">
                                    <img src="./assets/img/filter-latest2.jpg" alt="">
                                    <img src="./assets/img/filter-latest2.jpg" alt="">
                                </div>
                            </div>                         
                        </div>
                        <div class="col l-5">
                            <div class="product-details-information">
                                <div class="product-details-path">
                                    <a href="index.php" class="product-details-path-home">Home > <span>Details</span></a>
                                </div>
                                <div class="product-details-heading">
                                    <p class="product-details-name">Liam Pendant Lighting</p>
                                    <p class="product-details-price">$350.00</p>
                                </div>
                                <div class="product-details-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <div class="product-details-stock">
                                        <span class="stock">ADD TO CART</span>
                                    </div>
                                    <div class="product-details-wishlist">
                                        <a href="" class="product-details-wishlist-link">
                                            <i class="far fa-heart"></i>
                                        </a>
                                        <span>Add to Wishlist</span>
                                    </div>
                                </div>
                                <div class="product-details-meta">
                                    <span class="sku-wrapper">
                                        SKU: <span class="sku">D1112</span>
                                    </span>
                                    <span class="posted_in">
                                        Category: <a href="">Lighting</a>
                                    </span>
                                    <span class="tagged_as">
                                        <a href="">Hot</a>
                                        <a href="">Men</a>
                                    </span>
                                    <div class="social-icon">
                                        <label for="">Share</label>
                                        <div class="social-share">
                                            <a href=""><i class="fab fa-facebook-f"></i></a>
                                            <a href=""><i class="fab fa-twitter"></i></a>
                                            <a href=""><i class="fab fa-linkedin"></i></a>
                                            <a href=""><i class="fab fa-pinterest"></i></a>
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