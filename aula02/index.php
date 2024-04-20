<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php 
        //importar um arquivo
        require_once 'Caneta.php';

        //criar uma nova instância
        $c1 = new Caneta();

        //atribuindo a nova instância
        $c1->modelo = "Bic";
        $c1->cor = "Preta";
        $c1->ponta = 0.5;
        $c1->carga = 1;
        $c1->tampada = true;

        //imprimir na tela o estado da Instância
         print_r($c1);
        
        //executando um metodo
        $c1->rabiscar();

        //metodo para mudar o estado da caneta
        $c1->destampar();
        $c1->rabiscar();

    ?>
</body>
</html>