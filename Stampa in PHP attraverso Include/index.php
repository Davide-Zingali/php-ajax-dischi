<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Album</title>

    <!-- tag php -->
    <?php

        // inclusione file esterno
        require_once 'data/data.php';

    ?>
</head>
<body>
    <!-- intestazione -->
    <div>
        <h1>
            ALBUM
        </h1>
    </div>
    <div class="container">
        <!-- tag php -->
        <?php

            for ($i=0; $i < count($database); $i++) {
                ?>
                    <div class="box">
                        <?php
                            echo  '<img src="' . $database[$i]['poster'] 
                                . '" alt="">' . '<br>'
                                . $database[$i]['title'] . '<br>'
                                . $database[$i]['author'] . '<br>'
                                . $database[$i]['year'] . '<br><br>';
                        ?>
                    </div>

                <?php
            }
        ?>
    </div>

</body>
</html>

<!-- Basandosi sui dati in allegato, sviluppare front-end e back-end nelle due varianti come visto questa mattina:
- stampa integrale in PHP attraverso l'include
- stampa attraverso axios su API in PHP
Bonus: nella versione a API, aggiungere la possibilita' di filtrare per artista, facendo attenzione a filtrare i dati nella location piu' corretta
Nota1: utilizzare le sole tecnologie viste questa mattina
Nota2: per chi avesse fatto esercizio simile in precedenza, e' possibile riciclare il CSS -->