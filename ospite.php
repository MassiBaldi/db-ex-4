<?php
  include 'database.php';

  $id = $_GET['ospite_id'];

  if (empty($id))
  {
    die('Errore nel caricamento della pagina');
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Ex-4-dati-utente</title>
</head>
<body>

  <div class="container">
    <h1>
      <a href="http://localhost/db-ex-4/index.php"> << </a>
      Dati ospite scelto
    </h1>
    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Cognome</th>
          <th>Data di nascita</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datiUtente as $datoUtente) {
          $date = DateTime::createFromFormat('Y-m-d H:i:s', $datoUtente['date_of_birth']);
          if ($id == $datoUtente['id']) { ?>
            <tr>
              <td><?php echo $datoUtente['name']; ?></td>
              <td><?php echo $datoUtente['lastname']; ?></td>
              <td><?php echo $date->format('d-m-Y'); ?></td>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbody>
    </table>

  </div>
</body>
</html>
