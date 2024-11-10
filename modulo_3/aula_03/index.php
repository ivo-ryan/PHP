<?php
    abstract class Teste{
      abstract function funcao1();
    }

    class Principal extends Teste{
        public function funcao1(){
            echo "Olá mundo !";
        }
    }


    $principal = new Principal();

    $principal->funcao1();
?>