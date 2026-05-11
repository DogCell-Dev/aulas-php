<?php
    class Carro
    {
        //Atributos ("variaveis internas da classe")
        //Sintaxe: ModificadorAcesso $nomeAtributo;

        public $modelo;
        public $fabricante;
        public $anoMod;
        public $anoFab;

        //Metodos ("Acoes")
        public function Acelerar()
        {
            echo("<p>O veiculo esta acelerando...<p>");
        }

        public function Turbina()
        {
            echo("<p>Modo turbinado ON...<p>");
        }

        public function RetornarDados()
        {
            $dados = "<b>Dados do Veiculo:</b>";
            $dados = $dados . "<br />" . "Fabricante: "        . $this->fabricante ;
            $dados = $dados . "<br />" . "Modelo: "            . $this->modelo     ;
            $dados = $dados . "<br />" . "Ano de Fabricacao: " . $this->anoFab     ;
            $dados = $dados . "<br />" . "Ano de Modelo: "     . $this->anoMod     ;

            return $dados;
        }

} // Chave que fecha a classe Carro

//Instanciar um objeto
//Sintaxe: $nomeObjeto = new MetodoConstrutor();
//         Metodo Construtor possui o MESMO NOME da classe

$obj1 = new Carro(); // Criar na mem. RAM

//Preenchendo os atributos do objeto
$obj1->fabricante = "VW";
$obj1->modelo     = "GOL";
$obj1->anoFab     = 1997;
$obj1->anoMod     = 1998;

//Leitura dos valores internos do objeto
// echo("<p>Fabricante: "        . $obj1->fabricante . "</p>");
// echo("<p>Modelo: "            . $obj1->modelo     . "</p>");
// echo("<p>Ano de Fabricacao: " . $obj1->anoFab     . "</p>");
// echo("<p>Ano de Modelo: "     . $obj1->anoMod     . "</p>");
echo( $obj1->RetornarDados() );

//Invocando um metodo
$obj1->Acelerar();

echo("<hr>");

$obj2 = new Carro();
$obj2->fabricante = "FIAT";
$obj2->modelo     = "Palio";
$obj2->anoFab     = 2005;
$obj2->anoMod     = 2006;
echo( $obj2->RetornarDados() );

$obj2-> Turbina();
?>