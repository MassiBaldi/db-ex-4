<?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'asd';
    $dbname = 'Hotel_Booleana';

    $conn = new Mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die('Si è verificato un errore '. $conn->connect_error);
    }

    $sql = 'SELECT * FROM `prenotazioni_has_ospiti`';
    $result = $conn->query($sql);

    $datiPrenotazioni = [];

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $datiPrenotazioni[] = $row;
        }
    }

    $sql2 = 'SELECT * FROM `ospiti`';

    $result2 = $conn->query($sql2);

    $datiUtente = [];

    if ($result2->num_rows > 0)
    {
        while ($row2 = $result2->fetch_assoc())
        {
            $datiUtente[] = $row2;
        }
    }

?>
