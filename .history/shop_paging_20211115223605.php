<?php include('./config/db.php'); 
$navigation = mysqli_query($conn,"SELECT * FROM category ORDER BY cat_id");
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
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/shop.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://www.editorx.com/favicon.ico" type="image/gif" sizes="16x16">
</head>
<body>
    <div class="wrapper">
      <!-- Header shop -->
        <header class="header">
            <div class="header__container">
              <div class="header__topbar">
                  <div class="header__topbar-left">
                      <a href="" class="header__location">
                          <i class="header__icon ti-location-pin"></i>
                          <span class="header__text">Store Location</span>
                      </a>
                      <a href="" class="header__mail">
                          <i class="header__icon-mail ti-email"></i>
                          <span class="header__text">support@funio.com</span>
                      </a>
                  </div>
                <div class="header__topbar-right">
                      <a href="" class="header__text_gift">Gift Cards</a>
                      <a href="" class="header__text">FAQs</a>
                </div>
              </div>
              <div class="header__navigation">
                <div class="header__menu">
                  <div class="header__logo">
                    <a href="" class="header__logo-link">
                      <img src="./assets/img/logo__shop.png" alt="" class="header__logo-img">
                    </a>
                  </div>
                  <div class="header__nav">
                    <ul class="header__nav-items">
                      <li class="header__nav-lists">
                          <a href="./index.html" class="header__nav-link active">HOME</a>                 
                      </li>
                      <li class="header__nav-lists">
                          <a href="./shop_paging.html" class="header__nav-link">SHOP</a>
                      </li>             
                      <li class="header__nav-lists">
                          <a href="" class="header__nav-link">PRODUCT</a>
                      </li>
                      <li class="header__nav-lists">
                          <a href="" class="header__nav-link">BLOG</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="headerr__active">
                  <ul class="headerr__active-item">
                    <li class="headerr__active-list">
                      <a href="#" class="headerr__active-link">
                        <i class="header__active-icon fas fa-search"></i>
                      </a>
                    </li>
                    <li class="headerr__active-list">
                      <a href="#" class="headerr__active-link">
                        <i class=" header__active-icon user-login far fa-user"></i>
                      </a>
                    </li>
                    <li class="headerr__active-list">
                      <a href="#" class="headerr__active-link">
                        <i class="header__active-icon far fa-star"></i>
                      </a>
                    </li>
                    <li class="headerr__active-list">
                      <a href="#" class="headerr__active-link">
                        <i class="header__active-icon fas fa-shopping-cart"></i>
                      </a>
                    </li>
                  </ul>                 
                </div>
              </div>
            </div>
        </header>
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
                  <!-- <div class="normal">
                    <div class="inside navigation__product">
                      <a href="" class="navigation__product-link">
                        <img src="./assets/img/shop__nav/nav-img-2.jpg" alt="" class="navigation__product-img">
                      </a>
                      <a href="" class="navigation__product-name">ARMCHAIRS</a>
                    </div>
                  </div>
                  <div class="normal">
                    <div class="inside navigation__product">
                      <a href="" class="navigation__product-link">
                        <img src="./assets/img/shop__nav/nav-img-3.jpg" alt="" class="navigation__product-img">
                      </a>
                      <a href="" class="navigation__product-name">DINING CHAIRS</a>
                    </div>
                  </div>
                  <div class="normal">
                    <div class="inside navigation__product">
                      <a href="" class="navigation__product-link">
                        <img src="./assets/img/shop__nav/nav-img-4.jpg" alt="" class="navigation__product-img">
                      </a>
                      <a href="" class="navigation__product-name">DINING TABLES</a>
                    </div>
                  </div>
                  <div class="normal">
                    <div class="inside navigation__product">
                      <a href="" class="navigation__product-link">
                        <img src="./assets/img/shop__nav/nav-img-6.jpg" alt="" class="navigation__product-img">
                      </a>
                      <a href="" class="navigation__product-name">LIGHTING</a>
                    </div>
                  </div>
                  <div class="normal">
                    <div class="inside navigation__product">
                      <a href="" class="navigation__product-link">
                        <img src="./assets/img/shop__nav/nav-img-2.jpg" alt="" class="navigation__product-img">
                      </a>
                      <a href="" class="navigation__product-name">ARMCHAIRS</a>
                    </div>
                  </div>
                  <div class="normal">
                    <div class="inside navigation__product">
                      <a href="" class="navigation__product-link">
                        <img src="./assets/img/shop__nav/nav-img-2.jpg" alt="" class="navigation__product-img">
                      </a>
                      <a href="" class="navigation__product-name">ARMCHAIRS</a>
                    </div>
                  </div> -->
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
                        <li class="category-item">
                          <span  href="#" class="category-item__link">Armchairs</span>
                          <span  href="" class="category-item__quantity">8</span>
                        </li>
                        <li class="category-item">
                          <span href="#" class="category-item__link">Bath Room</span>
                          <span href="" class="category-item__quantity">5</span>
                        </li>
                        <li class="category-item">
                          <span href="#" class="category-item__link">Dining Chairs</span>
                          <span href="" class="category-item__quantity">9</span>
                        </li>
                        <li class="category-item">
                          <span href="#" class="category-item__link">Dining Tables</span>
                          <span href="" class="category-item__quantity">13</span>
                        </li>
                        <li class="category-item">
                          <span href="#" class="category-item__link">Lighting</span>
                          <span href="" class="category-item__quantity">1</span>
                        </li>
                        <li class="category-item">
                          <span href="#" class="category-item__link">Living Room</span>
                          <span href="" class="category-item__quantity">14</span>
                        </li>
                        <li class="category-item">
                          <span href="#" class="category-item__link">Office</span>
                          <span href="" class="category-item__quantity">11</span>
                        </li>
                        <li class="category-item">
                          <span href="#" class="category-item__link">Seating</span>
                          <span href="" class="category-item__quantity">4</span>
                        </li>
                        <li class="category-item">
                          <span href="#" class="category-item__link">Sofas</span>
                          <span href="" class="category-item__quantity">14</span>
                        </li>
                        <li class="category-item">
                          <span href="#" class="category-item__link">Special</span>
                          <span href="" class="category-item__quantity">16</span>
                        </li>
                        <li class="category-item">
                          <span href="#" class="category-item__link">Table</span>
                          <span href="" class="category-item__quantity">11</span>
                        </li>
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
                        <li class="category-brand_list">
                          <img src="./assets/img/brand/brand__1.png" alt="" class="category-brand-img">
                        </li>
                        <li class="category-brand_list">
                          <img src="./assets/img/brand/brand__2.png" alt="" class="category-brand-img">
                        </li>
                        <li class="category-brand_list">
                          <img src="./assets/img/brand/brand__3.png" alt="" class="category-brand-img">
                        </li>
                        <li class="category-brand_list">
                          <img src="./assets/img/brand/brand__4.png" alt="" class="category-brand-img">
                        </li>
                        <li class="category-brand_list">
                          <img src="./assets/img/brand/brand__5.png" alt="" class="category-brand-img">
                        </li>
                        <li class="category-brand_list">
                          <img src="./assets/img/brand/brand__7.png" alt="" class="category-brand-img">
                        </li>
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
                      <div class="row no-gutters products__rows">
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
                            </div>
                          </div>
                        </div>
                        <div class="col l-4">
                          <div class="products-details">
                            <div class="products-thumb">
                              <div class="products-label">
                                <div class="products-sale">-10%</div>
                              </div>
                              <div class="products-wrapper__img">
                                <a href="" class="products-details-link">
                                  <img src="./assets/img/filter-latest1.1.jpg" alt="" class="products-img">
                                </a>
                              </div>                 
                              <div class="products-button">
                                <a href="" class="products-link">
                                  <i class="products-icon ti-shopping-cart"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon far fa-star"></i>
                                </a>
                                <a href="" class="products-link">
                                  <i class="products-icon ti-search"></i>
                                </a>
                              </div>
                            </div>
                            <div class="products-description">
                              <a class="products-name">Alvarado Sideboard</a>
                              <span class="quantity old">$200.00</span>
                              <span class="quantity new">$180.00</span>
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
        </div>
      <!-- Footer -->
        <div class="footer__wrapper">
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
                            <p class="copyright__copyright">© 2021 Funio Furniture Store</p>
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
    </div>
     <!-- Form Login / Register -->
    <div class="modal js-modal">
      <div class="modal__container js-modal-container">
        <div class="modal-content">
            <div class="modal-close js-modal-close">
              <i class=" modal-close-icon fas fa-times"></i>
            </div>
         <div class="box-content">
            <div class="form-login active" >
              <form action="" class="login">
                <div class="modal-heading">
                  <h2 class="modal-heading__text">SIGN IN</h2>
                </div>
                <div class="form-content">
                  <div class="username">
                    <input type="text" class="form__input" required placeholder="Your name">
                  </div>
                  <div class="password">
                    <input type="password" class="form__input" required placeholder="Password">
                  </div>
                  <div class="remember-lost">
                    <div class="remember">
                      <input type="checkbox" value="" checked="checked" id="rememberme" name="rememberme">
                      <label for="rememberme" class="remember__text">Remember me</label>
                    </div>
                    <div class="lost-password">
                      <a href="" class="lost-password__link">Lost your password?</a>
                    </div>
                  </div>
                  <div class="button-login">
                    <input type="submit" name="btnLogin" class="btn-login" value="LOGIN">
                  </div>
                  <div class="button-create">
                    <h3 class="button-create__text">CREATE AN ACCOUNT</h3>
                  </div>
                </div>
              </form>
            </div>
            <div class="form-register">
              <form action="" class="register">
                <div class="modal-heading">
                  <h2 class="modal-heading__text">REGISTER</h2>
                </div>
                <div class="form-content">
                  <div class="email">
                    <input type="email" class="form__input" required placeholder="Email">
                  </div>
                  <div class="password">
                    <input type="password" class="form__input" required placeholder="Password">
                  </div>
                  <div class="button-resgister">
                    <input type="submit" name="btnResgister" class="btn-resgister__click" value="RESGISTER">
                  </div>
                  <div class="button-back">
                    <h3 class="button-back__login">ALREADY HAS AN ACCOUNT</h3>
                  </div>
                </div>
              </form>
            </div>
         </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/slick.js"></script>
</body>
</html>