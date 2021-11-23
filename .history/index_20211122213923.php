<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNIO | Funio Furniture Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://www.editorx.com/favicon.ico" type="image/gif" sizes="16x16">
</head>
<body>
    <div class="wrapper">
      <!-- Header -->
      <?php include('includes/nav.php'); ?>
      <!-- Background -->
      <div class="background__container">
            <div class="background">
              <img srcset="./assets/img/background1.jpeg 2x" alt="background" class="background__img">
              <div class="information">
                <p class="information__description">10% OF ALL ITEMS</p>
                <p class="information__name">Hanging lamp consists</p>
                <a href="shop_paging.php" class="information__shop-link">
                  SHOP COLLECTION
                </a>
              </div>
            </div>
            <div class="background">
              <img srcset="./assets/img/background2.jpeg 2x" alt="background" class="background__img">
              <div class="information">
                <p class="information__description">NEW ARRIVALS</p>
                <p class="information__name">Cristalplant®
                  <br> bathtub
                </p>
                <a href="" class="information__shop-link">
                  SHOP COLLECTION
                </a>
              </div>
            </div>
            <div class="background">
              <img srcset="./assets/img/background3.jpeg 2x" alt="background" class="background__img">
              <div class="information">
                <p class="information__description">SOFAS & ARMCHAIRS</p>
                <p class="information__name">Armchairs 
                  <br>
                  with armrests</p>
                <a href="" class="information__shop-link">
                  SHOP COLLECTION
                </a>
              </div>
            </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>     
      <div class="category">
          <div class="category__container">
            <div class="category__wrapper">
            <div class="category__title">
              <h2 class="category__title-details">Top Categories</h2>
            </div>
            <div class="slider_category">           
                <div class="category__product-wrapper-img">
                  <a href="shop_paging.php" class="category-link">
                    <img src="./assets/img/cate1.png" alt="" class="category__product-img">
                  </a>
                  <div class="category__product-link">
                    <a href="shop_paging.php">BATH ROOM</a>
                  </div>
                </div>
                <div class="category__product-wrapper-img">
                  <a href="shop_paging.php" class="category-link">
                    <img src="./assets/img/cate2.jpg" alt="" class="category__product-img">
                  </a>
                  <div class="category__product-link">
                    <a href="shop_paging.php">LIVING ROOM</a>
                  </div>
                </div>
                <div class="category__product-wrapper-img">
                  <a href="shop_paging.php" class="category-link">
                    <img src="./assets/img/cate3.jpg" alt="" class="category__product-img">
                  </a>
                  <div class="category__product-link">
                    <a href="shop_paging.php">LIVING ROOM</a>
                  </div>
                </div>
                <div class="category__product-wrapper-img">
                  <a href="shop_paging.php" class="category-link">
                    <img src="./assets/img/cate4.jpg" alt="" class="category__product-img">
                  </a>
                  <div class="category__product-link">
                    <a href="shop_paging.php">OFFICE</a>
                  </div>
                </div>
                <div class="category__product-wrapper-img">
                  <a href="shop_paging.php" class="category-link">
                    <img src="./assets/img/cate5.jpg" alt="" class="category__product-img">
                  </a>
                  <div class="category__product-link">
                        <a href="shop_paging.php">SEATING</a>
                  </div>
                </div>
                <div class="category__product-wrapper-img ">
                  <a href="shop_paging.php" class="category-link">
                    <img src="./assets/img/cate6.jpg" alt="" class="category__product-img">
                  </a>
                  <div class="category__product-link">
                        <a href="shop_paging.php">TABLES</a>
                  </div>
                </div>                     
            </div>
            </div>
          </div>
      </div>
     
      <!-- Collections -->
      <div class="colections">
        <div class="colections__container">
          <div class="colections__wrapper">
            <a href="">
              <img src="./assets/img/colection1.jpg" alt="" class="colections__img">
            </a>
            <div class="colections__content">
              <p class="colections__content-description">FROM LOVESEATS TO SECTIONALS.</p>
              <p class="colections__content-name">Comfy Loungings</p>
              <a href="" class="colections__content-link">
                Explore Collection
              </a>
            </div>
          </div>
          <div class="colections__wrapper">
            <a href="">
              <img src="./assets/img/collections2.jpg" class="colections__img">
            </a>
            <div class="colections__content">
              <p class="colections__content-description">SALE UP TO 20% OFF ALL ITEMS</p>
              <p class="colections__content-name">Scandinavian Style</p>
              <a href="" class="colections__content-link">
                Explore Collection
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Filter -->
      <div class="filter">
        <div class="container">
          <div class="filter__order">
            <ul class="filter__oder-item">
              <li class="filter__oder-list active filter__active" onclick="filterSelection('latest')">
                Latest Products
              </li>
              <li class="filter__oder-list"  onclick="filterSelection('sellers')">
                Best Sellers
              </li>
              <li class="filter__oder-list" onclick="filterSelection('featured')">
                Featured Products
              </li>
            </ul>
          </div>
          <div class="filter__products latest filter__products-show">
            <div class="filter__products-row">
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest1.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest2.2.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest2.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest3.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest3.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest4.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest4.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest5.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest5.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest6.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest6.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest7.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest7.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest8.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest8.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest9.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest9.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest10.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest10.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="filter__products sellers">
            <div class="filter__products-row">
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/img_sale/sale_1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/img_sale/sale_1.1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/img_sale/sale_2.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/img_sale/sale_2.1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/img_sale/sale_3.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/img_sale/sale_3.1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/img_sale/sale_4.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/img_sale/sale_4.1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/img_sale/sale_5.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/img_sale/sale_5.1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/img_sale/sale_6.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/img_sale/sale_6.1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/img_sale/sale_7.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/img_sale/sale_7.1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/img_sale/sale_8.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/img_sale/sale_8.1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/img_sale/sale_9.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/img_sale/sale_9.1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/img_sale/sale_10.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/img_sale/sale_10.1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="filter__products featured">
            <div class="filter__products-row">
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest1.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest1.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest2.2.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest2.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest3.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest3.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest4.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest4.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest5.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest5.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest6.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest6.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest7.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest7.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest8.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest8.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>
              <div class="filter__products-col">
                <div class="filter__products-thumb">
                  <div class="filter__products-label">
                    <div class="filter__product-sale">-10%</div>
                  </div>
                  <div class="filter__products-wrapper-img">
                    <a href="" class="filter__products-link">
                      <img src="./assets/img/filter-latest9.1.jpg" alt="" class="filter__products-img">
                      <img src="./assets/img/filter-latest9.jpg" alt="" class="filter__products-img-hidden">
                    </a>
                  </div>                 
                  <div class="filter__product-button">
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-shopping-cart"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon far fa-star"></i>
                    </a>
                    <a href="" class="filter__product-button-link">
                      <i class="filter__product-button-icon ti-search"></i>
                    </a>
                  </div>
                </div>
                <div class="filter__products-description">
                  <a class="filter__products-name">Alvarado Sideboard</a>
                  <span class="filter__products-quantity-old">$200.00</span>
                  <span class="filter__products-quantity-new">$180.00</span>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Designer -->
      <div class="center">
            <div class="designer__main-img">
              <a href="" class="designer__main-link">
                <img src="./assets/img/designer/designer__3.jpg" alt="" class="designer__img">
              </a>
            </div>
            <div class="designer__main-img">
              <a href="" class="designer__main-link">
                <img src="./assets/img/designer/designer__1.jpg" alt="" class="designer__img">
              </a>
            </div>
            <div class="designer__main-img">
              <a href="" class="designer__main-link">
                <img src="./assets/img/designer/designer__2.jpg" alt="" class="designer__img">
              </a>
            </div>
      </div>
      <div class="clear"></div>
      <!-- <div class="designer">
        <p class="designer__heading">Collection</p>
        <div class="designer__arrow designer__arrow-prev">
          <i class="fas fa-long-arrow-alt-left slick-arrow slick-prev"></i>
        </div>
        <div class="designer_wrapper">
          <div class="designer__main ">
            <div class="designer__main-img">
              <a href="" class="designer__main-link">
                <img src="./assets/img/designer/designer__3.jpg" alt="" class="designer__img">
              </a>
            </div>
            <div class="designer__main-content" hidden="true">
              <p class="designer__main-content-title">Fall Collection From Hightower</p>
              <a href="" class="designer__main-content-link">SHOP COLLECTION</a>
            </div>
          </div>
          <div class="designer__main " >
            <div class="designer__main-img">
              <a href="" class="designer__main-link">
                <img src="./assets/img/designer/designer__1.jpg" alt="" class="designer__img">
              </a>
            </div>
            <div class="designer__main-content ">
              <p class="designer__main-content-title">Fall Collection From Hightower</p>
              <a href="" class="designer__main-content-link">SHOP COLLECTION</a>
            </div>
          </div>
          <div class="designer__main">
            <div class="designer__main-img">
              <a href="" class="designer__main-link">
                <img src="./assets/img/designer/designer__2.jpg" alt="" class="designer__img">
              </a>
            </div>
            <div class="designer__main-content " hidden="true">
              <p class="designer__main-content-title">Fall Collection From Hightower</p>
              <a href="" class="designer__main-content-link">SHOP COLLECTION</a>
            </div>
          </div>
        </div>
        <div class="designer__arrow designer__arrow-next"> 
          <i class="fas fa-long-arrow-alt-right"></i>
        </div>
        <div class="designer__sub">
          <i class="designer__sub-icon  active fas fa-circle"></i>
          <i class="designer__sub-icon fas fa-circle"></i>
          <i class="designer__sub-icon fas fa-circle"></i>
        </div>
      </div> -->
      <!-- Style -->
      <div class="style">
        <div class="container">
          <h3 class="style__heading">Shop by style</h3>
          <div class="style__wrapper">
            <div class="style__content">
              <div class="style__content-img">
                <a href="" class="style__link">
                  <img src="./assets/img/style/style__1.jpg" alt="" class="style__img">
                </a>
              </div>
              <div class="style__content-text">
                <p class="style__content-text-tilte">Classic Traditional</p>
                <a href="" class="style__content-text-link">Explore Now</a>
              </div>
            </div>
            <div class="style__content">
              <div class="style__content-img">
                <a href="" class="style__link">
                  <img src="./assets/img/style/style__2.jpg" alt="" class="style__img">
                </a>
              </div>
              <div class="style__content-text">
                <p class="style__content-text-tilte">Classic Traditional</p>
                <a href="" class="style__content-text-link">Explore Now</a>
              </div>
            </div>
            <div class="style__content">
              <div class="style__content-img">
                <a href="" class="style__link">
                  <img src="./assets/img/style/style__3.jpg" alt="" class="style__img">
                </a>
              </div>
              <div class="style__content-text">
                <p class="style__content-text-tilte">Classic Traditional</p>
                <a href="" class="style__content-text-link">Explore Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- News -->
      <div class="news">
        <div class="news__container">
          <h3 class="news__heading">Newsletters</h3>
          <p class="news__heading-sub">Sign up for newsletter and get 10% cash back offer</p>
          <div class="news__form">
            <input type="email" class="news__input" placeholder="Your email address..." required>
            <input type="submit" class="btn news__btn-submit" value="SUBCRIBE"></input>
          </div>
        </div>
      </div>
      <!-- Brand -->
      <div class="brand">
        <div class="brand__container">
          <div class="brand__sclick">
            <a href="" class="brand__link">
              <img src="./assets/img/brand/brand__1.png" alt="" class="brand__img">
            </a>
          </div>
          <div class="brand__sclick">
            <a href="" class="brand__link">
              <img src="./assets/img/brand/brand__2.png" alt="" class="brand__img">
            </a>
          </div>
          <div class="brand__sclick">
            <a href="" class="brand__link">
              <img src="./assets/img/brand/brand__3.png" alt="" class="brand__img">
            </a>
          </div>
          <div class="brand__sclick">
            <a href="" class="brand__link">
              <img src="./assets/img/brand/brand__4.png" alt="" class="brand__img">
            </a>
          </div>
          <div class="brand__sclick">
            <a href="" class="brand__link">
              <img src="./assets/img/brand/brand__5.png" alt="" class="brand__img">
            </a>
          </div>
          <div class="brand__sclick">
            <a href="" class="brand__link">
              <img src="./assets/img/brand/brand__7.png" alt="" class="brand__img">
            </a>
          </div>
        </div>
      </div>
      <!-- social -->
      <div class="social">
        <div class="social__container">
          <div class="social__img">
            <img src="./assets/img/logo_social.png" alt="">
          </div>
          <div class="social__btn">
            <ul class="social__btn-item">
              <li class="social__btn-list">
                <a href="" class="social_btn-link">
                  <i class="social__btn-icon ti-twitter-alt"></i>
                </a>
              </li>
              <li class="social__btn-list">
                <a href="" class="social_btn-link">
                  <i class="social__btn-icon ti-instagram"></i>
                </a>
              </li>
              <li class="social__btn-list">
                <a href="" class="social_btn-link">
                  <i class="social__btn-icon ti-facebook"></i>
                </a>
              </li>
              <li class="social__btn-list">
                <a href="" class="social_btn-link">
                  <i class="social__btn-icon ti-youtube"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- footer -->
      <footer class="footer">
        <div class="footer__container">
          <div class="grid">
            <div class="row">
              <div class="col l-3">
                <span class="footer__heading">GET HELP</span>
                <ul class="footer__container-item">
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Contact & FAQ
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Track Your Order
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Shipping & Delivery
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Visit Brisbane Studio
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Interest Free Finance
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col l-3">
                <span class="footer__heading">SERVICES</span>
                <ul class="footer__container-item">
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Assembly Guides
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Furniture Packages & Fitouts
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Trade Programmer
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Sale
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      New Designs
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col l-3">
                <span class="footer__heading">CONNECT</span>
                <ul class="footer__container-item">
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Twiter
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Facebook
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Instagram
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Pinterest
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Jobs
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col l-3">
                <span class="footer__heading">CATEGORIES</span>
                <ul class="footer__container-item">
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Armchairs
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Bath Room
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Dining Chairs
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Dining Tables
                    </a>
                  </li>
                  <li class="footer__container-list">
                    <a href="" class="footer__container-link">
                      Living Room
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>         
        </div>
      </footer>
      <!-- copyright -->
      <div class="copyright">
        <div class="copyright__container">
          <div class="grid">
            <div class="row copyright__justify">
              <div class="col l-6">
                <div class="copyright__security">
                  <div class="grid">
                    <div class="row">
                      <div class="col l-5">
                        <p class="copyright__copyright">© 2021 Funio Store</p>
                      </div>
                      <div class="col l-7">
                        <ul class="copyright__item">
                          <li class="copyright__list">
                            <a href="" class="copyright__link">PRIVACY</a>
                          </li>
                          <li class="copyright__list">
                            <a href="" class="copyright__link">TERMS</a>
                          </li>
                          <li class="copyright__list">
                            <a href="" class="copyright__link">*PROMO T&CS APPLY (VIEW HERE)</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col l-6">
                <div class="copyright_pay">
                  <img src="./assets/img/pay.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Form Login / Register -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/cart.js"></script>
</body>
</html>