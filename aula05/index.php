<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("Conta.php");
        
        $pessoa = new Conta("José", 25, "2134", 0);
        $pessoa->status();

    ?>
    
</body>
</html>