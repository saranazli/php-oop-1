<?php 

  require_once __DIR__. '/Model/Movie.php';

  $Best = new Movie('Titanic', 'titanic', 'drama', ['io', 'io', 'e io']);

  $Best -> mainActor = 'Leonardo Di Caprio';
  $Best -> director = 'James Cameron';

  $Second = new Movie('Le Cronache di Narnia', 'Il leone, la strega e l armadio', 'avventura', ['sempre io', 'io', 'ed io']);

  $Second -> mainActor = 'Leonardo Di Caprio';
  $Second -> director = 'James Cameron';
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

  <h2>
    <?php $Best->setName() ?>
  </h2>
  <div>
    <?php $Best->setSub() ?>
  </div>

  <ul>
    <h3>ACTORS</h3>
    <?php foreach ($Best->actors as $actor) : ?>
      <li>
        <?php echo $actor ?>
      </li>
    <?php endforeach ?>
  </ul>


  <h2>
    <?php $Second->setName() ?>
  </h2>
  <div>
    <?php $Second->setSub() ?>
  </div>

  <ul>
    <h3>ACTORS</h3>
    <?php foreach ($Second->actors as $actor) : ?>
      <li>
        <?php echo $actor ?>
      </li>
    <?php endforeach ?>
  </ul>


</body>
</html>