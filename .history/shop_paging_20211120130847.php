<?php 
include('./config/db.php'); 
$navigation = mysqli_query($conn,"SELECT * FROM category  WHERE cat_status='1' ORDER BY cat_id");
$brand = mysqli_query($conn,"SELECT * FROM brand ORDER BY brand_id");
             
  if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                    'item_id'               =>     $_GET["id"],  
                    'item_img'          =>     $_POST["hidden_img"],  
                    'item_name'               =>     $_POST["hidden_name"],  
                    'item_price'          =>     $_POST["hidden_price"],  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array; 
           }  
           else  
           {  
                echo '<script>alert("Bạn đã thêm sản phẩm này rồi!")</script>';
                echo '<script>window.location="shop_paging.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],
                'item_img'          =>     $_POST["hidden_img"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);
                }  
           }  
      }  
 }  
  
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
                          <img src="./admin/upload/<?php echo $value['brand_img']; ?>" alt="" class="category-brand-img" alt="">  
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
                          <li class="category-featured__list">
                            <div class="category-featured__img">
                              <a href="" class="category-featured__link-img">
                                <img src="./assets/img/cate3.jpg" alt="">
                              </a>
                            </div>
                            <div class="category-featured__description">
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <span class="category-featured__description-name">Cole Lounge Chair</span>
                              <span class="quantity old">$130.00</span>
                              <span class="quantity new">$125.00</span>
                            </div>
                          </li>
                          <li class="category-featured__list">
                            <div class="category-featured__img">
                              <a href="" class="category-featured__link-img">
                                <img src="./assets/img/cate3.jpg" alt="">
                              </a>
                            </div>
                            <div class="category-featured__description">
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <span class="category-featured__description-name">Cole Lounge Chair</span>
                              <span class="quantity old">$130.00</span>
                              <span class="quantity new">$125.00</span>
                            </div>
                          </li>
                          <li class="category-featured__list">
                            <div class="category-featured__img">
                              <a href="" class="category-featured__link-img">
                                <img src="./assets/img/cate3.jpg" alt="">
                              </a>
                            </div>
                            <div class="category-featured__description">
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <i class="category-featured__icon fas fa-star"></i>
                              <span class="category-featured__description-name">Cole Lounge Chair</span>
                              <span class="quantity old">$130.00</span>
                              <span class="quantity new">$125.00</span>
                            </div>
                          </li>
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
    <script> 
      $(document).ready(function(){
      filter_data();
      function filter_data()
      {
          $('.filter_data').html('<div id="loading" style="" ></div>');      
          var action = 'fetch_data';
          // var minimum_price = $('#hidden_minimum_price').val();
          // var maximum_price = $('#hidden_maximum_price').val();
          var category = get_filter('category');
          $.ajax({
              url:"fetch_data.php",
              method:"POST",
              data:{action:action, category:category},
              success:function(data){
                  $('.filter_data').html(data);                 
              }
          });
      }
      function get_filter(class_name)
      {
          var filter = [];
          $('.'+class_name+':checked').each(function(){
              filter.push($(this).val());
          });
          return filter;
      }

      $('.common_selector').click(function(){
          filter_data();
      });

      // $('#price_range').slider({
      //     range:true,
      //     min:1000,
      //     max:65000,
      //     values:[1000, 65000],
      //     step:500,
      //     stop:function(event, ui)
      //     {
      //         $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
      //         $('#hidden_minimum_price').val(ui.values[0]);
      //         $('#hidden_maximum_price').val(ui.values[1]);
      //         filter_data();
      //     }
      // });
      let result =[];

      });
    </script>
</body>
</html>