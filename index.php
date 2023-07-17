<?php
    include_once __DIR__ . '/db.php';
    shuffle($products);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="./styles/style.css">

    <!-- FontAwesome 6.4.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap 5.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="row">
            <div class="col-12 text-center bg-warning p-3">
                <h1>PHP OOP 2</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="container d-flex flex-wrap">
        <?php
            foreach($products as $product) {
        ?>
                <div class="card m-3" style="width: calc(100% / 3 - 2rem);">
                <div class="my_img-container">
                    <img src="<?php echo $product->imageUrl ?>" class="card-img-top" alt="Product Image">
                </div>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $product->title ?></h2>
                        <p class="card-text"><?php echo $product->description ?></p>
                        <span class="card-text d-block">Barcode: <?php echo $product->barcode ?></span>
                        <span class="card-text d-block">Marca: <?php echo $product->brand ?></span>
                        <span class="card-text d-block">Valutazione: <?php echo $product->rating ?></span>
                        <?php echo $product::$category;

                        if ($product->animalType == 'Cane') {
                            ?><span class="card-text d-block"><i class="fa-solid fa-dog my_icon"></i></span><?php
                        } elseif ($product->animalType == 'Gatto') {
                            ?><span class="card-text d-block"><i class="fa-solid fa-cat my_icon"></i></span><?php
                        }

                        if ($product::$category == 'Cibo') {
                            ?>
                                <span class="card-text d-block"><i class="fa-solid fa-drumstick-bite my_icon"></i></span>
                                <span class="card-text d-block">Tipo: <?php echo $product->type ?></span>
                                <span class="card-text d-block">Gusto: <?php echo $product->taste ?></span>
                                <p class="card-text">Ingredienti: <?php echo $product->ingredients ?></p>
                                <p class="card-text">Valori nutrizionali: <?php echo $product->nutritionalValues ?></p>
                            <?php
                        } elseif ($product::$category == 'Gioco') {
                            ?>
                                <span class="card-text d-block"><i class="fa-solid fa-baseball my_icon"></i></span>
                                <span class="card-text d-block">Materiale: <?php echo $product->material ?></span>
                            <?php
                        } elseif ($product::$category == 'Cuccia') {
                            ?>
                                <span class="card-text d-block"><i class="fa-solid fa-moon my_icon"></i></span>
                                <span class="card-text d-block">Materiale: <?php echo $product->material ?></span>
                                <span class="card-text d-block">Dimensioni: <?php echo $product->size ?></span>
                            <?php
                        } else {
                            ?><span class="card-text d-block"><i class="fa-solid fa-tag my_icon"></i></span><?php
                        }
                            ?>
                            <h3 class="card-text text-success"><?php printf('%.2f', $product->price) ?> €</h3>
                            <a href="#" class="btn btn-success w-25">Acquista</a>
                    </div>
                </div>
        <?php
            }
        ?>
        </div>
    </main>
</body>
</html>