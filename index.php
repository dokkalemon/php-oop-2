<!-- 
provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, 
ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero 
essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse 
tipologie di prodotti.
Eseguire poi degli output istanziando oggetti delle varie classi.

 -->


 <?php

    require_once __DIR__ . '/classes/Product.php'

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>
</head>
<body>

    <header>
        <h1>Shop Online</h1>
    </header>


    <main>
        <?php 
            $mouse = new Product('Trust Yvi Mouse Wireless', 6.99, 'Informatica');
            var_dump($mouse);
        ?>

        <h4><?php echo $mouse->name ?></h4>
        <ul>
            <li>Prezzo: <b>€ <?php echo $mouse->price ?></b></li>
            <li>Categoria: <b><?php echo $mouse->category ?></b></li>
            <li>Arrivo previsto: <b><?php echo $mouse->calcDay() ?></b></li>
        </ul>



    </main>

    
</body>
</html>