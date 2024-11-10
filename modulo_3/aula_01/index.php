<?php
  class Exemplo {
    public $nome = 'Ryan';
    private $idade = '21';

    public function metodo(){
        
        echo "Olá mundo! $this->idade ";
    }

}
    $exemplo1 = new Exemplo();
    $nome = $exemplo1->nome;
    echo $nome  ;
    echo  $exemplo1->metodo();

?>
