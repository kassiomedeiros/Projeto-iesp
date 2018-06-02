<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario24
 * Date: 02/06/2018
 * Time: 11:34
 */

namespace Domain\Model;


class Candidato
{
    /**
     * @var int
     */
    private $idCandidato;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $telefone;

    /**
     * @var string
     */
    private $curriculo;

    /**
     * @var collectiuon
     */
    private $habilidadesTecnicas;

    /**
     * @var collection
     */

    private $experienciasProfissionais;
}