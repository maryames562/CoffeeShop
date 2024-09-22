<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn&SignUp</title>
    <link rel="stylesheet" type="text/css" href="styles/style-log-sign.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" method="post" action="action-login.php">
            <h2 class="title">ورود به حساب کاربری</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass"/>
            </div>
            <input type="submit" value="Login" class="btn solid"/>

            <p class="social-text">یا ورود با یکی از پلتفرم های زیر</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


          <form class="sign-up-form" method="POST" action="action-register.php">
            <h2 class="title">ثبت نام</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass"/>
            </div>
            <input type="submit" value="Sign Up" class="btn solid" />

            <p class="social-text">یا ثبت نام با یکی از پلتفرم های زیر</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3>عضو جدید هستید؟</h3>
                <p>به وبسایت ما خوش آمدید، خواهشمندیم برای ادامه عملیات، ثبت نام کنید.</p>
                <button class="btn transparent" id="sign-up-btn">ثبت نام</button>
            </div>
            <img src="images/log.svg" class="image" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>قبلا ثبت نام کرده اید؟</h3>
                <p>خواهشمندیم برای ادامه عملیات، وارد شوید.</p>
                <button class="btn transparent" id="sign-in-btn">ورود</button>
            </div>
            <img src="images/register.svg" class="image" alt="">
        </div>
      </div>
    </div>

    <script src="scripts/app-log-sign.js"></script>
  </body>
</html>
