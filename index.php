<?php 

  require_once __DIR__. '/model/Movie.php';

  $Titanic = new Movie('Titanic', 'no-sub', 'drama');

  $Titanic -> mainActor = 'Leonardo Di Caprio';
  $Titanic -> director = 'James Cameron';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP-1</title>
</head>
<body>
  
  <h1>OOP-1</h1>

</body>
</html>