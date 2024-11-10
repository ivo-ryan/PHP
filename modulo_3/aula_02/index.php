<?php
    final class Filha {

        public function showHello(){
            echo 'Olá mundo!';
        }
    }

    class Pai {
        public function showTchau() {
            echo 'Falou mundo até depois!';
        }
    }

    $pai = new Pai();
    $pai->showTchau();

    $filha = new Filha();

    $filha->showHello();
?>