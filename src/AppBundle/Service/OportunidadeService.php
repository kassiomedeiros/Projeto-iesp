<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario24
 * Date: 19/05/2018
 * Time: 14:16
 */

namespace AppBundle\Service;


use Domain\Model\Oportunidade;
use Domain\Repository\OportunidadeRepositoryInterface;
use Domain\Service\OportunidadeServiceInterface;

class OportunidadeService implements OportunidadeServiceInterface
{



    private $oportunidadeRepository;

    /**
     * OportunidadeService constructor.
     * @param OportunidadeRepositoryInterface $oportunidadeRepository
     */
    public function __construct(
        OportunidadeRepositoryInterface $oportunidadeRepository
    )
    {
        $this->oportunidadeRepository = $oportunidadeRepository;
    }

    /**
     * @param Oportunidade $oportunidade
     * @return void
     * @throws \Exception
     */
    public function salvar(Oportunidade $oportunidade)
    {
         if ($this->oportunidadeRepository->findBy(['descricao' => $oportunidade->getDescricao()])){
            throw new \Exception("Oportunidade com esta descrição já existe.");
    }

        $this->oportunidadeRepository->salvar($oportunidade);
    }

    /**
     * @return array
     */
    public function listarTudo()
    {
        return $this->oportunidadeRepository->findAll();
    }
}