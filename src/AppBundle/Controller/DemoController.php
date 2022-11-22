<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends Controller
{
    /**
     * @Route("demo/home", name="home")
     */
    public function home(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('demo/home.html.twig');
    }
}
