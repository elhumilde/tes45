<?php

namespace Production\ProductionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BonCommandeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numBc')
            ->add('codeFirme')
            ->add('dateBc')
            ->add('datePrevueReunionClient')
            ->add('codeVendeur')
            ->add('montantHt')
            ->add('montantTtc')
            ->add('idClient')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Production\ProductionBundle\Entity\BonCommande'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'production_productionbundle_boncommande';
    }
}
