<?php
    include_once __DIR__ . '/Models/Product.php';
    include_once __DIR__ . '/Models/Food.php';
    include_once __DIR__ . '/Models/Toy.php';
    include_once __DIR__ . '/Models/Bed.php';

    $products = [
        $product1 = new Product(
            'Collare antipulci per cani',
            19.90,
            'Un collare antipulci per cani è un dispositivo progettato per proteggere il tuo amico a quattro zampe da pulci, zecche e altri parassiti.',
            '8008459678917',
            'Seresto',
            4.2,
            'https://m.media-amazon.com/images/I/41iKAeH6eRL.jpg',
            'Cane'
        ),
        $product2 = new Food(
            'Croccantini per cani, gusto manzo, 3kg',
            24.90,
            'Croccantini per cani di alta qualità, realizzati con ingredienti naturali e ricchi di proteine per mantenere il tuo amico a quattro zampe in salute e felice.',
            '8002596475169',
            'Ultima',
            3.9,
            'https://m.media-amazon.com/images/I/71OSRPJ5QKS._AC_UF894,1000_QL80_.jpg',
            'Cane',
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
            4.2,
            'https://m.media-amazon.com/images/I/515GVOGS3OL._AC_UF894,1000_QL80_.jpg',
            'Cane',
            'Verde',
            'Gomma'
        ),
        $product4 = new Bed(
            'Cuccia per cani in legno',
            49.90,
            'Cuccia per cani in legno massello, resistente e confortevole, con tetto impermeabile e pavimento rialzato per mantenere il tuo amico a quattro zampe al caldo e all’asciutto.',
            '8004618793458',
            'Gardiun',
            4.9,
            'https://m.media-amazon.com/images/I/71KCXSSKzqL._AC_UF894,1000_QL80_.jpg',
            'Cane',
            'Legno, tetto Verde',
            'Legno',
            '82 x 86 x 99 cm'
        ),
        $product5 = new Product(
            'Distributore di acqua per gatti',
            29.90,
            'Distributore di acqua automatico per gatti, con serbatoio di grande capacità e sistema di filtraggio per fornire acqua fresca e pulita al tuo amico felino.',
            '8003179668842',
            'Amazon Basics',
            4.4,
            'https://m.media-amazon.com/images/I/71Fjjv59rAL._AC_SL1500_.jpg',
            'Gatto'
        ),
        $product6 = new Food(
            'Croccantini per gatti, gusto pollo, 1.5kg',
            10.90,
            'Deliziosi bocconcini croccanti, ricchi di nutrienti e sapore, per il benessere del tuo amico felino.',
            '8005547129856',
            'Schesir',
            4.7,
            'https://m.media-amazon.com/images/I/71wI+c1lClL._AC_UF894,1000_QL80_.jpg',
            'Gatto',
            'Secco',
            'Pollo',
            'Pollo disidratato, Riso, Mais, Farina di glutine di mais, Grassi animali, Polpa di barbabietola, Lievito di birra, Olio di pesce, Minerali, Vitamine.',
            'Proteine grezze: 44,5%, Grassi grezzi 13,5%, Fibre grezze 5%, ceneri grezze 8%, umidità 5%, NFE 24%, Energia metabolizzabile 382 kcal/100g, Acidi grassi omega-6 0,9%, Acidi grassi omega-3 3,4%, calcio 1,9%, fosforo 1,5%.'
        ),
        $product7 = new Toy(
            'Bastone con piume per gatti, con diversi tipi di piume',
            2.90,
            'Un gioco divertente e stimolante per il tuo gatto, con piume colorate appese ad un bastone per farlo saltare e giocare.',
            '8003655987721',
            'Autoau',
            3.7,
            'https://m.media-amazon.com/images/I/61AxF15DcFL._AC_SL1500_.jpg',
            'Gatto',
            'Nero, piume Multicolore',
            'Poliestere'
        ),
        $product8 = new Bed(
            'Cuccia morbida rotonda per gatti',
            19.90,
            'Un posto accogliente e confortevole per il tuo amico felino, con imbottitura soffice e tessuti caldi per il massimo del relax e del riposo.',
            '8003365482215',
            'Vanansa',
            4.3,
            'https://m.media-amazon.com/images/I/71uPUUXI7DL._AC_SL1001_.jpg',
            'Gatto',
            'Grigio',
            'Pelliccia sintetica',
            '40 x 16 x 40 cm'
        )
    ];
?>