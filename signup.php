<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Sign Up Form</title>
</head>
<STYle>
  body {   
    background-color: black;
    background-image: url("image/tree.jpg");
    background-repeat: no-repeat;
    background-size: 100em;
}

.textbox1 {
    transform: translatey(2em);
    color: yellow;
    -webkit-text-stroke: 0.2px white;
}

.form-control {
  height: 40px
}
.textbox2 {
 transform: translatey(3em);
 color: yellow;
 -webkit-text-stroke: 0.2px white;
}
.city1 {
  transform: translatey(2.02em);
  margin-left: 400px;
  font-size: 20px;
}
.province1 {
  background-color: transparent; 
  color: white;
  transform: translatey(3.5em);
  margin-left: 70px;
  font-size: 20px;
}
.username {
 transform: translatey(0.5em);
 color: yellow;
}
.submit {
 transform: translatey(2em);
 color: white;
}
.card-footer {
  transform: translatey(4.5em);
}
h3 {
  margin-left: 240px;
  color: white;
  font-size: 35px;
}

</STYle>

<body>
  <form action ="signin.php" method ="post" class ="form-login"> 
   
  <div class="container mt-5">

    <div class="row justify-content-center">
      
      <div class="col-md-6">

      <div class="card" style="background-image: url(img/f4f1141bcf984bcd8af9ac7135d8bc4c.jpeg); background-position: center; background-repeat: no-repeat; background-size: 800px; height: 650px">
          
          <div class="card-header">
          
            <h3>Sign Up</h3>

          </div>

          <div class="card-body">


              <div class="textbox1">

                <label for="fullname" name="fullname" class="form-label">Full Name</label>

                <input type="text" class="form-control" style="background-color: transparent;  color: white; id="fullname name="fullname" required>

              </div>

   <div class="textbox2">

               <label for="Address" name="address" class="form-label">Address</label>
               <input type="Address" class="form-control" style="background-color: transparent; color: white; id="Address name="address" required>


   <div class="username">

                <label for="contact" name="contact" class="form-label">Contact number</label>
                <input type="text" class="form-control" style="background-color: transparent;  color: white; id="username name="contact" required>

   <div class="mb-3">

                <label for="password" name="password" class="form-label">Password</label>
                <input type="password" class="form-control" style="background-color: transparent; id="password name="password" required>   

   <div class="submit">
              <button type="submit" style="background-color: green; border: 2px solid black;" name="submit" class="btn btn-primary">Sign Up</button>
              </div>

            </form>

          <div class="card-footer">
            
            <p class="text-center">Already have an account? <a href="index.php">Login</a></p>

          </div>

        </div>

      </div>

    </div>

  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
