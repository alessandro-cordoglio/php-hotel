<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>
    <h1>Lista hotel:</h1>
    <table class="table mt-4">
        <thead>
            <tr class="fs-3">
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Votazione</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < count($hotels); $i++){ ?>
            <tr>
                <th scope="row"><?php echo $hotels[$i]['name']?></th>
                <td><?php echo $hotels[$i]['description']?></td>
                <td><?php echo $hotels[$i]['parking']?></td>
                <td><?php echo $hotels[$i]['vote']?></td>
                <td><?php echo $hotels[$i]['distance_to_center']?></td>
            </tr>
            <?php }?>  
        </tbody>    
        
    </table>
</body>
</html>

<!-- /stile pagina/ -->
<style>
    h1{
        max-width: max-content;
        background-color: azure;
        padding: 10px;
        margin: 20px;
        font-size: 50px;
    }
</style>