<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UzytkownikOcenaGraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('uzytkownikuzytkownik')
            ->add('ocenaocena')
            ->add('gragra')
            ->add('recenzjarecenzja')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\UzytkownikOcenaGra'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_uzytkownikocenagra';
    }
}
