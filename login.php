<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM loginpage WHERE OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?><!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!----======== CSS ======== -->
  <link rel="stylesheet" href="style.css">
  
  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  
  <title>Login</title>
</head>
<body>
      
  <nav class="sidebar close">
      <header>
          <div class="image-text">
              <span class="image">
                  <!--<img src="logo.png" alt="">-->
              </span>

              <div class="text logo-text">
                  <span class="name">More</span>
                  <span class="profession">Menu</span>
              </div>
          </div>

          <i class='bx bx-chevron-right toggle'></i>
      </header>

      <div class="menu-bar">
          <div class="menu">

              <li class="search-box">
                  <i class='bx bx-search icon'></i>
                  <input type="text" placeholder="Search...">
              </li>

              <ul class="menu-links">
                  <li class="nav-link">
                      <a href="Index.html">
                          <i class='bx bx-home-alt icon' ></i>
                          <span class="text nav-text">Home</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="insert.html">
                          <i class='bx bx-add-to-queue icon'></i>
                          <span class="text nav-text">Add recipe</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="Continental.html">
                          <i class='bx bx-bowl-hot icon'></i>
                          <span class="text nav-text">Continental</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="Indian.html">
                          <i class='bx bx-bowl-rice icon' ></i>
                          <span class="text nav-text">Indian</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="wallet.html">
                          <i class='bx bx-heart icon' ></i>
                          <span class="text nav-text">Favourites</span>
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="wallet.html">
                          <i class='bx bx-wallet icon' ></i>
                          <span class="text nav-text">Wallet</span>
                      </a>
                  </li>

              </ul>
          </div>

          <div class="bottom-content">
              <li class="">
                  <a href="Login.html">
                      <i class='bx bx-log-out icon' ></i>
                      <span class="text nav-text">Login</span>
                  </a>
              </li>

              <li class="mode">
                  <div class="sun-moon">
                      <i class='bx bx-moon icon moon'></i>
                      <i class='bx bx-sun icon sun'></i>
                  </div>
                  <span class="mode-text text">Dark mode</span>

                  <div class="toggle-switch">
                      <span class="switch"></span>
                  </div>
              </li>
              
          </div>
      </div>
  </nav>

  <div class="container" id="container">
      <div class="form-container sign-up-container">
      </div>
      <div class="form-container sign-in-container">
          <form action="#">
              <h1>Sign in</h1>
              <span></span>
              <input type="email" placeholder="Email" id="usernameemail"/>
              <input type="password" placeholder="Password" id="password"/>
              <a href="forgotpass.html">Forgot your password?</a>
              <a href="submit.html"><button type="submit" name="submit" id="submit">Sign In</button></a>
              <a href="registration.com"><button id="signUp" >Sign Up</button></a>
          </form>
      </div>
  </div>
  
  <script>

const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
  sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
  sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
  body.classList.toggle("dark");
  
  if(body.classList.contains("dark")){
      modeText.innerText = "Light mode";
  }else{
      modeText.innerText = "Dark mode";
      
  }
});
  </script>
</html>