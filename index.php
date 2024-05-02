<?php 

  include __DIR__ . '/Partials/Head.php';

  require_once __DIR__ . '/Model/Movie.php';

  $Best = new Movie('Titanic', 'titanic', 'drama', ['io', 'io', 'e io']);
  $Best -> mainActor = 'Leonardo Di Caprio';
  $Best -> director = 'James Cameron';


  $Second = new Movie('Le Cronache di Narnia', 'Il leone, la strega e l armadio', 'avventura', ['sempre io', 'io', 'ed io']);
  $Second -> mainActor = 'Aslan';
  $Second -> director = 'Lewis';


  $Third = new Movie('Interstellar', 'no-sub', 'avventura', ['io', 'io', 'ed io']);
  $Third -> mainActor = 'Matthew McConaughey';
  $Third -> director = 'Christopher Nolan';


?>


<body>

  <div class="container text-center">
    <h1 class="titolo">OOP-1</h1>
  </div>

  <div class="container d-flex justify-content-between">

    <div class="card my_card m-4" style="width: 18rem;">
      <div class="card-body">
        <img class="card-img-top" src="./img/download.jpg" alt="titanic pic">
        <h2 class="card-title"> <?php $Best->setName() ?> </h2>
        <h3 class="card-title"> <?php $Best->setSub() ?> </h3>
        <div>
          <?php $Best->setInfo() ?>
        </div>
        <p class="card-text">
        <ul>
          <h4>ACTORS</h4>
          <?php foreach ($Best->actors as $actor) : ?>
            <li>
              <?php echo $actor ?>
            </li>
          <?php endforeach ?>
        </ul>
        </p>
      </div>
    </div>

    <div class="card my_card m-4" style="width: 18rem;">
      <div class="card-body">
        <img class="card-img-top" src="./img/download (1).jpg" alt="titanic pic">
        <h2 class="card-title"> <?php $Second->setName() ?> </h2>
        <h3 class="card-title"> <?php $Second->setSub() ?> </h3>
        <div>
          <?php $Second->setInfo() ?>
        </div>
        <p class="card-text">
        <ul>
          <h4>ACTORS</h4>
          <?php foreach ($Second->actors as $actor) : ?>
            <li>
              <?php echo $actor ?>
            </li>
          <?php endforeach ?>
        </ul>
        </p>
      </div>
    </div>

    <div class="card my_card m-4" style="width: 18rem;">
      <div class="card-body">
        <img class="card-img-top" src="./img/download (2).jpg" alt="titanic pic">
        <h2 class="card-title"> <?php $Third->setName() ?> </h2>
        <h3 class="card-title"> <?php $Third->setSub() ?> </h3>
        <div>
          <?php $Third->setInfo() ?>
        </div>
        <p class="card-text">
        <ul>
          <h4>ACTORS</h4>
          <?php foreach ($Third->actors as $actor) : ?>
            <li>
              <?php echo $actor ?>
            </li>
          <?php endforeach ?>
        </ul>
        </p>
      </div>
    </div>


  </div>
</body>
</html>