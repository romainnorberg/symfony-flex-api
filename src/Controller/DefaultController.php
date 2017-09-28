<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route(
     *     name="default index",
     *     path="/"
     * )
     * @Method("GET")
     * @param Request $request
     *
     * @return mixed
     */
    public function homeAction(Request $request)
    {
        return $this->render('index.html.twig');
    }
}