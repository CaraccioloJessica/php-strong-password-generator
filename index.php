<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Password Generator</title>

  <?php
  include_once __DIR__ . '/function.php';
  ?>
</head>

<body>
  <div class="container">
    <h1>Password generator</h1>

    <form>
      <label for="password"> Lunghezza password: </label>
      <input type="number" placeholder="Scrivi un numero..." name="password">
      <input type="submit" value="Genera">

      <h3>
        <?php
        // var_dump($passLength);
        echo "Password generata:" . " " . getRandomPassword($passLength)
          ?>
      </h3>
    </form>
  </div>
</body>

</html>