<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula06</title>
</head>
<body>
    
        <?php
        require_once './ControleRemoto.php';
            $c = new ControleRemoto();
            $c->desligar();
            $c->abrirMenu();
            $c->fecharMenu();
            $c->maisVolume();        
            $c->maisVolume();        
            $c->maisVolume();        
            $c->maisVolume();
            $c->abrirMenu();        
        ?>
    
</body>
</html>