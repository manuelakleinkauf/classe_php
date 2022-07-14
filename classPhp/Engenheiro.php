<?php
/**Classe Medico
 * @author Manuela Kleinkauf */
    class Engenheiro extends Pessoa{
      /**
       * @access private
       * @name crea
       */
        private $crea;
        /**Função para obter o crea de um engenheiro
         * @access public
         * @return String crea
         */
        public function getCrea() {
            return $this->crea;
          }
          /**Função que define o crea de um engenheiro
         * @access public
         * @param String $crea
         */
          public function setCrea($crea){
            $this->crea= $crea;
          }
    }
?>