<?php

namespace Sam\Project\ProcatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Sam\Project\ProcatBundle\Form\CategoryType;
use Sam\Project\ProcatBundle\Repository\CategoryRepository;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('likes', 'number', array('attr' => array('class' => 'likes')))
            ->add('category', 'entity', array(
                'class' => 'SamProjectProcatBundle:Category',
                'query_builder' => function (CategoryRepository $cr){
                    return $cr->createQueryBuilder('c')
                        ->where('c.lvl = 2')
                        ->orderBy('c.name', 'ASC');
                }
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sam\Project\ProcatBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sam_project_procatbundle_product';
    }
}
