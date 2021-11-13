<?php
  ob_start();
  include('config/db.php');
  if (!isset($_SESSION["login"])){
    header("Location: login.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/font/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://www.editorx.com/favicon.ico" type="image/gif" sizes="16x16">
    <title>Document</title>
</head>
<body style="font-family: 'Josefin Sans', sans-serif !important;">
<div class="main">
    <div class="header__container">
        <header class="header">
            <div class="header__logo">
              <a href="index.php" class="header__logo-link">
                <img src="./upload/logo.png" alt="" class="header__logo-img">
              </a>
            </div>
            <div class="header__active">
              <div class="header__btn">
                <input type="text" name="" id="" placeholder="Search....">
              </div>
              <ul class="header__menu">
                <li class="header__menu-item">
                  <i class="header__menu-icon fas fa-bell"></i>
                </li>
                <li class="header__menu-item">
                  <input type="checkbox" hidden class="header__check" id="header__check">
                  <label for="header__check">
                      <i class="ti-user header__menu-icon"></i>
                  </label>
                   <label for="header__check" class="header__overlay"></label>
                  <div class="header__menu-user-drop">
                    <ul class="header__user-sub-menu">
                        <li class="header__user-sub-menu-item">
                          <?php
                              $query = "SELECT * FROM user";
                              $result_tasks = mysqli_query($conn, $query);    
                              while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                                <div class="header__user-info">
                                  <div class="header__user-img">
                                    <img src="./upload/admin_avt.png" alt="" >
                                  </div>
                                  <div class="header__user-main">
                                      <span class="header__user-name"><?php echo $row['user_username']; ?></span>
                                      <span class="header__user-email"><?php echo $row['user_email']; ?></span>
                                  </div>
                                </div>
                          <?php } ?>
                        </li>
                        <li class="header__user-sub-menu-item">
                          <a href="" class="header__user-sub-link">
                            <svg class="header__user-sub-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" fit="" height="24px" width="24px" preserveAspectRatio="xMidYMid meet" focusable="false"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path> </svg>
                            <span class="header__user-sub-text">Profile</span>
                          </a>
                        </li>
                        <li class="header__user-sub-menu-item">
                          <a href="" class="header__user-sub-link">
                            <svg class="header__user-sub-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" fit="" height="24px" width="24px" preserveAspectRatio="xMidYMid meet" focusable="false"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path> </svg>
                            <span class="header__user-sub-text">Help</span>
                          </a>
                        </li>
                        <li class="header__user-sub-menu-item">
                          <a href="" class="header__user-sub-link">
                              <i class="header__user-sub-icon ti-settings"></i>
                              <span class="header__user-sub-text">Settings</span>
                          </a>
                        </li>
                    </ul>
                    <div class="header__user-sub-btn">
                      <a href="logout.php">
                      <button class="btn btn-rounded btn-primary btn-logout">Log out</button>
                      </a>
                    </div>
                  </div>
                </li>
                <li class="header__menu-item">
                  <i class="header__menu-icon fas fa-ellipsis-h"></i>
                </li>
              </ul>          
            </div>
        </header>
    </div>

