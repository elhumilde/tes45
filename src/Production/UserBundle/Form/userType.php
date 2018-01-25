<?php

namespace Production\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class userType extends AbstractType
{
    private $isAdmin;
    private $isOwner;

    public function __construct($isAdmin = true, $isOwner = false)
    {
        $this->isAdmin = $isAdmin;
        $this->isOwner = $isOwner;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('family_name',null,array('attr'=>array('class'=>'form-control')))
            ->add('first_name',null,array('attr'=>array('class'=>'form-control')))
            ->add('tel',null,array('attr'=>array('class'=>'form-control')))
            ->add('image' , new \Production\ProductionBundle\Form\imageType())
            ;
        if($this->isAdmin)
            $builder
            ->add('username',null,array('attr'=>array('class'=>'form-control')))
            ->add('email',null,array('attr'=>array('class'=>'form-control')))
            ->add('plainpassword', 'text', array('required' => false,'attr'=>array('class'=>'form-control')))
            ->add('enabled', 'checkbox', array('required' => false));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cinque\UserBundle\Entity\user'
        ));
    }

    public function getName()
    {
        return 'user_type';
    }
}
