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
                        <img src="<?php echo $product->imageUrl ?>" class="my_img" alt="Product Image">
                    </div>
                    <div class="my_card-body">
                        <h2 class="card-title"><?php echo $product->title ?></h2>
                        <p class="card-text"><?php echo $product->description ?></p>
                        <span class="card-text d-block"><strong>Barcode:</strong> <?php echo $product->barcode ?></span>
                        <span class="card-text d-block"><strong>Marca:</strong> <?php echo $product->brand ?></span>
                        <span class="card-text d-block"><strong>Valutazione:</strong> <?php echo $product->rating ?></span>

                        <?php
                            if (get_class($product) === 'Food') {
                        ?>      
                                <span class="card-text d-block"><strong>Tipo:</strong> <?php echo $product->type ?></span>
                                <span class="card-text d-block"><strong>Gusto:</strong> <?php echo $product->taste ?></span>
                                <p class="card-text"><strong>Ingredienti:</strong> <?php echo $product->ingredients ?></p>
                                <p class="card-text"><strong>Valori nutrizionali:</strong> <?php echo $product->nutritionalValues ?></p>
                                <span class="me-4"><i class="fa-solid fa-drumstick-bite my_icon"></i>Cibo</span>
                            <?php
                            } elseif (get_class($product) === 'Toy') {
                            ?>
                                <span class="card-text d-block"><strong>Colore:</strong> <?php echo $product->color ?></span>
                                <span class="card-text d-block"><strong>Materiale:</strong> <?php echo $product->material ?></span>
                                <span class="me-4"><i class="fa-solid fa-baseball my_icon"></i>Gioco</span>
                            <?php
                            } elseif (get_class($product) === 'Bed') {
                            ?>
                                <span class="card-text d-block"><strong>Colore:</strong> <?php echo $product->color ?></span>
                                <span class="card-text d-block"><strong>Materiale:</strong> <?php echo $product->material ?></span>
                                <span class="card-text d-block"><strong>Dimensioni:</strong> <?php echo $product->size ?></span>
                                <span class="me-4"><i class="fa-solid fa-moon my_icon"></i>Cuccia</span>
                            <?php
                            } else {
                                ?><span class="me-4"><i class="fa-solid fa-tag my_icon"></i>Prodotto</span><?php
                            }

                            if ($product->animalType == 'Cane') {
                                ?><span><i class="fa-solid fa-dog my_icon"></i> Cane</span><?php
                            } elseif ($product->animalType == 'Gatto') {
                                ?><span><i class="fa-solid fa-cat my_icon"></i> Gatto</span><?php
                            }

                            ?>
                        <div class="my_price-and-buy">
                            <h3 class="card-text text-success align-middle"><?php printf('%.2f', $product->price) ?> €</h3>
                            <a href="#" class="btn btn-success my_button">Acquista</a>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
        </div>
    </main>
</body>
</html>