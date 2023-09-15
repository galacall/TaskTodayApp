<?php
namespace App\model;
class Usuario{
    private $nome;
    private $idade;
    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function get_Nome(){
        return $this->nome;
    }
    public function get_Idade(){
        return $this->idade;
    }    
}
/*
    private $nome; [...]
    public function getNome(){
        return $this->name;
    } 
    Isso acima é encapsulamento
*/