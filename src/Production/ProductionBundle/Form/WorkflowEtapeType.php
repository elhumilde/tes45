<?php

namespace Production\ProductionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkflowEtapeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text', array('required'=> true,'attr' => array('class'=>'form-control has-feedback-left', 'placeholder'=>'Titre ' )))
            ->add('description','text', array('required'=> true,'attr' => array('class'=>'form-control has-feedback-left', 'placeholder'=>'Description ' )))
            ->add('idEtapePrecedente','text', array('required'=> true,'attr' => array('class'=>'form-control has-feedback-left', 'placeholder'=>'Code Etape Precedente ' )))
            ->add('tempsPrevu','text', array('required'=> true,'attr' => array('class'=>'form-control has-feedback-left', 'placeholder'=>'Temps Prevu ' )))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Production\ProductionBundle\Entity\WorkflowEtape'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'production_productionbundle_workflowetape';
    }
}
