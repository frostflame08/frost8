<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Rye&display=swap');
  * {
  box-sizing: border-box;
}

h1 {
  font-size: 4em;
  text-align: center;
  -webkit-text-stroke: .5px black; 
  color: green;
  font-family: 'Rye', serif;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

  </style>

<body>


  <h1>CHOOSE WHAT YOU NEED</h1>

  <div class="row">
  <div class="column">
     <a href="report.php">  <img src="img/gg.avif" alt="AMBULANCE" height="500px" width="500px"> </a>
</div>

<div class="column">
     <a href="report.php">  <img src="img/police.png" alt="POLICE" height="500px" width="500px" style = "background-color: white"> </a>
</div>

<div class="column1">
     <a href="report.php">  <img src="img/firetruck.jpg" alt="FIRETRUCK" height="500px" width="500px" style = "background-color: white"> </a>
</div>
</div>

</body>
</html>