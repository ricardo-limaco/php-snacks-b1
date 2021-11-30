<?php 
$listNumber = [];

for ($i = 0; $i < 15; $i++) {
  $numberRandom = rand(1, 100);

  if (!in_array($numberRandom, $listNumber)){
    $listNumber[] = $numberRandom;
  } else {
    $i--;
  }
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>
  
  <ul>
    <?php 
      for($i = 0; $i < count($listNumber); $i++) {
        $number = $listNumber[$i];
      
        echo "<li>
                <h2>
                  $number
                </h2>
              </li>";
      };
    ?>
  </ul>

</body>
</html>