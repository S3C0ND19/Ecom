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
                    <table class="wishlist__content-table">
                        <thead>
                            <tr>
                                <th class="wishlist__product-remove">&nbsp;</th>
                                <th class="wishlist__product-img">&nbsp;</th>
                                <th class="wishlist__product-name">PRODUCT NAME</th>
                                <th class="wishlist__product-price">UNIT PRICE</th>
                                <th class="wishlist__product-status">STOCK STATUS</th>
                                <th class="wishlist__product-add">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody class="wishlist__items-wrapper">
                            <tr>
                                <td class="wishlist__product-remove">
                                    <a href="" class="product-remove__item">x</a>
                                </td>
                                <td class="wishlist__product-img">
                                    <a href="" class="wishlist__product-img-link">
                                        <img src="./assets/img/filter-latest3.1.jpg" alt="" width="80px" height="80px" style="object-fit:cover;">
                                    </a>
                                </td>
                                <td class="wishlist__product-name">
                                    <p class="wishlist__product-name-text">Fatboy Square Pillow</p>
                                </td>
                                <td class="wishlist__product-price">
                                    <p class="wishlist__product-price-number">$120.00 – $180.00</p>
                                </td>
                                <td class="wishlist__product-status">
                                    <span class="wishlist-in-stock">In Stock</span>
                                </td>
                                <td class="wishlist__product-add">
                                    <a href="" class="wishlist__product-add-link">Add to Cart</a>
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
        <?php include('includes/footer.php'); ?> 
    </div>       
</body>
</html>