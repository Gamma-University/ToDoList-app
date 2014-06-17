<?php

namespace Keynetic\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('KeyneticBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
