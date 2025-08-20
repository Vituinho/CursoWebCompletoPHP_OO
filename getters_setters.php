<?php

    //modelo
    class Funcionario {
        
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters setters
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

        function getTelefone() {
            return $this->telefone;
        }

        //métodos
        function resumirCardFunc() {
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }


    }

    $y = new Funcionario();
    $y->setNome('José');
    $y->setNumFilhos(2);
    $y->setTelefone('44 92000-9524');
    //echo $y->resumirCardFunc();
    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filhos(s)';

    echo '<br>';
    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(0);
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filhos(s)';

?>