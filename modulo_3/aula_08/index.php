<?php
    class Exemplo {
        const VALOR = '19 anos';

        public function __construct(){
            echo self::VALOR;
        }
    }

  $class1 = new Exemplo();
  
?>