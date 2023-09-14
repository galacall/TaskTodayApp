<?php

class Usuario{
    private $nome;
    function __construct($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

}
    /*
        private $nome; [...]
        public function getNome(){
            return $this->name;
        } 

        Isso acima é encapsulamento
    */
?>