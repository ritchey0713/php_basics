<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $phrase = "Hello World! <br />";
      echo strtoupper($phrase );
      echo strtolower($phrase);
      echo strlen($phrase );
      $phrase[0] = "Z";
      echo $phrase[0];
      echo str_replace("Hello", "Goodbye", $phrase);
      echo substr($phrase, 6);
    ?>

  </body>
</html>
