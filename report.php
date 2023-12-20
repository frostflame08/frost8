
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Rye&display=swap');
    h3 {
        color: green;
        text-align: center;
        font-family: 'Rye', serif;
    }
    .submit {
      transform: translatey(13em);
    }
    body {
      background-color: black;
    }
    .emergency {
      transform: translatey()
    }
    .form-control {
      text-align: 
    }
    .none {
      transform: translatey(2em);
    }
</style>
<body>

<div class="container mt-5" >

<div class="row justify-content-center">
  
  <div class="col-md-6">

    <div class="card" style= "background-image: url(img/635893993724097427-first-responders.webp); background-color: white; background-position: center; background-repeat: no-repeat; background-size: 800px; height:620px">

      <div class="card-header">

        <h3> EMERGENCY RESPONSE TEAM ON HAND</h3>

      </div>
      
      <div class="card-body">

    <form action="signin2.php" method="post" class="form-login">

        <form>

          <div class="username">

            <label for="location" name="location" class="form-label">Exact location</label>

            <input type="text" class="form-control" style="background-color: transparent; transparent; border: 2px solid black;" id="location" name="location" required>

            <div class="emergency">

            <label for="emergency" name="emergency" class="form-label">Emergency team</label>

            <input type="text" class="form-control" style="background-color: white; transparent; border: 2px solid black;" id="emergency" name="emergency" required>
            
            <div class="submit">

            <label for="details" name="details" style= "color: black;">DETAILED STATEMENT</label>
            <input  type="freeform" id="details" class="form-control" name="details" rows="4" cols="50" required>

            <div class="none">
              <button type="submit" style="background-color: green; border: 2px solid black;" name="submit" class="btn btn-primary">Submit</button>
              </div>
</form>

        </div>

      </div>

    </div>

  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>