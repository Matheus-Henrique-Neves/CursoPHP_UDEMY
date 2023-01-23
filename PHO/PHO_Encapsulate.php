<?php
class Pessoa {

public $nome="batata brotando";
protected $idade=48;
private $senha=1234567;

public function verDados(){
    echo $this->senha." ";
    echo $this->idade." ";
    echo $this->nome." ";

}


}

class Nana extends Pessoa{
    public $salario =2000.50;
    public function verDados(){
        echo $this->senha." ";
        echo $this->idade." ";
        echo $this->nome." ";

    }
}
$eu=new Pessoa();
echo $eu->verDados();
//echo $eu->nome;
//echo $eu->idade;
//echo $eu->senha;
$ee=new Nana();
echo $ee->verDados();
//echo $ee->nome;
//echo $ee->idade;
//echo $ee->senha;


