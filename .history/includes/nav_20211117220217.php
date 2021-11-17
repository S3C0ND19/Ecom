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
                      <img src="./assets/img/logo.png" alt="" class="header__logo-img">
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
                    <li class="headerr__active-list">
                      <a href="login.php" class="headerr__active-link">
                        <div class="header__user-container">
                          <img src="./assets/img/user-avt-deafault.png" alt="" width="30px" height="30px" class="user-avt-deafault" style="display:none;">
                          <span class="username_login">
                          <?php
                                if (isset($_SESSION["login"])){
                                echo $_SESSION["login"][5];}
                          ?>
                          </span>
                        <i class=" header__active-icon user-login far fa-user"></i>
                        </div>
                        <script>
                          let getUserName = document.querySelector('.username_login')
                          let getIconLogin = document.querySelector('.user-login')
                          let getAvtUser = document.querySelector('.user-avt-deafault')
                          if (getUserName.innerText != ''){
                            getIconLogin.style.display = 'none';
                            getAvtUser.style.display = 'block';
                          }
                        </script>  
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