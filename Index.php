<?php
require_once __DIR__ . '/Automobile.php';
require_once __DIR__ . '/Moto.php';
require_once __DIR__ . '/AutoCarro.php';
require_once __DIR__ . '/User.php';

$fiat_panda = new Automobile('Fiat', 'Panda');

$honda_cbr = new Moto('Honda', 'CBR');

$iveco_carico = new AutoCarro('Iveco', 'Carico');
$iveco_carico->max_kg_pieno_carico = 5000;
$kawasaki_gp2 = new Moto('Kawasaki', 'GP2');

if($iveco_carico->puoCaricareKg(5000)) {
     echo 'Ok il mezzo ti è stato assegnato ';
     echo 'Il mezzo è: ' . $iveco_carico->marca . ' ' . $iveco_carico->modello; 
}

try {
    $iveco_carico = new AutoCarro('Iveco', 'Carico', false);
} catch(Exception $e) {
    echo 'Error: General error';
}

$user = new User('Mario', 'Rossi');
$user->addProduct($fiat_panda);
$user->addProduct($honda_cbr);
$user->addProduct($kawasaki_gp2);
$user->addProduct($iveco_carico);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie per aver acquistato</title>
</head>
<body>

    <h1>Riepilogo ordine</h1>

    <?php foreach($user->getProducts() as $product) { ?>
        <div>
            <ul>
                <li>Marca: <?php echo $product->marca ?></li>
                <li>Modello: <?php echo $product->modello ?></li>
            </ul>
        </div>
    <?php } ?>

     <?php $products_array = $user->getPrintableProducts(); ?>
    <?php foreach($products_array as $product) { ?>
        <div>
            <ul>
                <li>Marca <?php echo $product['marca'] ?></li>
                <li>Modello <?php echo $product['modello'] ?></li>
                <?php if(isset($product['max_kg_pieno_carico'])) { ?>
                    <li>Max kg: <?php echo $product['max_kg_pieno_carico']; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?> 

</body>
</html> 