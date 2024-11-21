<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login User</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <div class="box">
    <h2>Login User:</h2>
    <span class="required">* = required field</span>
    <form action="login.php" method="POST">
      <label for="uName">Username: <span class="required">*</span></label><br>
      <input type="text" name="uName" id="uName" placeholder="Username" required><br>
      <label for="password">Password: <span class="required">*</span></label><br>
      <input type="password" name="password" id="password" placeholder="*******" required><br>
      <button type="submit">Login</button>
    </form>
    <p>No account yet? Then click <a href="index.php">here</a> to register</p>
  </div>
</body>

</html>