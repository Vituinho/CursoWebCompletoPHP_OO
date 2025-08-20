<?php

    //modelo
    class Funcionario {
        
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;



        //getters setters (overloading / sobrecarga)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        /*
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
     */

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
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    $y->__set('telefone', '44 92000-9524');
    //echo $y->resumirCardFunc();
    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos(s) e o numero de telefone ' . $y->__get('telefone');

    echo '<br>';
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 0);
    $x->__set('telefone', '44 92000-8390');

    echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filhos(s) e o numero de telefone ' . $x->__get('telefone');

?>