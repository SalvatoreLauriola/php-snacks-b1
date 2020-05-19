<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 


// PHP Snack 1:
// Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.Stampiamo a schermo tutte le partite con questo schema:Olimpia Milano - Cantù | 55-60


$matches = [
    [
        'Casa' => 'Milano',
        'Ospiti' => 'Roma',
        'PunteggioCasa' => rand(0, 150),
        'PunteggioOspiti' => rand(0, 150)
    ],
    [
        'Casa' => 'Torino ',
        'Ospiti' => 'Vercelli',
        'PunteggioCasa' => rand(0, 150),
        'PunteggioOspiti' => rand(0, 150)
    ],
    [
        'Casa' => 'Bari',
        'Ospiti' => 'Firenze',
        'PunteggioCasa' => rand(0, 150),
        'PunteggioOspiti' => rand(0, 150)
    ],
    [
        'Casa' => 'Taranto',
        'Ospiti' => 'Matera',
        'PunteggioCasa' => rand(0, 150),
        'PunteggioOspiti' => rand(0, 150)
    ]
    ];
?>

<h1>I risultati della partita sono:</h1>
<!-- loop squadre -->

<ul>
    <?php for ($i = 0; $i < count($matches); $i++ ){?>
        <li>
            <?php echo $matches[$i]['Casa'] . ' ' .  $matches[$i]['Ospiti'] ?> - 
            <?php echo $matches[$i]['PunteggioCasa']; ?> - <?php echo $matches[$i]['PunteggioOspiti']; ?>

        </li>
    <?php } ?>
</ul>

<hr>

<h1> Snack 2 </h1>



<!-- 
PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che nonconosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php



$data = $_GET;

echo ($data['name']);

//controllo presenza valori

if ( empty($data['name']) || empty($data['mail']) || empty($data['age']) ) {
    echo 'Non hai passato tutti i parametri';
}

//controlla nome

elseif (strlen($data['name']) <= 3 ){
    echo 'Accesso negato';
} 

// controllo mail

elseif( strpos($data['mail'], '@') === false || ( strpos($data['mail'], '.') === false ) ) {
    echo 'Accesso negato';
}

//controllo età
elseif ( ! is_numeric($data['age']) ) {
    echo 'Accesso negativa';
}
else {
    echo 'Accesso riuscito';
}

?>


</body>
</html>






