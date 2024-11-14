<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register User</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <div class="box">
    <h2>Register new User:</h2>
    <span class="required">* = required field</span>
    <form action="register.php" method="POST">
      <label for="uName">Username: <span class="required">*</span></label><br>
      <input type="text" name="uName" id="uName" placeholder="Username" required><br>
      <label for="password">Password: <span class="required">*</span></label><br>
      <input type="password" name="password" id="password" placeholder="*******" required><br>
      <label for="email">E-mail adress: <span class="required">*</span></label><br>
      <input type="email" name="email" id="email" placeholder="example@example.com" required><br>
      <button type="submit">Register</button>
    </form>
    <p>Alread registered? Then click <a href="login.html">here</a> to login</p>
  </div>
</body>

</html>