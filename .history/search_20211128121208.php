<?php 
include('./config/db.php'); 
$navigation = mysqli_query($conn,"SELECT * FROM category  WHERE cat_status='1' ORDER BY cat_id");
$brand = mysqli_query($conn,"SELECT * FROM brand ORDER BY brand_id");
$product = mysqli_query($conn,"SELECT * FROM product ORDER BY prd_id LIMIT 5");          
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
      <!-- Header shop -->
      <?php include('includes/nav.php'); ?>
      <!-- Nav -->
        <div class="navigation">
          <h4 class="navigation__heading">Shop</h4>
          <div class="navigation__path">
            <a href="./index.html" class="navigation__path-home">Home</a>
            <a class="icon__next">&#10095;</a>
            <span class="navigation__path-current">Shop</span>
          </div>         
          <div class="slick-container">
              <div class="slider variable-width">
              <?php foreach ($navigation as $key => $value): ?>             
                  <div class="normal">
                    <div class="inside navigation__product">
                      <a href="" class="navigation__product-link">
                        <img src="./admin/upload/<?php echo $value['cat_image']; ?>" alt="" class="navigation__product-img" alt="">     
                      </a>
                      <a href="" class="navigation__product-name"><?php echo $value['cat_name']; ?></a>
                    </div>
                  </div>
              <?php  endforeach ?>
                </div>
            </div>
        </div>
        </div>
      <!-- Category -->
        <div class="container">
          <div class="app__content">
            <div class="grid">
              <div class="row">
                <div class="col l-3">
                  <div class="category">
                    <nav class="category-nav">
                      <h3 class="category__heading">
                        CATEGORIES
                      </h3>
                      <ul class="category-list">
                      <?php foreach ($navigation as $key => $value): ?>  
                        <li class="category-item">                          
                            <div class="category-item-check">
                              <input type="checkbox"  class="common_selector category" value="<?php echo $value['cat_id'];?>">
                              <label class="category-item__link" ><?php echo $value['cat_name'];?></label>
                            </div>
                           <span  class="category-item__quantity">
                           <?php 
                                $getvalue = $value['cat_id'];                                            
                                $result=mysqli_query($conn,"SELECT count(prd_cat_id) as total from product
                                    WHERE prd_cat_id=$getvalue;
                                ");
                                $data=mysqli_fetch_assoc($result);
                                echo $data['total']                          
                          ?>                                               
                          </span>                        
                        </li>
                        <?php  endforeach ?>
                    </ul>
                    </nav>
                    <div class="category-price">
                      <h3 class="category__heading">
                        PRICE
                      </h3>
                      <div class="category-price__filtter">
                        <div class="category-price__slider">
                          <div class="category-price__range">                         
                          </div>
                          <span class="category-price__pull" style="left: 0%;"></span>
                          <span class="category-price__pull" style="left: 100%;"></span>
                        </div>
                        <div class="category-price__value">
                          <span class="category-price__value-text">Range : <span>$30 - $350</span></span>
                        </div>
                      </div>
                    </div>
                    <div class="category-color">
                      <h3 class="category__heading">
                        COLOR
                      </h3>
                      <div class="category-color-filter">
                        <ul class="category-color__item">
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral blue"></span>
                              <label for="" class="category-color__text">Blue</label>
                            </div>
                            <span class="category-color__count">1</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral brown"></span>
                              <label for="" class="category-color__text">Brown</label>
                            </div>
                            <span class="category-color__count">5</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral green"></span>
                              <label for="" class="category-color__text">Green</label>
                            </div>
                            <span class="category-color__count">4</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral grey"></span>
                              <label for="" class="category-color__text">Grey</label>
                            </div>
                            <span class="category-color__count">4</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral nude"></span>
                              <label for="" class="category-color__text">Nude</label>
                            </div>
                            <span class="category-color__count">4</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral pink"></span>
                              <label for="" class="category-color__text">Pink</label>
                            </div>
                            <span class="category-color__count">1</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral red"></span>
                              <label for="" class="category-color__text">Red</label>
                            </div>
                            <span class="category-color__count">1</span>
                          </li>
                          <li class="category-color__list">
                            <div class="category-color__name">
                              <span class="category-color__gerneral yellow"></span>
                              <label for="" class="category-color__text">Yellow</label>
                            </div>
                            <span class="category-color__count">2</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="category-size">
                      <h3 class="category__heading">
                        SIZE
                      </h3>
                      <ul class="category-size__items">
                        <li class="category-size__list">
                          <span class="category-size__details">L</span>
                        </li>
                        <li class="category-size__list">
                          <span class="category-size__details">M</span>
                        </li>
                        <li class="category-size__list">
                          <span class="category-size__details">S</span>
                        </li>
                        <li class="category-size__list">
                          <span class="category-size__details">XL</span>
                        </li>
                        <li class="category-size__list">
                          <span class="category-size__details">XS</span>
                        </li>
                      </ul>
                    </div>
                    <div class="category-brand">
                      <h3 class="category__heading">
                        BRANDS
                      </h3>
                      <ul class="category-brand__items">
                      <?php foreach ($brand as $key => $value): ?>    
                        <li class="category-brand_list">
                          <img src="./admin/upload/<?php echo $value['brand_img']; ?>" alt="" class="category-brand-img">  
                        </li>
                        <?php  endforeach ?>
                      </ul>
                    </div>
                    <div class="category-featured">
                      <h3 class="category__heading">
                        FEATURE PRODUCT
                      </h3>
                      <div class="category-featured__content">                        
                        <ul class="category-featured__item">
                        <?php foreach ($product as $key => $value): ?>     
                          <li class="category-featured__list">
                            <div class="category-featured__img">
                              <a href="" class="category-featured__link-img">
                                <img src="./admin/upload/<?php echo $value['prd_image']; ?>" alt="" >  
                              </a>
                            </div>
                            <div class="category-featured__description">
                              <i class="fas fa-star vote-start"></i>
                              <i class="fas fa-star vote-start"></i>
                              <i class="fas fa-star vote-start"></i>
                              <i class="fas fa-star vote-start"></i>
                              <i class="fas fa-star vote-start"></i>
                              <span class="category-featured__description-name"><?php echo $value['prd_name']; ?></span>
                              <span class="category-price old">$<?php echo $value['prd_price_old']; ?></span>
                              <span class="category-price new">$<?php echo $value['prd_price']; ?></span>
                            </div>
                          </li>
                          <?php  endforeach ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col l-9">
                  <div class="products">
                    <div class="products-heading">
                      <span class="products-heading_show">Showing all 29 results</span>
                      <div class="products-display">
                        <ul class="products-display__item">
                          <li class="products-display__list">
                            <span class="layer-first">
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-middle">
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-last">
                              <span></span>
                              <span></span>
                            </span>
                          </li>
                          <li class="products-display__list">
                            <span class="layer-first active">
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-middle active">
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-last active">
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                          </li>
                          <li class="products-display__list ">
                            <span class="layer-first">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-middle">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                            <span class="layer-last">
                              <span></span>
                              <span></span>
                              <span></span>
                              <span></span>
                            </span>
                          </li>
                          <li class="products-display__list">
                            <span class="layer-first">
                              <span></span>
                              <span class="layer-long"></span>
                            </span>
                            <span class="layer-middle">
                              <span></span>
                              <span class="layer-long"></span>
                            </span>
                            <span class="layer-last">
                              <span></span>
                              <span class="layer-long"></span>
                            </span>
                          </li>
                        </ul>
                        <div class="products-display-sort">
                          <input type="checkbox" hidden class="display__check" id="display__check">
                          <label for="display__check">
                              <span class="display__sort">Default Sorting
                              <i class="fas fa-sort-down"></i> 
                              </span>                             
                          </label>
                          <label for="display__check" class="display__overlay">
                          </label>     
                          <div class="display__sort-sub">
                            <ul class="display__sort-menu">
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Default Sorting</a>
                              </li>
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Sort By Popularity</a>
                              </li>
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Sort By Average Rating</a>
                              </li>
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Sort By Latest</a>
                              </li>
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Sort By Price : Low to Hight</a>
                              </li>
                              <li class="display__sort-menu-item">
                                <a href="#" class="display__sort-menu-link">Sort By Price : Hight to Low</a>
                              </li>
                            </ul>                            
                          </div>                 
                        </div>
                      </div>
                    </div>                  
                    <div class="grid">
                      <div class="row no-gutters products__rows filter_data">
                        <?php
                            if(isset($_POST["btnSearch"]))
                            {
                            $keyword = $_POST['search'];
                            $query = "SELECT * FROM product WHERE prd_name LIKE '%$keyword%' ORDER BY prd_name";  
                            $statement = $connect->prepare($query);
                            $statement->execute();
                            $result = $statement->fetchAll();
                            $total_row = $statement->rowCount();
                            $output = '';
                            if($total_row > 0)
                            {
                            foreach($result as $row)
                            {
                            $output .= '
                            <div class="col l-4">
                                <form method="post" action="shop_paging.php?action=add&id='. $row['prd_id'] .'" class="form-submit">  
                                <div class="products-details ">
                                    <div class="products-thumb">
                                    <div class="products-label">
                                        <div class="products-sale">'. $row['prd_sale'] .'</div>
                                    </div>
                                    <div class="products-wrapper__img">
                                        <a href="product_details.php?id='. $row['prd_id'] .'" class="products-details-link">      
                                        <img src="./admin/upload/'. $row['prd_image'] .'" alt="" class="products-img" alt="">
                                        <input type="hidden" name="hidden_img" value="'. $row['prd_image'] .'" />  
                                        <img src="./admin/upload/'. $row['prd_image_2'] .'" alt="" class="products-img hidden" alt="">
                                        </a>
                                    </div>                 
                                    <div class="products-button">
                                        <a href="" class="checkcartemty products-link add">
                                        <button type="submit" class="btnAddProductCart" name="add_to_cart">
                                            <i class="products-icon add ti-shopping-cart"></i>
                                            <i class="products-icon added fas fa-check"></i>
                                        </button>         
                                        </a>
                                        <a href="" class="products-link">
                                            <button type="submit" class="btnAddProductCart" name="add_to_wishlist">
                                            <i class="products-icon star far fa-star"></i>
                                            </button> 
                                        </a>
                                        <a href="" class="products-link">
                                        <i class="products-icon ti-search"></i>
                                        </a>
                                    </div>
                                    </div>
                                    <div class="products-description">
                                    <a class="products-name">'. $row['prd_name'] .'</a>
                                    <span class="product-quantity-shop old">$'. $row['prd_price_old'] .'</span>
                                    <span class="product-quantity-shop new">$'. $row['prd_price'] .'</span>
                                    <input type="hidden" name="quantity" value="1" />  
                                    <input type="hidden" name="hidden_name" value="'. $row['prd_name'] .'" />  
                                    <input type="hidden" name="hidden_price" value="'. $row['prd_price'] .'" />  
                                    </div>
                                </div>
                                </form>
                            </div>
                            ';
                            }
                            }
                            else
                            {
                            $output = '<h3>No Product Found</h3>';
                            }
                            echo $output;
                            }

                            ?>                                             
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/cart.js"></script>
    <script src="assets/js/emtycart.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>              
</body>
</html>