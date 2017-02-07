<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Passphrase Generator</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <p>
      <h3>Passphrase Generator v.1.0</h3></p>
      <form action="index.php" method="POST">
        <label for="minLength">Min. Länge:</label><input type="text" id="minLength" name="minLength" size="2" /><br />
        <label for="maxLength">Max. Länge:</label><input type="text" id="maxLength" name="maxLength" size="2" /><br />
        <button type="submit" value="submit">Generieren!</button>
      </form>
    <?php
     include('pwgen.php');
     if (isset($_POST['minLength'])) {
      $minLength=intval($_POST['minLength']);
      $maxLength=intval($_POST['maxLength']);
       echo "<b>Passwort:</b>".getPass(2,$minLength, $maxLength); }
       else echo "Bitte Daten eingeben.";
     ?>

   </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
