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
                        <i class="header__active-icon search fas fa-search"></i>
                        <div class="search-box">
                          <div class="search-box-container">
                            <div class="search-box-header">
                              <p>what are you looking for?</p>
                              <div class="search-close-container">
                                <span>CLOSE
                                  <i class="fas fa-times"></i>
                                </span>
                              </div>                             
                            </div>
                            <form method="post" action="search.php" class="search-box-content">
                              <input class="search-input" type="text" name="search" id="" placeholder="Search....">
                              <button  type="submit" class="search-btn-submit" name="btnSearch">
                                <i class="fas fa-search"></i>
                              </button>
                            </form>
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
                <div class="message-chat-contact">
                  <svg width="60px" height="60px" viewBox="0 0 60 60" cursor="pointer"><svg x="0" y="0" width="60px" height="60px"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g><circle fill="#0A7CFF" cx="30" cy="30" r="30"></circle><svg x="10" y="10"><g transform="translate(0.000000, -10.000000)" fill="#FFFFFF"><g id="logo" transform="translate(0.000000, 10.000000)"><path d="M20,0 C31.2666,0 40,8.2528 40,19.4 C40,30.5472 31.2666,38.8 20,38.8 C17.9763,38.8 16.0348,38.5327 14.2106,38.0311 C13.856,37.9335 13.4789,37.9612 13.1424,38.1098 L9.1727,39.8621 C8.1343,40.3205 6.9621,39.5819 6.9273,38.4474 L6.8184,34.8894 C6.805,34.4513 6.6078,34.0414 6.2811,33.7492 C2.3896,30.2691 0,25.2307 0,19.4 C0,8.2528 8.7334,0 20,0 Z M7.99009,25.07344 C7.42629,25.96794 8.52579,26.97594 9.36809,26.33674 L15.67879,21.54734 C16.10569,21.22334 16.69559,21.22164 17.12429,21.54314 L21.79709,25.04774 C23.19919,26.09944 25.20039,25.73014 26.13499,24.24744 L32.00999,14.92654 C32.57369,14.03204 31.47419,13.02404 30.63189,13.66324 L24.32119,18.45264 C23.89429,18.77664 23.30439,18.77834 22.87569,18.45674 L18.20299,14.95224 C16.80079,13.90064 14.79959,14.26984 13.86509,15.75264 L7.99009,25.07344 Z"></path></g></g></svg></g></g></svg></svg>
                  <div class="message-chat-container">
                    <div class="message-chat-header">
                        <div class="message-logo">
                          <img src="./assets/img/logo__shop.png" alt="" width="60px" height="30px">
                        </div>
                        <div class="message-icon">
                          <i class="fas fa-ellipsis-h"></i>
                          <span>-</span>
                        </div>
                    </div>
                    <div class="messgae-chat-content">
                      <p>Chat với FUNIO Shop</p>
                      <svg class="b6ax4al1" viewBox="0 0 24 24" width="18" height="18" xmlns="http://www.w3.org/2000/svg" fill="#1b77f2"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.81832 12.3781C0.641541 13.6853 0.172694 15.2929 0.740548 16.6638C1.3084 18.0347 2.77666 18.8399 4.53307 18.9322C4.81971 18.9472 5.05279 19.1803 5.06784 19.4669C5.16003 21.2234 5.96524 22.6916 7.33617 23.2595C8.7071 23.8273 10.3147 23.3585 11.6219 22.1817C11.8352 21.9896 12.1648 21.9896 12.3782 22.1817C13.6853 23.3585 15.2929 23.8273 16.6638 23.2595C18.0347 22.6916 18.84 21.2234 18.9322 19.467C18.9472 19.1803 19.1803 18.9472 19.4669 18.9322C21.2234 18.84 22.6916 18.0348 23.2595 16.6639C23.8273 15.2929 23.3585 13.6853 22.1817 12.3782C21.9896 12.1648 21.9896 11.8352 22.1817 11.6219C23.3585 10.3147 23.8273 8.70712 23.2595 7.33619C22.6916 5.96526 21.2233 5.16005 19.4669 5.06786C19.1803 5.05281 18.9472 4.81973 18.9321 4.53309C18.8399 2.77665 18.0347 1.30838 16.6638 0.740519C15.2929 0.172663 13.6853 0.641513 12.3781 1.8183C12.1648 2.01034 11.8352 2.01034 11.6218 1.8183C10.3147 0.641545 8.7071 0.172712 7.33619 0.74056C5.96527 1.30841 5.16006 2.77667 5.06785 4.53308C5.05281 4.81972 4.81972 5.0528 4.53308 5.06784C2.77665 5.16004 1.30838 5.96524 0.740519 7.33617C0.17266 8.7071 0.641519 10.3147 1.81831 11.6219C2.01036 11.8352 2.01036 12.1648 1.81832 12.3781ZM17.3648 8.00218C17.6421 7.52457 17.4797 6.91258 17.0021 6.63525C16.5245 6.35793 15.9125 6.5203 15.6352 6.99791L11.2253 14.5927C11.1429 14.7347 10.9484 14.76 10.8323 14.644L8.20711 12.0187C7.81658 11.6282 7.18342 11.6282 6.79289 12.0187C6.40237 12.4093 6.40237 13.0424 6.79289 13.433L10.5671 17.2071C10.7866 17.4267 11.0956 17.5318 11.4035 17.4916C11.7113 17.4515 11.9831 17.2707 12.139 17.0022L17.3648 8.00218Z"></path></svg>
                    </div>
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