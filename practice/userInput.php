<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <form action="userInput.php" method="get">
      Name: <input type="text" name="userName"  />
      <br />
      Age: <input type="text" name="userAge" />
      <input type="submit"  />
    </form>
    <br />

  Your name is <?php echo $_GET["userName"]; ?>
  <br />
  Your age is <?php echo $_GET["userAge"]; ?>

  </body>
</html>
