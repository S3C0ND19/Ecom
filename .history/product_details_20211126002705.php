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
                                    <img src="" alt="">
                                </div>
                                <div class="product-image-small">
                                    <img src="" alt="">
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
                                    <p>The EcoSmart Fleece Hoodie full-zip hooded jacket provides medium weight fleece comfort all year around. Feel better in this sweatshirt because Hanes keeps plastic bottles of landfills by using recycled polyester.7.8 ounce fleece sweatshirt made with up to 5 percent polyester created from recycled plastic.</p>
                                    <div class="product-details-stock">
                                        <span class="stock">OUR STOCK</span>
                                    </div>
                                    <a href="" class="product-details-wishlist">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </div>
                                <div class="product-details-meta">
                                    <span class="sku-wrapper">
                                        SKU: <span class="sku">D1112</span>
                                    </span>
                                    <span class="posted_in">
                                        Category: <a href="">Lighting</a>
                                    </span>
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