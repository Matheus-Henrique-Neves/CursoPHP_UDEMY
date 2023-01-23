<?php
class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a,$b,$c)
    {
        $this->logradouro=$a;
        $this->cidade=$b;
        $this->numero=$c;
    }

    public function __destruct()
    {
var_dump("destruir");

    }

}
$meuendereco=new Endereco("minha","pica","111");
var_dump($meuendereco);