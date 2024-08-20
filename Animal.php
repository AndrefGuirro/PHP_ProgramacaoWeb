<?php
abstract class Animal{

    protected $nome;
    protected $raca;

    abstract public function fazerBarulho();

    public function setNome($nome){
        $this->nome = $nome;

    }

    public function getNome($nome){
        $this->nome = $nome;

    }

    public function setRaca(){
        $this->raca = raca;
    }

    public function getRaca(){
        $this->raca = raca;
    }

    

}

class Cachorro extends Animal {
    private $pelagem;

    //set e get...

    public function fazerBarulho(){
        return "Au au!";
    }
}