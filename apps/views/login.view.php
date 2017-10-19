<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>

        <!-- Material Design Icon -->
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/1.9.32/css/materialdesignicons.min.css">

        <style type="text/css">
            /*
         * Just for auth design CSS
         */
            body {
                background-image: url('<?php $baseUrl;?>public/img/bg.jpg');
                width: 100%;
            }

            html {
                  display: table;
                  margin: auto;
              }
              body {
                  display: table-cell;
                  vertical-align: middle;
              }
              .margin {
                  margin: 0 !important;
              }
        </style>
    </head>
    <body>
      <div class="row">
          <div class="col s12 z-depth-6 card-panel">
              <form class="login-form" method="post">
                  <div class="row">
                      <div class="input-field col s12 center">
                          <a href="<?php $baseUrl;?>4dm1n.php?page=dashboard&action=login">
                              <img src="<?php $baseUrl;?>public/img/logo.png" alt="" class="responsive-img valign profile-image-login">
                          </a>
                      </div>
                  </div>
                  <div class="row">
                      <?php
                      if (isset($error)) {
                          foreach ($error as $error) {
                              ?>
                              <div class="row alert_box">
                                  <div class="col s12">
                                      <div class="card red darken-2">
                                          <div class="row">
                                              <div class="col s9">
                                                  <div class="card-content white-text">
                                                      <?php echo $error; ?>
                                                  </div>
                                              </div>
                                              <div class="col s3 white-text">
                                                  <i class="mdi mdi-close close right alert_close" aria-hidden="true"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php
                          }
                      }
                      ?>
                  </div>
                  <div class="row">
                      <div class="input-field col s12">
                          <i class="mdi mdi-account-circle prefix"></i>
                          <input id="username" name="username" type="text" class="validate" autofocus>
                          <label for="username">Username</label>
                      </div>
                      <div class="input-field col s12">
                          <i class="mdi mdi-key-variant prefix"></i>
                          <input id="password" name="password" type="password" class="validate">
                          <label for="password">Password</label>
                      </div>
                  </div>
                  <div class="row">
                      <button type="submit" name="btn_login" class="btn waves-effect waves-light deep-purple darken-4 lighten-1 col s12">Masuk<i class="mdi mdi-launch"></i></button>
                  </div>
              </form>
          </div>
        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <!--Jquery ui js-->
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
</html>
