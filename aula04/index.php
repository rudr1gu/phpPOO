<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caneta  Getter e Setter</title>
</head>
<body>
    <?php
        require_once("Caneta.php");

        $cn1 = new Caneta("Bic",0.5,"azul");
        //$cn1->setModelo("Bic Cristal");
        //$cn1->setPonta(0.5);

        //print_r($cn1);

        print "Eu tenho uma {$cn1->getmodelo()} de ponta: {$cn1->getPonta()} ";
    ?>
    
</body>
</html>