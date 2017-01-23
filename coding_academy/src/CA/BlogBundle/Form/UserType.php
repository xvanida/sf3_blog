<?php

namespace CA\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class UserType extends AbstractType
{
     /**
     * {@inheritdoc}
     */
     public function buildForm(FormBuilderInterface $builder, array $options)
     {
          $builder->add('username')->add('password', RepeatedType::class, array(
               'type' => PasswordType::class,
               'invalid_message' => 'Passwords dont match',
               'error_bubbling' => true,
               'options' => array('attr' => array('class' => 'password-field')),
               'required' => true,
               'first_options'  => array('label' => 'Password'),
               'second_options' => array('label' => 'Repeat Password'),
          ))->add('mail')       ;
     }

     /**
     * {@inheritdoc}
     */
     public function configureOptions(OptionsResolver $resolver)
     {
          $resolver->setDefaults(array(
               'data_class' => 'CA\BlogBundle\Entity\User'
          ));
     }

     /**
     * {@inheritdoc}
     */
     public function getBlockPrefix()
     {
          return 'ca_blogbundle_user';
     }


}
