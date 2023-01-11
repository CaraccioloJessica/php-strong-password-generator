<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>

  <?php
  // prendo lunghezza password decisa da utente
  $passLength = $_GET["password"] ?? '';

  // funzione per generare password random in base a lunghezza decisa da utente
  function getRandomPassword($passLength)
  {
    // parametri divisi in categorie per eventuale milestone4
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $numbers = '1234567890';
    $symbols = '!?@#$&*';
    $chars = $letters . $numbers . $symbols;
    // ritorna stringa della lunghezza data da utente randomizzata
    return substr(str_shuffle($chars), 0, $passLength);
  }
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