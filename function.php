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