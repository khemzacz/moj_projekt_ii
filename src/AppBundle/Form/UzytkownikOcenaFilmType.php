<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UzytkownikOcenaFilmType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idUzocfi')
            ->add('uzytkownikuzytkownik')
            ->add('ocenaocena')
            ->add('filmfilm')
            ->add('recenzjarecenzja')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\UzytkownikOcenaFilm'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_uzytkownikocenafilm';
    }
}
