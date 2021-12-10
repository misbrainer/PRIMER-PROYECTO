<?php include 'includes/session.php'; ?>
<?php
if (isset($_SESSION['user'])) {
  header('location: cart_view.php');
}

?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition register-page">
  <div class="register-box">
    <?php
    if (isset($_SESSION['error'])) {
      echo "
          <div class='callout callout-danger text-center'>
            <p>" . $_SESSION['error'] . "</p> 
          </div>
        ";
      unset($_SESSION['error']);
    }

    if (isset($_SESSION['success'])) {
      echo "
          <div class='callout callout-success text-center'>
            <p>" . $_SESSION['success'] . "</p> 
          </div>
        ";
      unset($_SESSION['success']);
    }
    ?>

    <?php

    //index.php

    //Include Configuration File
    include('config.php');

    $login_button = '';


    if (isset($_GET["code"])) {

      $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


      if (!isset($token['error'])) {

        $google_client->setAccessToken($token['access_token']);


        $_SESSION['access_token'] = $token['access_token'];


        $google_service = new Google_Service_Oauth2($google_client);


        $data = $google_service->userinfo->get();


        if (!empty($data['given_name'])) {
          $_SESSION['firstname'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
          $_SESSION['lastname'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
          $_SESSION['email'] = $data['email'];
        }

        if (!empty($data['gender'])) {
          $_SESSION['user_gender'] = $data['gender'];
        }

        if (!empty($data['picture'])) {
          $_SESSION['user_image'] = $data['picture'];
        }
      }
    }


    if (!isset($_SESSION['access_token'])) {

      $login_button = '<a href="' . $google_client->createAuthUrl() . '">Login With Google</a>';
    }

    ?>

    <div class="register-box-body">
      <p class="login-box-msg">Registrar una nueva membresía</p>

      <form action="register.php" method="POST">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="firstname" placeholder="Primer nombre" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="lastname" placeholder="Apellido" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="Correo electrónico" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="repassword" placeholder="Vuelva a escribir la contraseña" required>
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>

        <hr>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="signup"><i class="fa fa-pencil"></i> Regístrate</button>



            <div class="">
              <br />
              <h2 align="center">PHP Login using Google Account</h2>
              <br />
              <div class="panel panel-default">
                <?php
                if ($login_button == '') {
                  echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                  echo '<img src="' . $_SESSION["user_image"] . '" class="img-responsive img-circle img-thumbnail" />';
                  echo '<h3><b>Name :</b> ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . '</h3>';
                  echo '<h3><b>Email :</b> ' . $_SESSION['email'] . '</h3>';
                  echo '<h3><a href="logout.php">Logout</h3></div>';
                } else {
                  echo '<div align="center">' . $login_button . '</div>';
                }
                ?>
              </div>
            </div>



          </div>
        </div>
      </form>
      <br>
      <a href="login.php">Ya tengo membresia</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Casa</a>
    </div>
  </div>

  <?php include 'includes/scripts.php' ?>
</body>

</html>