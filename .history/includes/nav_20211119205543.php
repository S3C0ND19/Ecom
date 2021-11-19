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
                          <a href="./index.php" class="header__nav-link active">HOME</a>                 
                      </li>
                      <li class="header__nav-lists">
                          <a href="./shop_paging.php" class="header__nav-link">SHOP</a>
                      </li>             
                      <li class="header__nav-lists">
                          <a href="" class="header__nav-link">PRODUCT</a>
                      </li>
                      <li class="header__nav-lists">
                          <a href="./cart.php" class="header__nav-link">CART</a>
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
                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    <img src="./assets/img/user-avt-deafault.png" alt="" width="30px" height="30px" class="user-avt-deafault">
                                    <span class="username_login">
                                    <?php
                                        if (isset($_SESSION["login"])){
                                        echo $_SESSION["login"][5];}
                                    ?>
                                    </span>
                                </li>                       
                                <li class="header__navbar-user-item">
                                    <a href="">Tài Khoản của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Đơn mua </a>
                                </li>
                                <li class="header__navbar-user-item header__navbar-user-item--separate">
                                  <div div class="user_logout"> 
                                    <a href="logout.php" onclick=handleLogout()>Đăng xuất</a>                        
                                </div>                                  
                                </li>
                            </ul>
                          <a href="login.php" class="headerr__active-link">
                            <i class=" header__active-icon user-login far fa-user"></i>
                          </a>                        
                        <script>
                          let getHeaderNav = document.querySelector('.header__navbar-user')
                          getHeaderNav.setAttribute('style' , '.header__navbar-user:hover .header__navbar-user-menu{display: block ;}')
                          // let getIconLogin = document.querySelector('.user-login')
                          // let getAvtUser = document.querySelector('.user-avt-deafault')
                          // let getBtnLogout = document.querySelector('.user_logout')     
                          // let listIcon = document.querySelectorAll('.headerr__active-list')
                          // function handleLogout(){
                          //   getIconLogin.style.display = 'block';
                          //   getAvtUser.style.display = 'none';
                          //   getBtnLogout.style.display='none';
                          //   listIcon[1].innerHTML = "<a href='login.php'><i class='header__active-icon user-login far fa-user'></i></a>";
                          // }
                          // if (getUserName.innerText != ''){
                          //   getIconLogin.style.display = 'none';
                          //   getAvtUser.style.display = 'block';
                          //   getBtnLogout.style.display='block';
                          // }
                          
                        </script>  
                 
                    </li>
                    <li class="headerr__active-list">
                      <a href="#" class="headerr__active-link">
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
              </div>
            </div>
</header>