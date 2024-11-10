<?php

class Class1{

    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

class Class2{

    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

    $class1 = new Class1('Pamella','<br/> 20 anos <hr/>');
    $class2 = new Class2('Camille','<br/> 21 anos <hr/>');

    echo $class1->nome;
    echo $class1->idade;
    echo $class2->nome;
    echo $class2->idade;


?>