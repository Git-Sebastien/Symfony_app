<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


class PropertyController {


    /**
     * @return Response
     * 
     */
    public function index() :Response
    {
        return new Response('Les biens');
    }

}