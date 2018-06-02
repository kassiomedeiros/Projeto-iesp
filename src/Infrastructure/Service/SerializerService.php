<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario24
 * Date: 12/05/2018
 * Time: 16:04
 */

namespace Infrastructure\Service;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;

class SerializerService
{
 /**
  * @var SerializerService
  */

 private $serializer;

    /**
     * SerializerService constructor.
     * @param SerializerService $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function converter($json, $tipo){

        try {
            return $this->serializer->deserialize($json, $tipo, 'json');
        } catch (\Exception $exception){
            dump($exception->getMessage()); die;
        }

     }

    /**
     * @return SerializerService
     */
    public function toJsonByGroups($data, array $groups = ['default']){
        return $this->serializer->serialize(
             $data,
            'json',
             SerializationContext::create()->setGroups($groups)
        );
    }
}