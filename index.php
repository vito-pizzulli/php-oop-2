<?php
    include_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <!-- FontAwesome 6.4.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <main>
        <?php
            foreach($dogProducts as $dogProduct) {
        ?>
            <ul>
                <li>Titolo: <?php echo $dogProduct->title ?></li>
                <li>Prezzo: <?php printf('%.2f', $dogProduct->price) ?> €</li>
                <li>Descrizione: <?php echo $dogProduct->description ?></li>
                <li>Barcode: <?php echo $dogProduct->barcode ?></li>
                <li>Marca: <?php echo $dogProduct->brand ?></li>
                <li>Marca: <?php echo $dogProduct->rating ?></li>
                <li><img src="<?php echo $dogProduct->imageUrl ?>" alt="Product Image"></li>
                <li><i class="fa-solid fa-dog"></i></li>
                <?php
                    echo $dogProduct::$category;

                    if ($dogProduct::$category == 'Cibo') {
                        ?>
                            <li><i class="fa-solid fa-drumstick-bite"></i></li>
                            <li>Tipo: <?php echo $dogProduct->type ?></li>
                            <li>Gusto: <?php echo $dogProduct->taste ?></li>
                            <li>Ingredienti: <?php echo $dogProduct->ingredients ?></li>
                            <li>Valori nutrizionali: <?php echo $dogProduct->nutritionalValues ?></li>
                        <?php
                    } elseif ($dogProduct::$category == 'Gioco') {
                        ?>
                            <li><i class="fa-solid fa-baseball"></i></li>
                            <li>Materiale: <?php echo $dogProduct->material ?></li>
                        <?php
                    } elseif ($dogProduct::$category == 'Cuccia') {
                        ?>
                            <li><i class="fa-solid fa-moon"></i></li>
                            <li>Materiale: <?php echo $dogProduct->material ?></li>
                            <li>Dimensioni: <?php echo $dogProduct->size ?></li>
                        <?php
                    } else {
                        ?><li><i class="fa-solid fa-tag"></i></li><?php
                    }
                ?>
            </ul>
        <?php
            }

            foreach($catProducts as $catProduct) {
                ?>
                    <ul>
                        <li>Titolo: <?php echo $catProduct->title ?></li>
                        <li>Prezzo: <?php printf('%.2f', $catProduct->price) ?> €</li>
                        <li>Descrizione: <?php echo $catProduct->description ?></li>
                        <li>Barcode: <?php echo $catProduct->barcode ?></li>
                        <li>Marca: <?php echo $catProduct->brand ?></li>
                        <li>Marca: <?php echo $catProduct->rating ?></li>
                        <li><img src="<?php echo $catProduct->imageUrl ?>" alt="Product Image"></li>
                        <li><i class="fa-solid fa-cat"></i></li>
                        <?php
                            echo $catProduct::$category;
        
                            if ($catProduct::$category == 'Cibo') {
                                ?>
                                    <li><i class="fa-solid fa-drumstick-bite"></i></li>
                                    <li>Tipo: <?php echo $catProduct->type ?></li>
                                    <li>Gusto: <?php echo $catProduct->taste ?></li>
                                    <li>Ingredienti: <?php echo $catProduct->ingredients ?></li>
                                    <li>Valori nutrizionali: <?php echo $catProduct->nutritionalValues ?></li>
                                <?php
                            } elseif ($catProduct::$category == 'Gioco') {
                                ?>
                                    <li><i class="fa-solid fa-baseball"></i></li>
                                    <li>Materiale: <?php echo $catProduct->material ?></li>
                                <?php
                            } elseif ($catProduct::$category == 'Cuccia') {
                                ?>
                                    <li><i class="fa-solid fa-moon"></i></li>
                                    <li>Materiale: <?php echo $catProduct->material ?></li>
                                    <li>Dimensioni: <?php echo $catProduct->size ?></li>
                                <?php
                            } else {
                                ?><li><i class="fa-solid fa-tag"></i></li><?php
                            }
                        ?>
                    </ul>
                <?php
                    }
                ?>
        ?>
    </main>
</body>
</html>