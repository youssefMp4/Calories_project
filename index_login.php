<?php
session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Calories</title>
    <link rel="icon" href="ASSETS/Logo.png" />
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>  
</head>

<body>
<nav class="app__navbar">
    <div class="app__navbar-logo">
      <img src="assets/Logo.png" alt="Logo" />
    </div>
    <ul class="app__navbar-links ">
      <li><a href="index.php#home">Accueil</a></li>
      <li><a href="index.php#about">A propos</a></li>
      <li><a href="index.php#menu">Menu</a></li>
      <li><a href="index.php#awards">Awards</a></li>
      <li><a href="index.php#contact">Find Us</a></li>
      <li><a href="index.php#hour">Horaires</a></li>
    </ul>
    
  </nav>
    <div class="container">
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
          <form action="login.php" method="post">
            <h2>Login</h2>
            <?= showError($errors['login']) ?>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
            <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>
          </form>
        </div>
        <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
            <form action="register.php" method="post">
              <h2>Register</h2>
              <?= showError($errors['register']) ?>
              <input type="text" name="name" placeholder="Name" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="password" name="password" placeholder="Password" required>
              <select name="role" required>
                <option value="" >---Select Role---</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
                </select>
              <button type="submit" name="register">Register</button>
              <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login</a></p>
            </form>
          </div>

      </div>
     
  
</body>

</html>