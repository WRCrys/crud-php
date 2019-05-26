<?php

class ClassCrud extends Connection
{
    /**
     * Atributos
     */

     private $Crud;
     private $Contador;
     private $Resultado;

     /**
      * Preparação das declarativas
      */

      public function preparedStatements($Query, $Params, $Tipos) {
          $this->countParams($Params);
          $Con = $this->connectDB();
          $this->Crud = $Con->prepare($Query);

          if ($this->Contador > 0) {
              $CallParams = array();
              foreach ($Params as $key => $Params) {
                  $CallParams[$key] = &$Params[$key];
              }
              array_unshift($CallParams, $Tipos);
              call_user_func_array(array($this->Crud, 'bind_param'), $CallParams);
        
          }

        $this->Crud->execute();
        $this->Resultado = $this->Crud->get_result();
      }

      /**
       * Contador de parametros
       */

       private function countParams($params) {
           $this->Contador = count($params);
       }
}
