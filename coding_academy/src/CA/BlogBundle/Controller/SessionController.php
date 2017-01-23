<?php

namespace CA\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CA\BlogBundle\Form\UserType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use CA\BlogBundle\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;


class SessionController extends Controller
{
     public function loginAction(Request $request)
     {


          $authenticationUtils = $this->get('security.authentication_utils');
          //get the login error if there is one
          $error = $authenticationUtils->getLastAuthenticationError();



          if ($this->isGranted('IS_AUTHENTICATED_REMEMBERED'))
          {
               return new RedirectResponse($this->generateUrl('ca_blog_homepage'));
          }

          return $this->render('CABlogBundle:Session:login.html.twig', array(
               'error'         => $error,
          ));
     }


}
