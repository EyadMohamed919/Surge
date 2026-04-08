<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="public/css/login.css">
  <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>SURGE | LOGIN</title>
</head>
<body>

<div class="login-container" id="login-container">
  <div class="login-header">
    <div class="brand-icon">
    </div>
    <h1 class="login-title">Login</h1>
    <div class="login-subtitle">sign-in to admin dashboard</div>
  </div>

  <div class="message-area" id="message-area"></div>

  <form id="login-form" action="src/router/UserRouter.php" method="post">
    <div class="form-group">
      <label for="email-username" class="input-label">
      <i class="fa-solid fa-user"></i>
        EMAIL OR USERNAME
      </label>
      <input type="text" name="email" class="input-field" placeholder="example@surgeenergyegypt.com" autocomplete="username">
    </div>

    <div class="form-group">
      <label for="user-password" class="input-label">
      <i class="fa-solid fa-lock"></i>
        PASSWORD
      </label>
      <input type="password" name="password" class="input-field" placeholder="••••••••">
    </div>


    <button type="submit" class="login-button" name="login">
        <i class="fa-solid fa-arrow-right-to-bracket"></i>
      LOGIN TO DASHBOARD
    </button>

  </form>
</div>
</body>
</html>