<?php
$paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non diam sapien. Orci varius natoque penatibus et magnis dis parturient montes,
nascetur ridiculus mus. Etiam condimentum tincidunt finibus. Suspendisse nec ex enim. Ut viverra, ipsum sed suscipit pellentesque, leo orci pretium turpis,
nec scelerisque nibh leo sit amet lacus. Quisque eget orci in tellus molestie egestas ac eu tortor. Donec ut massa sollicitudin, mattis magna sit amet, efficitur sapien.
Nunc tristique ipsum sed dui cursus venenatis quis ut lacus. Donec volutpat lacus sit amet quam vulputate, at congue massa pretium. Donec sollicitudin arcu in tortor varius,
ut viverra lorem vehicula. Vestibulum tempus porta orci, sit amet pharetra ipsum. Sed suscipit erat dolor. Sed volutpat dapibus felis, faucibus auctor nisl posuere nec";

$listParagraph = explode(".", $paragraph);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>

<body>
  <ul>
    <?php
    for ($i = 0; $i < count($listParagraph); $i++) {
      $singleParagraph = $listParagraph[$i];

      echo "<li>$singleParagraph</li>";
    };
    ?>
  </ul>
</body>

</html>