<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Calculate Age in Second</title>
</head>
<body>
  <div id="container">
    <form action= "age.php" method="get">
      <input type="number" name="age" placeholder="Podaj swój wiek">
      <input type="submit" name="check" value="Sprawdź!">

    </div>

    <?php
    if (isset($_GET["check"])){
      if (isset($_GET["age"]) && !empty($_GET["age"]))
      {
        ageinsecond();
      } else{
        echo "Musisz wpisać wiek!";
      }
    }
    ?>
  </body>
  </html>
