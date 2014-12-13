<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Acme\DemoBundle\Random\Random;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
        return $this->render(
            'AcmeDemoBundle:Random:index.html.twig',
            array('number' => $this->get('acme.demo.random.random')->getNumber($limit))
        );
    }
}