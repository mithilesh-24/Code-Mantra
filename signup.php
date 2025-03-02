<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body{
      margin: 15%;
      margin-top: 0%;
      margin-bottom: 5%;
      background-image: url(photos/signup.gif);
      background-size: cover;
      color: white;
    }
    .design{
      margin: 20%;
      border: 2px solid black;
      text-align: center;
      padding: 30px;
      margin-top: 5%;
    }
  </style>
</head>
<body>
<div class="container mt-3">
  <h3>Sign Up</h3>  
  <form action="server.php" class="was-validated" method="POST" id='form'>
    <div class="mb-3 mt-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3 mt-3">
      <label for="ename" class="form-label">Email:</label>
      <input type="email" class="form-control" id="ename" placeholder="Enter email" name="ename" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <p>By creating an account you agree to our <a href="tp2.php" style="color:dodgerblue">Terms & Conditions</a>.</p>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">I agree on Terms and Conditions.</label>
      
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </div>
  <input type="submit" class="btn btn-primary" name="submit" id="submit">
  
  </form>
</div>

</body>
</html>
