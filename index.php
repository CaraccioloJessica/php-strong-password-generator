<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>

  <?php
  include_once __DIR__ . '/function.php';
  ?>
</head>

<body>
  <h1>Password generator</h1>
  <form>
    <label for="password"> Lunghezza password: </label>
    <input type="number" name="password" required>
    <input type="submit" value="Genera">

    <h3>
      <?php
      // var_dump($passLength);
      echo "Password generata:" . " " . getRandomPassword($passLength)
        ?>
    </h3>
  </form>
</body>

</html>