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
                      </a>
                    </li>
                    <li class="headerr__active-list header__navbar-user">
                        <div class="header-user-login">
                          <img src="./assets/img/user-avt-deafault2.png" alt="" width="30px" height="30px" class="user-avt-deafault" style="display:none;">
                          <span class="username_login">
                              <?php
                                if (isset($_SESSION["login"])){
                                echo $_SESSION["login"][5];}
                              ?>
                          </span>
                            <input type="checkbox" hidden class="header__check-user" id="header__check-user">
                                <label for="header__check-user">
                                  <i class="header-user-login-icon fas fa-sort-down"></i>
                                </label>
                                <label for="header__check-user" class="header__overlay-user"></label>
                              <ul class="header-user-item" >
                                <li class="header-user-list">
                                  <a href="" class="header-user-link">Profile</a>
                                </li>
                                <li class="header-user-list">
                                  <a href="" class="header-user-link">Order</a>
                                </li>                                               
                                <li class="header-user-list" >
                                  <a href="logout.php" class="user-logout header-user-link">Logout</a> 
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
                          let logout = document.querySelector('.user-logout');
                          let login = document.querySelector('.user-login');
                          let iconlogin = document.querySelector('.header-user-login-icon');
                          if (getUserName.innerText != ''){
                            getavt.style.display = 'block';
                            logout.style.display = 'block';
                            login.style.display = 'none';
                            iconlogin.style.display='block'
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
                                                    <span class="modal-products-quantity">Quantity: 1</span>
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
                <!-- <div class="toast-message-removed">
                    <div class="toast-message-container">
                        <i class="toast-message-icon fas fa-check"></i>
                        <p class="toast-message-alert">Product removed successfully</p>
                    </div> 
                </div> -->
                <?php 
                  if(isset($_POST["add_to_cart"]))  
                  {
                    if(isset($_SESSION["shopping_cart"]))  
                    {                     
                      echo '<script>
                      let gettoast = document.querySelector(".toast-message");
                      gettoast.style.display = "block";
                      setTimeout(()=>{
                        gettoast.style.display = "none";
                        },2000);
                      </script>';
                    }
                  }
                ?>
              </div>
            </div>
</header>