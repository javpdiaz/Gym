<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PrincipalController extends Controller
{
    /**
     * @Route("/", name="principal_page")
     */
    public function PrincipalPage(Request $request)
    {
        return $this->render('principal/principal.twig', array('activeconf'=>true));
    }

    /**
     * @Route("/galeria", name="galeria_page")
     */
    public function GaleriaPage(){
        return $this->render('principal/galeria.html.twig', array('activeconf'=>true));
    }

    /**
     * @Route("/entrenamiento", name="entremaniento_page")
     */
    public function EntrenamientoPage(){
        return $this->render('principal/entrenamiento.twig');
    }

    /**
     * @Route("/precios", name="precios_page")
     */
    public function PreciosPage(){
        return $this->render('principal/precios.html.twig');
    }

    /**
     * @Route("/blog", name="blog_name")
     */
    public function BlogPage(){
        return $this->render('principal/blog.html.twig');
    }

    /**
     * @Route("/contacto", name="contacto_page")
     */
    public function ContactoPage(){
        return $this->render('principal/contact.html.twig');
    }
}
