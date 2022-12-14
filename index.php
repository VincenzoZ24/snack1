<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $partite = [
        'casa' => [
            'nome' => 'Napoli',
            'punteggio' => '100',
        ],
        'ospite' => [
            'nome' => 'Milano',
            'punteggio' => '50',
        ],
        'casa1' => [
            'nome' => 'Bari',
            'punteggio' => '30',
        ],
        'ospite1' => [
            'nome' => 'Parma',
            'punteggio' => '55',
        ]
    ];
?>

    <p> <?php echo $partite['casa']['nome'] ?> - <?php echo $partite['ospite']['nome'] ?> | <?php echo $partite['casa']['punteggio'] ?> - <?php echo $partite['ospite']['punteggio'] ?> </p>
    <p> <?php echo $partite['casa1']['nome'] ?> - <?php echo $partite['ospite1']['nome'] ?> | <?php echo $partite['casa1']['punteggio'] ?> - <?php echo $partite['ospite1']['punteggio'] ?> </p>
</body>

</html>