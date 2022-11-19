<?php


class ferramentaDTO {
    //put your code here
    private $cod_ferramenta; 
    private $nome_ferramenta; 
    private $marca_ferramenta;

    public function getCod_ferramenta()
    {
        return $this->cod_ferramenta;
    }

    public function getNome()
    {
        return $this->nome_ferramenta;
    }

    public function getMarca()
    {
        return $this->marca_ferramenta;
    }

    public function setCod_ferramenta($cod_ferramenta)
    {
        $this->cod_ferramenta = $cod_ferramenta;
    }

    public function setNome($nome_ferramenta)
    {
        $this->nome_ferramenta = $nome_ferramenta;
    }

    public function setMarca($marca_ferramenta)
    {
        $this->marca_ferramenta = $marca_ferramenta;
    }




}

    ?>