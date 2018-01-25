<?php

namespace Production\ProductionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkflowExecutionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idLigneBc')
            ->add('idEtape')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('commentaire')
            ->add('urlPj')
            ->add('idUtilisateur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Production\ProductionBundle\Entity\WorkflowExecution'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'production_productionbundle_workflowexecution';
    }
}
