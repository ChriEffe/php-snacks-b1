<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    <main id="app">
        <ul v-for="car in cars">
            <li>Marca: {{ car.marca }}</li>
            <li>Modello: {{ car.modello }}</li>
            <li>Colore: {{ car.colore }}</li>
            <li>Anno: {{ car.anno }}</li>
            <li>Chilometri: {{ car.chilometri }}</li>
            <li>Accessori: {{ car.accessori }}</li>
            <li>Allestimento: {{ car.allestimento }}</li>
            <li>Carburante: {{ car.carburante }}</li>
            <li>Porte: {{ car.porte }}</li>
            <li>Cambio: {{ car.cambio }}</li>
            <li>Posti: {{ car.posti }}</li>
            <li>Condizioni Veicolo: {{ car.condizioniVeicolo }}</li>
            <li>Interni: {{ car.interni }}</li>
            <li>Classe emissioni:  {{ car.classeEmissioni }}</li>
            <li>Prezzo: {{ car.prezzo }}</li>
            <li>Cavalli: {{ car.cavalli }}</li>
            <li>Kilowatt: {{ car.kilowatt }}</li>
            <li>Cilindrata: {{ car.cilindrata }}</li>
            <li><img :src="car.foto" :alt="car.modello"></li>
        </ul>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>