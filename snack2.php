<?php
$posts = [
  "10/01/2019" => [
    [
      "title" => "Post 1",
      "author" => "Michele Papagni",
      "text" => "Testo post 1"
    ],
    [
      "title" => "Post 2",
      "author" => "Michele Papagni",
      "text" => "Testo post 2"
    ],
  ],
  "10/02/2019" => [
    [
      "title" => "Post 3",
      "author" => "Michele Papagni",
      "text" => "Testo post 3"
    ]
  ],
  "15/05/2019" => [
    [
      "title" => "Post 4",
      "author" => "Michele Papagni",
      "text" => "Testo post 4"
    ],
    [
      "title" => "Post 5",
      "author" => "Michele Papagni",
      "text" => "Testo post 5"
    ],
    [
      "title" => "Post 6",
      "author" => "Michele Papagni",
      "text" => "Testo post 6"
    ]
  ],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>

<body>
  <ul>
    <?php
    $key = array_keys($posts);

    for ($i = 0; $i < count($key); $i++) {
      $date = $key[$i];

      for ($x = 0; $x < count($posts[$date]); $x++) {
        $post = $posts[$date][$x];

        $title = $post["title"];
        $author = $post["author"];
        $text = $post["text"];

        echo "<li>
                <h3>$date</h3>
                <p>$title</p>
                <p>$author</p>
                <p>$text</p>
              </li>";
      };
    };
    ?>
  </ul>
</body>

</html>