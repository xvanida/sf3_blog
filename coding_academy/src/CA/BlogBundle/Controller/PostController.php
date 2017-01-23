<?php

namespace CA\BlogBundle\Controller;


use CA\BlogBundle\Entity\Post;
use CA\BlogBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
* Post controller.
*
*/
class PostController extends Controller
{
     /**
     * Lists all post entities.
     *
     */
     public function indexAction()
     {
          $em = $this->getDoctrine()->getManager();

          $posts = $em->getRepository('CABlogBundle:Post')->findAll();

          return $this->render('post/index.html.twig', array(
               'posts' => $posts,
          ));
     }

     /**
     * Creates a new post entity.
     *
     */
     public function newAction(Request $request)
     {
          $post = new Post();
          $user = new User();
          $user = $this->getUser();
          $form = $this->createForm('CA\BlogBundle\Form\PostType', $post);
          $form->handleRequest($request);
          $this->denyAccessUnlessGranted('create', $post);

          if ($form->isSubmitted() && $form->isValid()) {
               $em = $this->getDoctrine()->getManager();
               $post->setCreated(new \Datetime('now'));
               $post->setUser($user);
               $em->persist($user);
               $em->persist($post);
               $em->flush($post);

               return $this->redirectToRoute('post_show', array('id' => $post->getId()));
          }

          return $this->render('post/new.html.twig', array(
               'post' => $post,
               'form' => $form->createView(),
          ));
     }

     /**
     * Finds and displays a post entity.
     *
     */
     public function showAction(Post $post)
     {
          $deleteForm = $this->createDeleteForm($post);

          return $this->render('post/show.html.twig', array(
               'post' => $post,
               'delete_form' => $deleteForm->createView(),
          ));
     }

     /**
     * Displays a form to edit an existing post entity.
     *
     */
     public function editAction(Request $request, Post $post)
     {
          $this->denyAccessUnlessGranted('edit', $post);
          $deleteForm = $this->createDeleteForm($post);
          $editForm = $this->createForm('CA\BlogBundle\Form\PostType', $post);
          $editForm->handleRequest($request);

          if ($editForm->isSubmitted() && $editForm->isValid()) {
               $post->setUpdated(new \Datetime('now'));
               $this->getDoctrine()->getManager()->flush();

               return $this->redirectToRoute('post_edit', array('id' => $post->getId()));
          }

          return $this->render('post/edit.html.twig', array(
               'post' => $post,
               'edit_form' => $editForm->createView(),
               'delete_form' => $deleteForm->createView(),
          ));
     }

     /**
     * Deletes a post entity.
     *
     */
     public function deleteAction(Request $request, Post $post)
     {
          $this->denyAccessUnlessGranted('delete', $post);
          $form = $this->createDeleteForm($post);
          $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
               $em = $this->getDoctrine()->getManager();
               $em->remove($post);
               $em->flush($post);
          }

          return $this->redirectToRoute('post_index');
     }

     /**
     * Creates a form to delete a post entity.
     *
     * @param Post $post The post entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
     private function createDeleteForm(Post $post)
     {
          return $this->createFormBuilder()
          ->setAction($this->generateUrl('post_delete', array('id' => $post->getId())))
          ->setMethod('DELETE')
          ->getForm()
          ;
     }

     public function postAction (Post $post)
     {

          $deleteForm = $this->createDeleteForm($post);

          return $this->render('post/post.html.twig', array(
               'post' => $post,
               'delete_form' => $deleteForm->createView(),
          ));
     }

}
