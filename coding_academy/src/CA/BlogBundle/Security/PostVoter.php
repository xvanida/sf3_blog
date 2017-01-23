<?php

namespace CA\BlogBundle\Security;

use CA\BlogBundle\Entity\Post;
use CA\BlogBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;

class PostVoter extends Voter
{

     const EDIT = "edit";
     const DELETE = "delete";
     const CREATE = "create";

     private $decisionManager;

      public function __construct(AccessDecisionManagerInterface $decisionManager)
      {
          $this->decisionManager = $decisionManager;
      }

     protected function supports($attribute, $subject)
     {
          //if the attribute isn't one we support, return false
          if(!in_array($attribute, array(self::EDIT, self::DELETE, self::CREATE))){
               return false;
          }
          //only vote on Post objects insite this voter
          if(!$subject instanceof Post){
               return false;
          }
          return true;
     }

     protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
     {
          $user = $token->getUser();

          if (!$user instanceof User){
               // the user must be logged in; if not, deny access
               return false;
          }

          if ($this->decisionManager->decide($token, array('ROLE_ADMIN'))) {
               return true;
          }


          // you know $subject is a Post object, thanks to supports
          /** @var Post $post */
          $post = $subject;

          switch ($attribute) {
               case self::DELETE:
               return $this->canDelete($post, $user);
               case self::EDIT:
               return $this->canEdit($post, $user);
               case self::CREATE:
               return $this->canCreate($post, $user);
          }
           throw new \LogicException('This code should not be reached!');
     }

     private function canCreate(Post $post, User $user)
     {
          if ($user->getRoles() == array("ROLE_BLOGGER"))
          {
               return true;
          }
     }

     private function canDelete(Post $post, User $user)
    {
         if ($post->getOwner() == $user->getId())
        {
             return true;
        }


        // the Post object could have, for example, a method isPrivate()
        // that checks a boolean $private property
     //    return !$post->isPrivate();
    }

    private function canEdit(Post $post, User $user)
    {
        // this assumes that the data object has a getOwner() method
        // to get the entity of the user who owns this data object
        if ($post->getOwner() == $user->getId())
        {
             return true;
        }
     //    return $user === $post->getUser();
    }

}
