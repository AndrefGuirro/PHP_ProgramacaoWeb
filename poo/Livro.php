<?php

class Livro {
    private $titulo;
    private $autor;
    private $ano;
    

    public function __construct($titulo, $autor, $ano){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->setAno($ano);

    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getAutor($autor){
        $this->autor = $autor;
    }

    public function setAno($ano){
        if ($ano <1900)
            $ano = 1900;
        $this->ano = $ano;
    }

public function getAno($ano){
    if ($ano <1900)
        $ano = 1900;
    $this->ano = $ano;
    }
}
$obj = new Livro("O livro", "Ana", 1850);
var_dump($obj);