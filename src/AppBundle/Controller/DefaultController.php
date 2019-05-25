<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    /*
     * Invoca una pagina (default/index) e le manda come parametro una stringa
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

  /**
   * @Route("/about/{name}", name="aboutpage", defaults={"name":null})
   */
    public function aboutAction($name)
    {
      $user =  null;
      if ($name)
      {
        $user = $this->getDoctrine()
          ->getRepository('AppBundle:User') //TODO Possibile errore? Pagina "Dynamic templates and Controllers"
          ->findOneBy(array('name' => $name));
        if (false === $user instanceof User)
        {
          throw $this->createNotFoundException
          (
            'No user named' .$name.' found'
          );
        }
      }
      return $this->render('about/user.html.twig', array('user' => $user));
    }
}
