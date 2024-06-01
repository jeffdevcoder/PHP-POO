<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    function apresentar() 
    {
        echo "----------------------------------";
        echo "<br>Chegou o lutador " . $this->getNome();
        echo "!!! ". $this->getNacionalidade();
        echo ", ". $this->getIdade() . " anos e pesa " . $this->getPeso() . " KG.";
        echo "<br>Conta com " . $this->getVitorias() . " vitorias, " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.<br>"; 
        
    }
    function status() 
    {
        echo "Nome do lutador: " . $this->getNome();
        echo "<br>";
        echo "Vitorias: " . $this->getVitorias();
        echo "<br>";
        echo "Derrotas: " . $this->getDerrotas();
        echo "<br>";
        echo "Empates: " . $this->getEmpates();
        echo "<br>";
        echo "Categoria: " . $this->getCategoria();
    }
    function ganharLuta() 
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta() 
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta() 
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function __construct($no, $na, $id, $alt, $pe, $vit, $der, $emp) 
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $alt;
        $this->setPeso($pe);
        $this->vitorias = $vit;
        $this->derrotas = $der;
        $this->empates = $emp;
    }

    public function getNome() 
    {
        return $this->nome;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function getPeso() 
    {
        return $this->peso;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function getVitorias() 
    {
        return $this->vitorias;
    }
    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function getEmpates()
    {
        return $this->empates;
    }


    public function setNome($no) 
    {
        $this->nome = $no;
    }
    public function setNacionalidade($na)
    {
        $this->nacionalidade = $na;
    }
    public function setIdade($id)
    {
        $this->idade = $id;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function setPeso($pe) 
    {
        $this->peso = $pe;
        $this->setCategoria();
    }
    public function setCategoria() 
    {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } else if ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } else if ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } else if ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }

    }
    public function setVitorias($vit)
    {
        $this->vitorias = $vit;
    }
    public function setDerrotas($der)
    {
        $this->derrotas = $der;
    }
    public function setEmpates($emp)
    {
        $this->empates = $emp;
    }
}