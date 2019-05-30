<?php

include("../Class/Connection.php");

class ClassCrud extends Connection
{
    /**
     * Atributos
     */

    private $Crud;
    private $Contador;

    /**
     * Preparação das declarativas
     */

    public function preparedStatementsPDO($Query)
    {
        // $this->countParams($Params);
        var_dump($Query);
        $this->Crud = $this->connectDB()->prepare($Query);

        // for ($i = 1; $i <= $this->Contador; $i++) {
            // $this->Crud->bindValue($i, $Params[$i - 1]);
        // }

        $this->Crud->execute();
    }

    /**
     * Contador de parametros
     */

    private function countParams($params)
    {
        $this->Contador = count($params);
    }

    /**
     * Operações SQL
     */

    public function insertDB($Table, $Condicao)
    {
        $this->preparedStatementsPDO("insert into {$Table} values ({$Condicao})");
        return $this->Crud;
    }
}
