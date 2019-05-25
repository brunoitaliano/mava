<?php


namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
  public function detailsAction($name) {
    $user=$this->getDoctrine()
      ->getRepository('AppBundle:User')
      -> findOneByName($name);
    return $this->render(
      'about/user.html.twig',
      array('user' => $user)
    );
  }
}