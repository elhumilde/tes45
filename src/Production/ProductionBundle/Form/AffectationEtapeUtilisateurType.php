<?php

namespace Production\ProductionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AffectationEtapeUtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idUser')
            ->add('idEtape')
            ->add('idLigneBc')
            ->add('dateAffectation')
            ->add('etape')
            ->add('bncommande')
            ->add('utilisateur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Production\ProductionBundle\Entity\AffectationEtapeUtilisateur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'production_productionbundle_affectationetapeutilisateur';
    }
}
