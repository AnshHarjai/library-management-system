<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>

  <?php
    $msg = "";
    if(!empty($_REQUEST['msg'])){
      $msg=$_REQUEST['msg'];
    }
  ?>


    <div class="container">
      <h1>Admin Login</h1>
      <label for="invalid"><?php echo $msg?></label>
      <p>Please enter your credentials</p>
      <hr />
      <form
        name="admin-login"
        action="login_server_admin.php"
        method="get"
      >
        <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        />

        <label for="psw"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          id="psw"
          required
        />
        <button type="submit" class="registerbtn">Login</button>
      </form>
    </div>

    <div class="container signin">
      <p>Don't have an account?<a href="index.php">Sign up</a>.</p>
      <p>User login: <a href="usr_login.php">Sign in</a>.</p>
    </div>
  </body>
</html>
