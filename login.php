<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>


  <style type="text/css">
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background: linear-gradient(to top left, #5e5454, #eae9e9);
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100vh;
  }

  #parent {
    margin: 0 1rem 0;
    /* padding: 100px; */
    text-align: center;
    border-radius: 0 0 8px 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    /* background: #fff; */
    background: whitesmoke;
    min-height: 100vh;
    display: grid;
    place-content: center;
  }

  #container {
    width: 400px;
    height: 500px;
    padding: 40px 38px;
    border-radius: 8px;
    background: #fff;
    margin: auto;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
    position: relative;
  }

  .round {
    border-radius: 100%;
    transition: transform .2s;
  }

  input {
    margin: 0;
    padding: 0;
    border: none;
  }

  .padwidth {
    box-sizing: border-box;
    padding: 15px 44px;
    width: 70%;
  }

  .largetext {
    font-size: 1.5rem;
  }

  .bigtext {
    font-size: 1rem;
  }

  button {
    margin-top: 15px;
    color: purple;
    font-weight: bold;
    font-family: vardana;
    border: none;
  }

  button:active {
    position: relative;
    top: 1px;
  }

  .white {
    color: #585353;
    margin-bottom: 25px;
  }

  .b-rad {
    border-radius: 8px;
  }

  .b-rad-btm {
    border-radius: 0 0 8px 8px;
    border-top: 0;
    border: 1px groove;
  }

  .b-rad-top {
    border-radius: 8px 8px 0 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.17);
    border: 1px groove;
  }

  input:focus {
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
  }

  form {
    margin: 2rem auto;
  }

  .text-muted {
    color: #036867;
  }

  .round:hover {
    transform: scale(1.1);
  }

  .btn {
    /* background: radial-gradient(#31a949, transparent); */
    background: radial-gradient(circle, grey 0.4%, transparent);
    outline: none;
    color: white;
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
  }

  .btn:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  #eye-box {
    position: relative;
  }

  .btn-show-pass {
    opacity: 0.6;
  }

  .zmdi-eye {
    /* padding: 0;
			margin: 0; */
    position: absolute;
    right: 3.9rem;
    bottom: 13px;
  }

  .zmdi-eye-off {
    position: absolute;
    /* right: 3.6rem;
			bottom: 1rem; */
    right: 3.9rem;
    bottom: 13px;
  }

  .zmdi-key {
    position: absolute;
    top: 0;
    left: 0;
  }

  .zmdi-account {
    position: absolute;
  }


  .imginputwrap {
    position: relative;
  }

  .logimg {
    position: absolute;
    top: 8px;
    left: 52px;
  }

  #lg-nav-back {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: -6rem;
    right: 0;
    background: white;
    padding: 0.5rem 1.6rem;
    border-radius: 9999px;
  }

  #container a {
    text-decoration: none;
    color: black;
    font-family: monospace;
    font-weight: 500;
  }
  </style>
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
</head>

<body>
  <div id="parent">
    <div id="container">
      <a id="lg-nav-back" href="index"><img src="img/back.png" alt="" srcset=""
          style="width:100%; height:100%; filter: invert(1);"><span style="font-size: 1.6rem;">Back</span></a>
      <form method="post" action="func.php">
        <img class="" src="img/logo.png" alt="xyz-logo" width="120px">
        <p class="largetext white">Sign in</p>
        <div id="content">
          <div id="eye-box">
            <div class="imginputwrap">
              <img class="logimg" src="img/user32e0.png" alt="">
              <input class="padwidth b-rad-top" type="text" name="username" value="" placeholder="Login ID ..">
            </div>
            <div class="imginputwrap">
              <img class="logimg" src="img/key32s0.png" alt="">
              <input class="padwidth b-rad-btm eye-class" type="password" name="password" value=""
                placeholder="Password ..">
              <span class="btn-show-pass">
                <i class="zmdi zmdi-eye"></i>
              </span>
            </div>
          </div>
          <button class="padwidth bigtext b-rad btn" type="submit" name="login_submit">Submit</button>
        </div>
      </form>
      <p class="mt-5 mb-3 text-muted" style="opacity:0.6;">© 2019-20 Multispeciality Hospital.</p>
    </div>
  </div>
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>