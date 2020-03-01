<?php


class Usuario
{
    private $nome;
    private $sobrenome;
    private $idade;
    private $dataCadastro;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * @param mixed $dataCadastro
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }

    public function loadById($id)
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE id = :ID", array(
            ":ID"=>$id
        ));

        if (count($results) > 0) {

            $row = $results[0];

            $this->setNome($row['nome']);
            $this->setSobrenome($row['sobrenome']);
            $this->setIdade($row['idade']);
            $this->setDataCadastro(new DateTime($row['dataCadastro']));

        }

    }

    public function __toString()
    {
        return json_encode(array(
           "nome"=>$this->getNome(),
           "sobrenome"=>$this->getSobrenome(),
           "idade"=>$this->getIdade(),
           "dataCadastro"=>$this->getDataCadastro()->format('d/m/Y H:i:s')
        ));
    }

}