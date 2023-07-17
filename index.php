<?php
    include_once __DIR__ . '/db.php';
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
            foreach($dogProducts as $dogProduct) {
        ?>
                <div class="card m-3" style="width: calc(100% / 3 - 2rem);">
                <div class="my_img-container">
                    <img src="<?php echo $dogProduct->imageUrl ?>" class="card-img-top" alt="Product Image">
                </div>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $dogProduct->title ?></h2>
                        <p class="card-text"><?php echo $dogProduct->description ?></p>
                        <span class="card-text d-block">Barcode: <?php echo $dogProduct->barcode ?></span>
                        <span class="card-text d-block">Marca: <?php echo $dogProduct->brand ?></span>
                        <span class="card-text d-block">Valutazione: <?php echo $dogProduct->rating ?></span>
                        <span class="card-text d-block"><i class="fa-solid fa-dog my_icon"></i></span>
                        <?php echo $dogProduct::$category;

                        if ($dogProduct::$category == 'Cibo') {
                            ?>
                                <span class="card-text d-block"><i class="fa-solid fa-drumstick-bite my_icon"></i></span>
                                <span class="card-text d-block">Tipo: <?php echo $dogProduct->type ?></span>
                                <span class="card-text d-block">Gusto: <?php echo $dogProduct->taste ?></span>
                                <p class="card-text">Ingredienti: <?php echo $dogProduct->ingredients ?></p>
                                <p class="card-text">Valori nutrizionali: <?php echo $dogProduct->nutritionalValues ?></p>
                            <?php
                        } elseif ($dogProduct::$category == 'Gioco') {
                            ?>
                                <span class="card-text d-block"><i class="fa-solid fa-baseball my_icon"></i></span>
                                <span class="card-text d-block">Materiale: <?php echo $dogProduct->material ?></span>
                            <?php
                        } elseif ($dogProduct::$category == 'Cuccia') {
                            ?>
                                <span class="card-text d-block"><i class="fa-solid fa-moon my_icon"></i></span>
                                <span class="card-text d-block">Materiale: <?php echo $dogProduct->material ?></span>
                                <span class="card-text d-block">Dimensioni: <?php echo $dogProduct->size ?></span>
                            <?php
                        } else {
                            ?><span class="card-text d-block"><i class="fa-solid fa-tag my_icon"></i></span><?php
                        }
                            ?>
                            <h3 class="card-text text-success"><?php printf('%.2f', $dogProduct->price) ?> €</h3>
                            <a href="#" class="btn btn-success d-block">Acquista</a>
                    </div>
                </div>
        <?php
            }
            foreach($catProducts as $catProduct) {
        ?>
                <div class="card m-3" style="width: calc(100% / 3 - 2rem);">
                <div class="my_img-container">
                    <img src="<?php echo $catProduct->imageUrl ?>" class="card-img-top" alt="Product Image">
                </div>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $catProduct->title ?></h2>
                        <p class="card-text"><?php echo $catProduct->description ?></p>
                        <span class="card-text d-block">Barcode: <?php echo $catProduct->barcode ?></span>
                        <span class="card-text d-block">Marca: <?php echo $catProduct->brand ?></span>
                        <span class="card-text d-block">Valutazione: <?php echo $catProduct->rating ?></span>
                        <span class="card-text d-block"><i class="fa-solid fa-cat my_icon"></i></span>
                        <?php echo $catProduct::$category;

                        if ($catProduct::$category == 'Cibo') {
                            ?>
                                <span class="card-text d-block"><i class="fa-solid fa-drumstick-bite my_icon"></i></span>
                                <span class="card-text d-block">Tipo: <?php echo $catProduct->type ?></span>
                                <span class="card-text d-block">Gusto: <?php echo $catProduct->taste ?></span>
                                <p class="card-text">Ingredienti: <?php echo $catProduct->ingredients ?></p>
                                <p class="card-text">Valori nutrizionali: <?php echo $catProduct->nutritionalValues ?></p>
                            <?php
                        } elseif ($catProduct::$category == 'Gioco') {
                            ?>
                                <span class="card-text d-block"><i class="fa-solid fa-baseball my_icon"></i></span>
                                <span class="card-text d-block">Materiale: <?php echo $catProduct->material ?></span>
                            <?php
                        } elseif ($catProduct::$category == 'Cuccia') {
                            ?>
                                <span class="card-text d-block"><i class="fa-solid fa-moon my_icon"></i></span>
                                <span class="card-text d-block">Materiale: <?php echo $catProduct->material ?></span>
                                <span class="card-text d-block">Dimensioni: <?php echo $catProduct->size ?></span>
                            <?php
                        } else {
                            ?><span class="card-text d-block"><i class="fa-solid fa-tag my_icon"></i></span><?php
                        }
                            ?>
                            <h3 class="card-text text-success"><?php printf('%.2f', $catProduct->price) ?> €</h3>
                            <a href="#" class="btn btn-success d-block">Acquista</a>
                    </div>
                </div>
        <?php
            }
        ?>
        </div>
    </main>
</body>
</html>