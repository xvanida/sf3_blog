<?php

namespace CA\BlogBundle\Controller;

use CA\BlogBundle\Entity\User;
use CA\BlogBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CA\BlogBundle\Form\UserType;

/**
* User controller.
*
*/
class UserController extends Controller
{
     /**
     * Lists all user entities.
     *
     */
     public function indexAction()
     {
          $em = $this->getDoctrine()->getManager();

          $users = $em->getRepository('CABlogBundle:User')->findAll();

          return $this->render('user/index.html.twig', array(
               'users' => $users,
          ));
     }

     /**
     * Creates a new user entity.
     *
     */
     public function newAction(Request $request)
     {
          $user = new User();
          $form = $this->createForm(UserType::class, $user);
          $form->handleRequest($request);

          if ($form->isSubmitted() && $form->isValid()) {
               $user->setSalt(md5(uniqid()));//envoie le salt en dur

               $factory = $this->get('security.encoder_factory');
               $encoder = $factory->getEncoder($user);
               $password = $encoder->encodePassword($form->get('password')->getData(), $user->getSalt());
               $user->setPassword($password);


               $user->setRoles(array('ROLE_BLOGGER'));//envoie role par default
               $em = $this->getDoctrine()->getManager();
               $em->persist($user);
               $em->flush($user);

               return $this->redirectToRoute('user_show', array('id' => $user->getId()));
          }

          return $this->render('user/new.html.twig', array(
               'user' => $user,
               'form' => $form->createView(),
          ));
     }

     /**
     * Finds and displays a user entity.
     *
     */
     public function showAction(User $user)
     {
          $deleteForm = $this->createDeleteForm($user);

          return $this->render('user/show.html.twig', array(
               'user' => $user,
               'delete_form' => $deleteForm->createView(),
          ));
     }

     /**
     * Displays a form to edit an existing user entity.
     *
     */
     public function editAction(Request $request, User $user)
     {


               $deleteForm = $this->createDeleteForm($user);
               $editForm = $this->createForm('CA\BlogBundle\Form\UserType', $user);
               $editForm->handleRequest($request);

               if ($editForm->isSubmitted() && $editForm->isValid()) {
                    $user->setSalt(md5(uniqid()));//envoie le salt en dur

                    $factory = $this->get('security.encoder_factory');
                    $encoder = $factory->getEncoder($user);
                    $password = $encoder->encodePassword($editForm->get('password')->getData(), $user->getSalt());
                    $user->setPassword($password);

                    $this->getDoctrine()->getManager()->flush();

                    return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
               }

               return $this->render('user/edit.html.twig', array(
                    'user' => $user,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
               ));

     }

     /**
     * Deletes a user entity.
     *
     */
     public function deleteAction(Request $request, User $user)
     {
          if ($this->isGranted('ROLE_ADMIN')){
               $form = $this->createDeleteForm($user);
               $form->handleRequest($request);

               if ($form->isSubmitted() && $form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($user);
                    $em->flush($user);
               }

               return $this->redirectToRoute('user_index');
          }
          else {
               return $this->redirectToRoute('user_index');
          }
     }

     /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
     private function createDeleteForm(User $user)
     {
          return $this->createFormBuilder()
          ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
          ->setMethod('DELETE')
          ->getForm()
          ;
     }

     public function postsAction(User $user)
     {

               $em = $this->getDoctrine()->getManager();

               $users = $em->getRepository('CABlogBundle:User')->findAll();
               $posts = $em->getRepository('CABlogBundle:Post')->findBy(array('user' => $user->getId()), array('created' => 'DESC'));

               return $this->render('user/posts.html.twig', array(
                    'users' => $users,
                    'posts' => $posts,
               ));
     }
}
