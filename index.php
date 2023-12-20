<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Login Form</title>
</head>

<STYle>
  body {   
    background-color: black;
    background-image: url("img/istockphoto-1363270862-2048x2048.jpg");
    background-repeat: no-repeat;
    background-size: 40em;
    background-position: center;
    transform: translatey(-20px)
}

 h1 {
  font-size: 60px;
 }
.card {
  transform: translatey(6em);
}
.username {
 transform: translatey(1em);
}
.password {
  transform: translatey(1em);
}
.submit {
 transform: translatey(4em);
 color: white;
}
.card-footer {
  transform: translatey(9em);
  background-color: darkblue;
  width: 40em;
  margin-left: -18px;
  transform: translatey(135px)
}
.text-center {
  color: white;
}
</STYle>

<body>

  <div class="container mt-5" >

    <div class="row justify-content-center">
      
      <div class="col-md-6">

        <div class="card" style="background-color: transparent; background-position: center; background-repeat: no-repeat; background-size: 800px; height:620px">

          <div class="card-header">

            <h3>Login</h3>

          </div>
          
          <div class="card-body">

        <form action="auth.php" method="post" class="form-login">

            <form>

              <div class="username">

                <label for="fullname" class="form-label">Fullname</label>

                <input type="text" class="form-control" style="background-color: transparent; transparent; border: 2px solid black;" id="fullname" name="fullname" required>

              <div class="password">

                <label for="password" class="form-label">Password</label>

                <input type="password" class="form-control" style="background-color: transparent; transparent; border: 2px solid black;" id="password" name="password" required>    
                
                <div class="submit">

              <button type="submit"  name="signin" class="btn btn-primary" style="background-color: ;
              : aliceblue; color: black; border: 2px solid black;">Login</button>
              </div>

            </form>
          <div class="card-footer" style="background-color: g#CDC50A;">
            <p class="text-center">Don't have an account? <a href=signup.php>Sign Up</a></p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
