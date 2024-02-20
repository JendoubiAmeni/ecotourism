<?php

namespace App\Form;

use App\Entity\Evenement;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Positive;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('date',DateType::class,[
                'widget'=>'single_text',
                'empty_data'=>'',
            ])
            ->add('duree', IntegerType::class, [
                'label' => 'Durée (en minutes)',
                'constraints' => [
                    new Positive(),
                ],
            ])
            ->add('prixA')
            ->add('description')
            ->add('lieu')
            ->add('image' , FileType::class, array('data_class' => null , 'label'=>"image") )
            ->add('submit',SubmitType::class,[
                'label'=>"Ajouter Événement",
            ]
            )
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
