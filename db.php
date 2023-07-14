<?php
    include_once __DIR__ . '/Models/Product.php';
    include_once __DIR__ . '/Models/Food.php';
    include_once __DIR__ . '/Models/Toy.php';
    include_once __DIR__ . '/Models/Bed.php';

    $dogProducts = [
        $product1 = new Product(
            'Collare antipulci per cani',
            19.90,
            'Un collare antipulci per cani è un dispositivo progettato per proteggere il tuo amico a quattro zampe da pulci, zecche e altri parassiti.',
            '8008459678917',
            'Seresto',
            4.27,
            'https://m.media-amazon.com/images/I/41iKAeH6eRL.jpg'
        ),
        $product2 = new Food(
            'Croccantini per cani, gusto pollo e tacchino, 1.5kg',
            14.90,
            'Croccantini per cani di alta qualità, realizzati con ingredienti naturali e ricchi di proteine per mantenere il tuo amico a quattro zampe in salute e felice.',
            '8002596475169',
            'Ultima',
            3.97,
            'https://m.media-amazon.com/images/I/71OSRPJ5QKS._AC_UF894,1000_QL80_.jpg',
            'Secco',
            'Manzo',
            'Carne di manzo disidratata, farina di riso, patate dolci, olio di girasole, polpa di barbabietola, carote, spinaci, semi di lino, lievito di birra, estratto di rosmarino.',
            'Proteine 25%, Grassi 15%, Fibre 3%, Ceneri 7%, Umidità 10%, Calcio 1.2%, Fosforo 1%.'
        ),
        $product3 = new Toy(
            'Osso di gomma masticabile per cani, con suono',
            4.90,
            'Osso di gomma resistente con suono incorporato, perfetto per stimolare il gioco e la masticazione del tuo cane. Realizzato con materiali sicuri e non tossici per ore di divertimento.',
            '8004782679457',
            'Bibetter',
            4.24,
            'https://m.media-amazon.com/images/I/515GVOGS3OL._AC_UF894,1000_QL80_.jpg',
            'Gomma'
        ),
        $product4 = new Bed(
            'Cuccia per cani in legno',
            49.90,
            'Cuccia per cani in legno massello, resistente e confortevole, con tetto impermeabile e pavimento rialzato per mantenere il tuo amico a quattro zampe al caldo e all’asciutto.',
            '8004618793458',
            'Gardiun',
            4.90,
            'https://m.media-amazon.com/images/I/71KCXSSKzqL._AC_UF894,1000_QL80_.jpg',
            'Legno',
            '82 x 86 x 99 cm'
        )
    ]
?>