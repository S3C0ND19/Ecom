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
                          <span class="header__text">hau_1951220012@dau.edu.vn</span>
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
                    <a href="./index.php" class="header__logo-link">
                      <img src="./assets/img/logo__shop.png" alt="" class="header__logo-img">
                    </a>
                  </div>
                  <div class="header__nav">
                    <ul class="header__nav-items">
                      <li class="header__nav-lists">
                          <a href="index.php" class="header__nav-link ">HOME</a>                 
                      </li>
                      <li class="header__nav-lists">
                          <a href="shop_paging.php" class="header__nav-link">SHOP</a>
                      </li>        
                    </ul>
                  </div>
                </div>
                <div class="headerr__active">
                  <ul class="headerr__active-item">
                    <li class="headerr__active-list">
                      <a href="#" class="headerr__active-link">
                        <i class="header__active-icon fas fa-search"></i>
                        <div class="search-box">
                          <div class="search-box-container">
                            <div class="search-box-header">
                              <p>what are you looking for?</p>
                              <span>CLOSE
                                <i class="fas fa-times"></i>
                              </span>
                            </div>
                            <div class="search-box-content">
                              <input class="search-input" type="text" name="" id="" placeholder="Search....">
                              <button class="search-btn-submit"type="submit">
                                <i class="fas fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="headerr__active-list header__navbar-user">
                        <div class="header-user-login">
                            <img src="./admin/upload/<?php echo $_SESSION["login"][2]  ?>" alt="" width="30px" height="30px" class="user-avt-deafault" style="display:none;">
                            <span class="username_login">
                            <?php
                                if (isset($_SESSION["login"])){
                                echo $_SESSION["login"][5];}
                              ?>
                            </span>
                            <input type="checkbox" hidden class="header__check-user" id="header__check-user">
                                <label for="header__check-user">
                                  <i class="header-user-login-icon fas fa-sort-down" style="display:none;"></i>
                                </label>
                                <label for="header__check-user" class="header__overlay-user"></label>
                              <ul class="header-user-item" >
                                <li class="header-user-list">
                                  <a href="profile.php" class="header-user-link">Profile</a>
                                </li>
                                <li class="header-user-list">
                                  <a href="wishlist.php" class="header-user-link">Order</a>
                                </li>                                               
                                <li class="header-user-list" >
                                  <a href="logout.php" class=" header-user-link">Logout</a> 
                                </li>      
                              </ul>
                        </div>
                          <a href="login.php" class="headerr__active-link">
                            <i class=" header__active-icon user-login far fa-user"></i>
                          </a> 
                    </li>                      
                        <script>
                          let getUserName = document.querySelector('.username_login')
                          let getavt = document.querySelector('.user-avt-deafault');
                          let login = document.querySelector('.user-login');
                          let iconlogin = document.querySelector('.header-user-login-icon');
                          if (getUserName.innerText != ''){
                            getavt.style.display = 'block';
                            login.style.display = 'none';
                            iconlogin.style.display='block';
                          }                         
                        </script>                  
                    </li>
                    <li class="headerr__active-list">
                      <a href="wishlist.php" class="headerr__active-link">
                        <i class="header__active-icon far fa-star"></i>
                      </a>
                    </li>                    
                    <li class="headerr__active-list cart">
                      <a href="#" class="headerr__active-link">
                        <i class="header__active-icon fas fa-shopping-cart"></i>
                        <div class="cart-shadow"></div>
                        <div class=" modal js-modal ">
                          <div class="modal-responsive modal__container js-modal-container">
                            <div class="modal-content">
                                <div class="modal-cart-empty">
                                  <img src="./assets/img/empty_cart_retina.png" alt="" width="100px" height="50px" style="object-fit: cover;">
                                  <p>No product in the cart</p>
                                  <a href="shop_paging.php" class="go-shop">
                                    GO TO SHOP
                                    <i class="fas fa-arrow-right"></i>
                                  </a>
                                </div>                              
                            <ul class="modal-product-item">
                              <?php   
                                  if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                        $total = 0;  
                                        foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                        {  
                                ?> 
                                <li class="modal-product-list">
                                  <input type="hidden" name="" class="id-hidden" value="<?php echo $values["item_id"]; ?>" />  
                                    <header class="modal-header">
                                              <div class="modal-products-details">
                                                  <div class="modal-products-image">
                                                    <img src="./admin/upload/<?php echo $values["item_img"]; ?>" width=100% height=100% style="object-fit:cover;">
                                                  </div>
                                                  <div class="modal-products-infomation">
                                                    <span class="modal-products-name"><?php echo $values["item_name"]; ?></span>
                                                    <span class="modal-products-quantity">Quantity<?php echo $values["item_quantity"]; ?></span>
                                                    <span class="modal-products-price">$<?php echo $values["item_price"]; ?></span>
                                                  </div>
                                              </div>
                                                  <a href="shop_paging.php?action=delete&id=<?php echo $values["item_id"]; ?>" class="modal-products-remove">
                                                    <i class="fas fa-times"></i>
                                                  </a>
                                                    
                                      </header>
                                </li>
                                <?php  
                                      $total = $total + floatval($values["item_price"]);
                                }  
                              ?> 
                            </ul>
                            <footer class="modal-footer">
                                      <div class="modal-products-total">
                                        <p class="modal-products-total-heading">Total</p>
                                        <p class="modal-products-total-numbers">$<?php echo number_format($total, 2); ?></p>
                                      </div>
                                      <div class="modal-product-cart">
                                        <a href="cart.php" class="modal-product-cart-check ">VIEW CART</a>
                                        <a href="" class="modal-product-cart-check checkout-product">CHECK OUT</a>
                                      </div>
                                      <div class="modal-sale">
                                        <span>FREE SHIPPING ON ALL 
                                          <a href="">ODER OVER $75$</a>
                                        </span>
                                      </div>
                                    </footer>
                                  </div>
                                  <?php  
                            }  
                            ?> 
                            </div>
                          </div>      
                        </div>                      
                      </a>
                    </li>
                  </ul>                 
                </div>
                <div class="toast-message">
                    <div class="toast-message-container">
                        <i class="toast-message-icon fas fa-check"></i>
                        <p class="toast-message-alert">Product was added to cart successfully</p>
                    </div>                    
                </div>
                <div class="toast-message-wishlist">
                    <div class="toast-message-container">
                        <i class="toast-message-icon fas fa-check"></i>
                        <p class="toast-message-alert">Product was added to wishlist successfully</p>
                    </div>                    
                </div>
                <?php 
                  if(isset($_POST["add_to_cart"]))  
                  {
                    if(isset($_SESSION["shopping_cart"]))  
                    {                     
                      echo '<script>
                      let gettoast = document.querySelector(".toast-message");
                      gettoast.style.display = "block";
                      setTimeout(()=>{
                        gettoast.style.animation = "hide_slide 1s ease forwards"
                        },3000);
                        setTimeout(() => {
                          gettoast.remove()
                      }, 5000);
                      </script>';
                    }
                  }
                  if(isset($_POST["add_to_wishlist"]))  
                  {
                    if(isset($_SESSION["wishlist"]))  
                    {                     
                      echo '<script>
                      let gettoast = document.querySelector(".toast-message-wishlist");
                      gettoast.style.display = "block";
                      setTimeout(()=>{
                        gettoast.style.animation = "hide_slide 1s ease forwards"
                        },3000);
                        setTimeout(() => {
                          gettoast.remove()
                      }, 5000);
                      </script>';
                    }
                  }
                ?>
              </div>
            </div>
</header>