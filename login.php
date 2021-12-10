<?php include 'includes/session.php'; ?>
<?php
if (isset($_SESSION['user'])) {
  header('location: cart_view.php');
}
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page">
  <div class="login-box">
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
    <div class="login-box-body">
      <p class="login-box-msg">Inicia sesión para comenzar tu sesión</p>

      <form action="verify.php" method="POST">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col">
            <button style="width: 80%;" type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Ingresar</button>
          </div>
        </div>

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
              $_SESSION['user_first_name'] = $data['given_name'];
            }

            if (!empty($data['family_name'])) {
              $_SESSION['user_last_name'] = $data['family_name'];
            }

            if (!empty($data['email'])) {
              $_SESSION['user_email_address'] = $data['email'];
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

          $login_button = '<a href="' . $google_client->createAuthUrl() . '">Entrar con Google</a>';
        }

        ?>
        <div class="">
          <br>
          <div class="panel panel-default">
            <?php
            if ($login_button == '') {
              echo '<div class="panel-heading">Bienvenido</div><div class="panel-body">';
              echo '<img src="' . $_SESSION["user_image"] . '" class="img-responsive img-circle img-thumbnail" />';
              echo '<h3><b>Name :</b> ' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . '</h3>';
              echo '<h3><b>Email :</b> ' . $_SESSION['user_email_address'] . '</h3>';
              echo '<h3><a href="logout.php">Logout</h3></div>';
            } else {
              echo '<div align="center">' . $login_button . '</div>';
            }
            ?>
          </div>

      </form>
      <br>
      <a href="password_forgot.php">Olvidé mi contraseña</a><br>
      <a href="signup.php" class="text-center">Registrar una nueva membresía</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Casa</a>
    </div>
  </div>

  <?php include 'includes/scripts.php' ?>
</body>

</html>