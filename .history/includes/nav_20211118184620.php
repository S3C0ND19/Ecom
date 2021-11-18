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
}
                          <a href="login.php" class="headerr__active-link">
                            <i class=" header__active-icon user-login far fa-user"></i>
                          </a>                        
                        <script>
                          let getHeaderNav = document.querySelector('.header__navbar-user')
                          console.log(getHeaderNav)
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