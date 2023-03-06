<?php require "session.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page Login</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="allianz-logo.svg">
                </div>
                <!-- <h4>Se Connecter  </h4> -->
                    <form class="pt-3" action="login.php">
                    <?php if (isset($_GET['error'])) { ?>
                      <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                  <div class="form-group">
          
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="user_name" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="login" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
  </body>
  
</html>