<?php

namespace CA\BlogBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
* Post
*/
class Post
{
     /**
     * @var int
     */
     private $id;

     /**
     * @var string
     */
     private $title;

     /**
     * @var string
     */
     private $content;

     /**
     * @var \DateTime
     */
     private $created;

     /**
     * @var \DateTime
     */
     private $updated;

     /**
     * @var \int
     */
     private $user_id;


     private $user;






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
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
     public function setTitle($title)
     {

          $this->title = $title;

          return $this;
     }

     /**
     * Get title
     *
     * @Assert\Length(min=2)
     * @Assert\Length(max=100)
     * @return string
     */
     public function getTitle()
     {

          return $this->title;
     }

     /**
     * Set content
     *
     * @param string $content
     *
     * @return Post
     */
     public function setContent($content)
     {
          $this->content = $content;

          return $this;
     }

     /**
     * Get content
     *
     * @return string
     */
     public function getContent()
     {
          return $this->content;
     }

     /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Post
     */
     public function setCreated($created)
     {
          $this->created = $created;

          return $this;
     }

     /**
     * Get created
     *
     * @return \DateTime
     */
     public function getCreated()
     {
          return $this->created;
     }

     /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Post
     */
     public function setUpdated($updated)
     {
          $this->updated = $updated;
          return $this;
     }

     /**
     * Get updated
     *
     * @return \DateTime
     */
     public function getUpdated()
     {
          return $this->updated;
     }

     /**
     * @ORM\PreUpdate()
     */


    /**
     * Set user
     *
     * @param \CA\BlogBundle\Entity\User $user
     *
     * @return Post
     */
    public function setUser(\CA\BlogBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CA\BlogBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    public function getOwner()
    {
         return $this->user->getId();
    }
}
