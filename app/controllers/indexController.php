<?php
    require('app/database/db.php');

    $db = new Connection('localhost', 'filedown', 3306, 'root', '');

    $sentence1 = $db->prepare("SELECT * FROM ARCHIVOS WHERE FORMATO_ARCHIVO='.jpg'");
    $sentence1->execute();
    $results1 = $sentence1->fetchAll();

    $sentence2 = $db->prepare("SELECT * FROM ARCHIVOS WHERE FORMATO_ARCHIVO='.pdf'");
    $sentence2->execute();
    $results2 = $sentence2->fetchAll();

    $sentence3 = $db->prepare("SELECT * FROM ARCHIVOS WHERE FORMATO_ARCHIVO='.rar'");
    $sentence3->execute();
    $results3 = $sentence3->fetchAll();
    
    $sentence4 = $db->prepare("SELECT * FROM ARCHIVOS WHERE FORMATO_ARCHIVO='.xls'");
    $sentence4->execute();
    $results4 = $sentence4->fetchAll();
?>
    <h2>JPG</h2>

<?php
    foreach ($results1 as $result) {
        echo "
        <article>
            <ul>
                <li><img src='{$result['RUTA_IMG']}' alt=''></li>
                <li>{$result['TITULO']}</li>
                <button><a href=''>DESCARGAR</a></button>
            </ul>
        </article>
        ";
    }
?>
    <h2>RAR</h2>

<?php
    foreach ($results2 as $result) {
        echo "
        <article>
            <ul>
                <li><img src='{$result['RUTA_IMG']}' alt=''></li>
                <li>{$result['TITULO']}</li>
                <button><a href=''>DESCARGAR</a></button>
            </ul>
        </article>
        ";
    }
?>
    <h2>PDF</h2>

<?php
    foreach ($results3 as $result) {
        echo "
        <article>
            <ul>
                <li><img src='{$result['RUTA_IMG']}' alt=''></li>
                <li>{$result['TITULO']}</li>
                <button><a href=''>DESCARGAR</a></button>
            </ul>
        </article>
        ";
    }
?>
    <h2>XLS</h2>
<?php
    foreach ($results4 as $result) {
        echo "
        <article>
            <ul>
                <li><img src='{$result['RUTA_IMG']}' alt=''></li>
                <li>{$result['TITULO']}</li>
                <button><a href=''>DESCARGAR</a></button>
            </ul>
        </article>
        ";
    }
?>