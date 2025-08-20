<a href="getters_setters.php">Proxima aula</a>

<?php
    
    //modelo
    class Funcionario {
        
        //atributos
        public $nome = 'José';
        public $telefone = '44 92000-9524';
        public $numFilhos = 2;

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
    echo $y->resumirCardFunc();
    echo '<br>';
    $y->modificarNumFilhos(3);
    echo $y->resumirCardFunc();
    echo '<hr>';

    $x = new Funcionario();
    echo $x->resumirCardFunc();
    echo '<br>';
    $x->modificarNumFilhos(1);
    echo $x->resumirCardFunc();    
?>