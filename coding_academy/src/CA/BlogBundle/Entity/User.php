<?php


namespace CA\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/** * User
*
* @ORM\Table(name="user")
* @ORM\Entity(repositoryClass="CA\BlogBundle\Repository\UserRepository")
*/
/**
* @ORM\Entity
* @UniqueEntity(fields="mail", message="Email already taken")
* @UniqueEntity(fields="username", message="Username already taken")
* @UniqueEntity(fields="password", message="Password don't match")
*/
class User implements UserInterface, \Serializable
{
     /**
     * @var int
     */
     private $id;

     /**
     * @var string
     * @Assert\Length(min=2)
     * @Assert\Length(max=50)
     * @Assert\Regex(pattern="/^[a-zA-Z]+\d*$/")
     */
     private $username;

     /**
     * @var string
     * @Assert\Length(min=2)
     * @Assert\Length(max=50)
     * @Assert\Regex(pattern="/^[a-zA-Z0-9_]+$/")
     */
     private $password;

     /**
     * @var string
     */
     private $salt;

     /**
     * @var string
     * @Assert\Regex(pattern="/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/")
     */
     private $mail;

     /**
     * @var array
     */
     private $roles;

     private $posts;




     /**
     * Get id
     *
     * @return int
     */
     public function getId()
     {
          return $this->id;
     }

     /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
     public function setUsername($username)
     {
          $this->username = $username;

          return $this;
     }

     /**
     * Get username
     *
     * @return string
     */
     public function getUsername()
     {
          return $this->username;
     }

     /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
     public function setPassword($password)
     {
          $this->password = $password;

          return $this;
     }

     /**
     * Get password
     *
     * @return string
     */
     public function getPassword()
     {
          return $this->password;
     }

     /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
     public function setSalt($salt)
     {
          $this->salt = $salt;

          return $this;
     }

     /**
     * Get salt
     *
     * @return string
     */
     public function getSalt()
     {
          return $this->salt;
     }

     /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
     public function setMail($mail)
     {
          $this->mail = $mail;

          return $this;
     }

     /**
     * Get mail
     *
     * @return string
     */
     public function getMail()
     {
          return $this->mail;
     }

     /**
     * Set roles
     *
     * @param array $roles
     *
     * @return User
     */
     public function setRoles($roles)
     {
          $this->roles = $roles;

          return $this;
     }

     /**
     * Get roles
     *
     * @return array
     */
     public function getRoles()
     {
          return $this->roles;
     }

     public function eraseCredentials()
     {
     }

     /** @see \Serializable::serialize() */
     public function serialize()
     {
          return serialize(array(
               $this->id,
               $this->username,
               $this->password,
               // see section on salt below
               // $this->salt,
          ));
     }

     /** @see \Serializable::unserialize() */
   public function unserialize($serialized)
   {
       list (
           $this->id,
           $this->username,
           $this->password,
           // see section on salt below
           // $this->salt
       ) = unserialize($serialized);
   }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add post
     *
     * @param \CA\BlogBundle\Entity\Post $post
     *
     * @return User
     */
    public function addPost(\CA\BlogBundle\Entity\Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \CA\BlogBundle\Entity\Post $post
     */
    public function removePost(\CA\BlogBundle\Entity\Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
