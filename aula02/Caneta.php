<?php 
    class Caneta{
       var $modelo;
       var $cor;
       var $ponta;
       var $carga;
       var $tampada;

       function rabiscar(){
            if($this->tampada){
                echo("<p>ERRO! não posso rabiscar</p>");
            }else{
                echo("<p>estou rabiscando</p>");
            }
       }

       function tampar(){
        $this->tampada = true;    
       }

       function destampar(){
        $this->tampada = false;
       }

    }