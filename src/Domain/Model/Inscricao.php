<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario24
 * Date: 02/06/2018
 * Time: 14:17
 */

namespace Domain\Model;


class Inscricao
{
    /**
     * @var int
     */

     private $id_Inscricao;

     /**
      * @var Candidato
      */
     private $candidato;

     /**
      * @var Oportunidade
      */

     private $oportunidade;

     /**
      * @var string
      */

     private $codigoConfirmacao;

     /**
      * @var boolean
      */

     private $ativa;


}