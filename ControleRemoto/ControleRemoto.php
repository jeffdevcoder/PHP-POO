<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() 
    {
        return $this->volume;
    }
    private function getLigado() 
    {
        return $this->ligado;
    }
    private function getTocando()
    {
        return $this->tocando;
    }
    private function setVolume($volume)
    {
        $this->volume = $volume;
    }
    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }
    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    } 
    function abrirMenu()
    {
        echo "<-------MENU------->";
        echo "<br>Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br>Está tocando?: " . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i+=10)
        {
            echo "I";
        }
        echo "<br>";
    }
    function fecharMenu()
    {
        echo "<br>Fechando menu...";
    }
    function aumentarVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p>ERRO! Não posso aumentar o volume.</p>";
        }
    }
    function diminuirVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        } else {
            echo "<p>ERRO! Não posso diminuir o volume.</p>";
        }
    }
    function mutar()
    {
        if ($this->getLigado() && $this->getVolume() > 0) $this->setVolume(0); 
    }
    function desmutar()
    {
        if ($this->getLigado() && $this->getVolume() == 0) $this->setVolume(50);
    }
    function play()
    {
        if ($this->getLigado() && !($this->getTocando()) ) $this->setTocando(true);
    }
    function pause()
    {
        if ($this->getLigado() && $this->getTocando()) $this->setTocando(false);
    }
}