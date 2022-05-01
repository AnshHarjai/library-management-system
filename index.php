<?php
 $pswdmsg="";

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pswdmsg'])){
  $pswdmsg=$_REQUEST['pswdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="container">
      <h1>Register</h1>
      <label for="pswdmatch"><?php echo $pswdmsg?></label>
      <label for="registration"><?php echo $msg?></label>
      <p>Please fill in this form to create an account.</p>
      <hr />

      <form
        name="usr-signup"
        action="usr-signup.php"
        method="get"
      >
        <label for="name"><b>Name</b></label>
        <input
          type="text"
          placeholder="Enter Name"
          name="name"
          id="name"
          required
        />

        <label for="id"><b>Id</b></label>
        <input
          type="number"
          placeholder="Enter ID"
          name="id"
          id="id"
          required
        />

        <label for="contact-number"><b>Contact Number</b></label>
        <input
          type="number"
          placeholder="Enter contact number"
          name="contact-number"
          id="contact-number"
          required
        />

        <label for="dob"><b>Date of birth</b></label>
        <input
          type="date"
          placeholder="Enter d-o-b"
          name="dob"
          id="dob"
          required
        />

        <Label style="color:red">*<?php echo $emailmsg?></label>
        <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        />

        <Label style="color:red">*<?php echo $pasdmsg?></label>
        <label for="psw"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          id="psw"
          required
        />

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input
          type="password"
          placeholder="Repeat Password"
          name="psw-repeat"
          id="psw-repeat"
          required
        />
        <hr />
        <p>
          By creating an account you agree to our
          <a href="#">Terms & Privacy</a>.
        </p>

        <button type="submit" class="registerbtn">Register</button>
      </form>
    </div>

    <div class="container signin">
      <p>Already have an account? <a href="usr_login.php">Sign in</a>.</p>
      <p>Admin login: <a href="admin_login.php">Sign in</a>.</p>
    </div>
  </body>
</html>
