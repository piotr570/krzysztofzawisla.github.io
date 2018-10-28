<?php
  if (isset($_POST["rozowy"])) {
    setcookie("kolor", "rozowy", time()+31556926);
    header("Location: https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
  }
  if (isset($_POST["czerwony"])) {
    setcookie("kolor", "czerwony", time()+31556926);
    header("Location: https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
  }
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
  <title>Color picker test</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css"
  <?php
    if (isset($_COOKIE["kolor"])){
      switch ($_COOKIE["kolor"]) {
        case "czerwony":
          echo 'href="styleCzerwony.css"';
          break;
        case "rozowy":
          echo 'href="styleRozowy.css"';
          break;
      }
    }
  ?> >
</head>
<body>
  <form method="post">
    <button type="submit" name="rozowy">Różowy</button>
    <button type="submit" name="czerwony">Czerwony</button>
  </form>
  Kod:<br>
  <code>
    Part 1:<br>
    php<br>
    if (isset($_POST["rozowy"])) {<br>
      setcookie("kolor", "rozowy", time()+31556926);<br>
      header("Location: index.php");<br>
    }<br>
    if (isset($_POST["czerwony"])) {<br>
      setcookie("kolor", "czerwony", time()+31556926);<br>
      header("Location: index.php");<br>
    }<br>
  Part 2:<br>
  php<br>
    if (isset($_COOKIE["kolor"])){<br>
      switch ($_COOKIE["kolor"]) {<br>
        case "czerwony":<br>
          echo 'href="styleCzerwony.css"';<br>
          break;<br>
        case "rozowy":<br>
          echo 'href="styleRozowy.css"';<br>
          break;<br>
      }<br>
    }<br>
</code>
</body>
</html>
