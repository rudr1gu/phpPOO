<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body, html{
            width: 100vw;
            height: 100vh;
        }

        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        div.tela{
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            justify-content: center;
            width: 50vw;
            height: 50vh;
            text-align: center;
            border: 1px solid black;
            border-radius: 20px;
            box-shadow: 3px 3px 14px ;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="tela">
        <?php
            require_once("Conta.php");
            $pessoa = new Conta("José", 25, "2134", 0, "CC");
            $pessoa2 = new Conta("Maria", 19, "2134", 0, "CP");
        
            $pessoa->status();
            echo($pessoa->getTipo());
            echo($pessoa->tipo);
            $pessoa->deposito(200.00);
            $pessoa->status();
            $pessoa->saque(100);
            $pessoa2->status();
        ?>
    </div>
    
</body>
</html>