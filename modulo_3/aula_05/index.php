<?php
    echo '<h1>Olá mundo!</h1>';

    class Class1{
        private $nome;
        private $idade;
        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getNome(){
            return $this-> nome;
        }
    }

    $obj = new Class1('Pamella', '20 anos');

    echo $obj->getNome();
    echo $obj->getIdade();

    
?>