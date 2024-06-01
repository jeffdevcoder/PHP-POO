<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        
        $lutas = array();

        $lutador[0] = new Lutador('Jeff', 'Brasileiro', 21, 1.95, 110, 10, 0, 0);

        $lutador[1] = new Lutador('Lucas', 'Brasileiro', 29, 1.80, 105, 14, 2, 0);

        $lutador[2] = new Lutador('Shadow', 'Baiano', 21, 1.95, 100, 0, 2, 0);

        $Luta = new Luta();
        $Luta->marcarLuta($lutador[0], $lutador[0]);
        $Luta->lutar();
    ?>
</body>
</html>