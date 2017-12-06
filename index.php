
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/v3.svg" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/colorm-icons/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
  <?php
  $username = "ENTER desired username here"; 
  $pw = "ENTER sha256 digest here!!!";

  $input = openssl_digest($_POST['password'], "sha256");

  if($_POST['username'] == $username && $pw == $input) {
    ?>
    <div id="features4-1" custom-code="true" data-rv-view="3"><section class="mbr-section mbr-section-hero features4" data-rv-view="3" style="background-image: url(assets/images/mbr-1620x1080.jpg); padding-top: 80px; padding-bottom: 80px;">

      <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(81, 185, 188);"></div>

      <div class="mbr-table-cell">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-lg-8 col-lg-offset-2 text-xs-center">
              <h1 class="mbr-section-title display-1 mbr-editable-content">Garage Pi</h1>
            </div>
          </div>

          <div class="mbr-cards-row row">
            <div class="mbr-cards-col col-xs-12 col-lg-6">
              <div class="container">
                <div class="card cart-block">
                  <div class="mbr-figure-background"></div>
                  <div class="card-img iconbox"><a id="icon" class="mbri-up-down mbr-iconfont mbr-iconfont-features4" style="color: rgb(255, 255, 255);"></a></div>
                  <div class="card-block text-xs-center"></div>
                </div>
              </div> 
            </div>
          </div>

          <div class="mbr-section-btn text-xs-center">
            <form method="post" action="javascript:toggleDoor()">
              <input type="submit" value="TOGGLE DOOR" name="toggle" class="btn btn-lg btn-primary mbr-editable-button"/></div>
            </form>
          </div>
        </div>

      </section></div>
      <script type="text/javascript">
        function toggleDoor()
        {
          $.ajax({
            url: 'toggle.php',
            success: onSuccess,
            error : systemError
          });
        }
        function onSuccess(data)
        {
          alert("You have toggled the door. do something cooler than this.");
        }
        function systemError(jqXHR, status, error)
        {
          console.log('Error : ' + error);
        }
      </script>
      <?php
    }
    else {
      ?>
      <div id="form1-5" custom-code="true" data-rv-view="26"><section class="mbr-section form1 mbr-parallax-background" data-rv-view="26" style="background-image: url(assets/images/mbr-2-1620x1080.jpg); padding-top: 120px; padding-bottom: 120px;">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(192, 57, 43);">
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-lg-8 col-lg-offset-2 text-xs-center">
              <h1 class="mbr-section-title display-4 mbr-editable-content">Login</h1>
              <div class="col-xs-12" data-form-type="formoid">
                <div data-form-alert="true">
                  <div hidden="" data-form-alert-success="true" class="alert alert-form alert-warning text-xs-center">Logging in...</div>
                </div>

                <form name="form" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                  <div class="row row-sm-offset">
                    <div class="col-xs-12 col-md-6">
                      <div class="form-group">
                        <label class="form-control-label" for="form1-5-name">Name<span class="form-asterisk">*</span></label>
                        <div class="form-icon"><img src="assets/images/icon-name.png"></div>
                        <input type="text" class="form-control" name="username" placeholder="Name*" id="form1-5-name">
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                      <div class="form-group">
                        <label class="form-control-label" for="form1-5-email">Password<span class="form-asterisk">*</span></label>
                        <div class="form-icon"><img src="assets/images/icon-email.png"></div>
                        <input type="password" class="form-control" name="password" required="yes" placeholder="Password" id="form1-5-password">
                      </div>
                    </div>
                  </div>
                  <div><input type="submit" name="Submit" class="btn btn-primary mbr-editable-button" Value="LOGIN"></input></div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </section></div>
      <?php
    }
    ?>
    <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer2-2" data-rv-view="6" style="background-color: rgb(52, 73, 94); padding-top: 3.5rem; padding-bottom: 3.5rem;">

      <div class="container">
        <p class="text-xs-center lead">Copyright (c) 2017&nbsp;<a href="http://johnathanz.com">J</a>ohnathan Zamora.</p>
      </div>
    </footer>

    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smooth-scroll/SmoothScroll.js"></script>
    <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
    <script src="assets/jarallax/jarallax.js"></script>
    <script src="assets/theme/js/script.js"></script>

    <input name="animation" type="hidden">
  </body>
  </html>
