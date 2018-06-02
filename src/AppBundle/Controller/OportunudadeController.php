<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario24
 * Date: 12/05/2018
 * Time: 15:16
 */

namespace AppBundle\Controller;

use Domain\Model\Oportunidade;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\DependencyInjection\Compiler\ResolveChildDefinitionsPass;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class OportunudadeController extends Controller
{
    /**
     * @Route("/oportunidade/salvar")
     * @Method("POST")
     * @param  Request $request
     */
    public function salvarAction(Request $request)
    {
        $serializerService = $this->get('infra.serializer.service');
        $oportunidadeService = $this->get('app.oportunidade.service');

        try {
            $oportunidade = $serializerService->converter($request->getContent(),Oportunidade::class);
            $oportunidadeService->salvar($oportunidade);
        } catch (\Exception $exception) {
            return new Response ($exception->getMessage(),400);
        }

        return new Response("Operaçao concluida com sucesso!");
    }

    /**
     * Route ("/oportunidade/listar"
     */
    public function  getOportunidadesAction()
    {
        $oportunidadeService = $this->get ("app.oportunidade.service");
        $serializerService = $this->get('infra.serializer.service');

        try {
            $oportunidades = $oportunidadeService->listarTudo();
            $oportunidadeService->listarTudo();
        } catch(\Exception $exception){
            return new Response($exception->getMessage(),400);

        }

        return new Response($serializerService->toJsonByGroups($oportunidades));
    }

}