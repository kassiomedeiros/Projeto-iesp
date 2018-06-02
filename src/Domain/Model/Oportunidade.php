<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario24
 * Date: 12/05/2018
 * Time: 14:49
 */

namespace Domain\Model;

class Oportunidade
{
    /**
     * @var int
     */

private $idOportunidade;

    /**
     * @var string
     */

private $descricao;

    /**
     * @var \datetime
     */

private $periodoInicial;

    /**
     * @var \datetime
     */

private $periodoFinal;

    /**
     * @var int
     */
private $qtdVagas;


    /**
     * Oportunidade constructor.
     * @param string $descricao
     * @param \datetime $periodoInicial
     * @param \datetime $periodoFinal
     */
    public function __construct($descricao, \datetime $periodoInicial, \datetime $periodoFinal) {
        $this->descricao = $descricao;
        $this->periodoInicial = $periodoInicial;
        $this->periodoFinal = $periodoFinal;
     }
    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoInicial()
    {
        return $this->periodoInicial;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoFinal()
    {
        return $this->periodoFinal;
    }


}