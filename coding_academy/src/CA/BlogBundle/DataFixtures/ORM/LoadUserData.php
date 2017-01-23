<?php
namespace CA\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CA\BlogBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
     /**
     * @var ContainerInterface
     */
     private $container;

     public function setContainer(ContainerInterface $container = null)
     {
          $this->container = $container;
     }

     public function load(ObjectManager $manager)
     {
          $userAdmin = new User();
          $userAdmin->setUsername('Gecko');
          $userAdmin->setMail('gecko@coding.eu');
          $userAdmin->setRoles(array('ROLE_ADMIN'));
          $userAdmin->setSalt(md5(uniqid()));//envoie le salt en dur
          $factory = $this->container->get('security.encoder_factory');
          $encoder = $factory->getEncoder($userAdmin);
          $password = $encoder->encodePassword('coding', $userAdmin->getSalt());
          $userAdmin->setPassword($password);

          $userBlogger = new User();
          $userBlogger->setUsername('Martin');
          $userBlogger->setMail('martin@coding.eu');
          $userBlogger->setRoles(array('ROLE_BLOGGER'));
          $userBlogger->setSalt(md5(uniqid()));//envoie le salt en dur
          $factory = $this->container->get('security.encoder_factory');
          $encoder = $factory->getEncoder($userBlogger);
          $password = $encoder->encodePassword('platypus', $userBlogger->getSalt());
          $userBlogger->setPassword($password);


          $manager->persist($userAdmin);
          $manager->persist($userBlogger);
          $manager->flush();
     }
}
