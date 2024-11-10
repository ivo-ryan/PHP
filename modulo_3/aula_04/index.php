<?php
    interface Teste1 {
        public function exemplo();
    }

    class Teste2 implements Teste1 {
        public function exemplo(){
            echo 'Não se distraia!';
        }
    }

    $classTeste = new Teste2();

    $classTeste->exemplo();
?>