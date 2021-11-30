<?php 
// Name
if (!isset($_GET["name"]) || strlen($_GET["name"]) < 3){
  echo "<h2>Accesso negato</h2>";
  exit("Valore di name non valido");
}

// Age
if (!isset($_GET["age"]) || !is_numeric($_GET["age"])) {
  echo "<h1>Accesso negato</h1>";
  exit("Valore di 'age' non valido");
}

// Mail
if (isset($_GET["mail"])) {
  
  $hasAt = strpos($_GET["mail"], "@");

  if ($hasAt === false) {
    echo "<h1>Accesso negato</h1>";
    exit("Valore di mail non valido");
  }

  
  $domain = explode("@", $_GET["mail"])[1];

  
  if (strpos($domain, ".") === false) {
    echo "<h1>Accesso negato</h1>";
    exit("Valore di mail non valido");
  }
} else {
  echo "<h1>Accesso negato</h1>";
  exit("Valore di mail non valido");
}

$name = $_GET["name"];
$age = $_GET["age"];
$mail = $_GET["mail"];

$dati = [
  "name" => $name,
  "mail" => $mail,
  "age" => $age,
];

echo "<h2>Accesso riuscito</h2>";

?>