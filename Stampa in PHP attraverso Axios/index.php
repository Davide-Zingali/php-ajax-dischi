<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Album</title>
</head>
<body>
    <h1>
        ALBUMS
    </h1>
    <div id="container">
        <div class='box' v-for='album in albums'>
            <img :src="album.poster" alt="">
            <h3>{{album.title}}</h3>
            <p>{{album.author}}</p>
            <p>{{album.year}}</p>
        </div>
    </div>

    <!-- script js -->
    <script src="script.js"></script>

</body>
</html>

<!-- Basandosi sui dati in allegato, sviluppare front-end e back-end nelle due varianti come visto questa mattina:
- stampa integrale in PHP attraverso l'include
- stampa attraverso axios su API in PHP
Bonus: nella versione a API, aggiungere la possibilita' di filtrare per artista, facendo attenzione a filtrare i dati nella location piu' corretta
Nota1: utilizzare le sole tecnologie viste questa mattina
Nota2: per chi avesse fatto esercizio simile in precedenza, e' possibile riciclare il CSS -->