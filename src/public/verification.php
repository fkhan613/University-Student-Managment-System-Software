<?php include "../config/database.php"?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/css/loginregister.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <title>Verification Code</title>
  </head>
    <?php
        //generate random code
        $_SESSION['code'] = rand(100000, 999999);

        //send email to user with the verification code
        
        if(isset($_POST['verify'])){

        }
    ?>
  <body>
    <div class="spinner-container">
      <div class="spinner"></div>
    </div>
    <canvas id="canvas"></canvas>
    <div class="container" id=cont>
      <div class="img animate__animated animate__fadeInLeft">
        <img src="../public/img/bg.svg" loading="lazy"/>
      </div>
      <div class="login-content animate__animated animate__fadeInRight">
        <form autocomplete="off" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" enctype="multipart/form-data">
          <img src="../public/img/loginAvatar.svg" loading="lazy"/>
          <h2 class="title">Verification Code</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Please enter the verification code that has been emailed to you</h5>
              <input
                type="text"
                name="input"
                class="input"
                autocomplete="off"
                required
                oninvalid="this.setCustomValidity('Please enter the valid verification code')"
                oninput="setCustomValidity('')"
              />
            </div>
          </div>
          <input type="submit" name="verify" class="btn" value="Verify" />
        </form>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="../public/js/loginregister.js"></script>
  </body>
</html>
