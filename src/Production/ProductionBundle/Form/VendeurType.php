<?php

namespace Production\ProductionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VendeurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code','text', array('required'=> true,'attr' => array('class'=>'form-control has-feedback-left', 'placeholder'=>'Code Vendeur ' )))
            ->add('nom','text', array('required'=> true,'attr' => array('class'=>'form-control has-feedback-left', 'placeholder'=>'Nom  ' )))
            ->add('prenom','text', array('required'=> true,'attr' => array('class'=>'form-control has-feedback-left', 'placeholder'=>'Prenom ' )))
            ->add('email','text', array('required'=> true,'attr' => array('class'=>'form-control has-feedback-left', 'placeholder'=>'Ex : test@edicom.ma ' )))
            ->add('tel','text', array('required'=> true,'attr' => array('class'=>'form-control has-feedback-left', 'placeholder'=>'Ex 05 22 22 22 22 ' )))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Production\ProductionBundle\Entity\Vendeur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'production_productionbundle_vendeur';
    }
}
