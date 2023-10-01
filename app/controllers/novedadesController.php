<?php
    require('app/database/db.php');

    $db = new Connection('localhost', 'filedown', 3306, 'root', '');

    $sentence1 = $db->prepare("SELECT * FROM ARCHIVOS GROUP BY FECHA_SUBIDA DESC;");
    $sentence1->execute();
    $results1 = $sentence1->fetchAll();
?>

<h2>👇🏻 ÚLTIMOS ARCHIVOS AÑADIDOS</h2>